<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateHelpersPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:helpers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate helpers documentation page from the helpers_doc.json file in the app repo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $docFilePath = base_path() . '/../app/dev/helpers_doc.json';
        if (!file_exists($docFilePath)) {
            $this->error('Helpers doc file not found at '.$docFilePath);
            return;
        }

        $docFileData = json_decode(file_get_contents($docFilePath));
        // dd($docFileData);
        $functionsData = array_filter($docFileData, function($value) {
            return $value->kind === 'function' && !isset($value->undocumented);
        });

        $menuTemplateString = array_reduce($functionsData, function($template, $functionData) {
            $this->line('Generating '.$functionData->name.' menu...');

            $functionTemplate = '<li><a href="{{ route(\'manual.helpers\') }}#'.$functionData->name.'">'.$functionData->name.'</a></li>'."\n";
            return $template.$functionTemplate;
        }, '{{-- GENERATED BY THE doc:helpers COMMAND; DO NOT EDIT --}}'."\n\n");

        $menuTemplateFilePath = resource_path('views/pages/manual/helpers_menu_generated.blade.php');
        if (file_put_contents($menuTemplateFilePath, $menuTemplateString) === false) {
            $this->error('Could not write to template file at '.$menuTemplateFilePath);
            return;
        }

        $docTemplateString = array_reduce($functionsData, function($template, $functionData) {
            $this->line('Generating '.$functionData->name.' doc...');

            $functionTemplate = '<a name="'.$functionData->name.'"></a>'."\n";
            $functionTemplate .= '@method(["name" => "'.$functionData->name.'",';
            if (isset($functionData->description)) {
                $functionTemplate .= '"description" => "'.$this->codify($functionData->description).'",';
            }
            if (isset($functionData->params)) {
                $functionTemplate .= array_reduce($functionData->params, function($template, $paramData) {
                    $paramTemplate = '"'.$paramData->name.'" => ["type" => "'.$paramData->type->names[0].'", "desc" => "'.$this->codify($paramData->description).'"],';
                    return $template.$paramTemplate;
                }, '"args" => [');
                $functionTemplate .= '],';
            }
            if (isset($functionData->returns)) {
                $functionTemplate .= '"returnType" => "'.$this->codify($functionData->returns[0]->type->names[0]).'",';
            }
            $functionTemplate .= '])'."\n";
            if (isset($functionData->returns)) {
                $functionTemplate .= '@slot("returnDesc")'."\n".'<p>'.$this->codify($functionData->returns[0]->description).'</p>'."\n".'@endslot'."\n";
            }
            if (isset($functionData->examples)) {
                $functionTemplate .= '@slot("example")'."\n".$functionData->examples[0]."\n".'@endslot'."\n";
            }
            $functionTemplate .= '@endcomponent'."\n\n";
            return $template.$functionTemplate;
        }, '{{-- GENERATED BY THE doc:helpers COMMAND; DO NOT EDIT --}}'."\n\n");

        $docTemplateFilePath = resource_path('views/pages/manual/helpers_docs_generated.blade.php');
        if (file_put_contents($docTemplateFilePath, $docTemplateString) === false) {
            $this->error('Could not write to template file at '.$docTemplateFilePath);
            return;
        }

        $this->info('Complete!');
    }

    private function codify($text)
    {
        return preg_replace('/`(.*?)`/', '<code>$1</code>', addcslashes($text, '"'));
    }
}
