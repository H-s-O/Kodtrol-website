@extends('pages/manual')

@section('manualContent')
<h1><small>Interface</small></h1>
<h1>Scripts</h1>

<h2 id="scripts-browser">Scripts browser</h2>

<p>Allows you to create new scripts and lists existing scripts.</p>

<div>
    <img class="screenshot" src="/images/screenshots/scripts_browser.png"/>
</div>

@screenshots([
    'items' => [
        [
            'name' => 'Add button',
            'file' => '/images/screenshots/scripts_browser_add.png',
        ],
    ],
])
@slot('item0')
<p><strong>Add button</strong></p>
<p>Click to open the <a href="#add-script-dialog">Add script dialog</a>.</p>
@endslot
@endcomponent

<h2 id="add-script-dialog">Add script dialog</h2>

<div>
    <img class="screenshot" src="/images/screenshots/add_script_dialog.png"/>
</div>

@endsection
