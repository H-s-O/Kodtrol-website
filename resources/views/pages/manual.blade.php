@extends('master')

@push('head')
<style>
.manual-container { width: 100%; margin-top: 1em; display: flex; }
.manual-container .sidecol { flex-shrink: 0; padding: 0 2em 0 1em; }
.manual-container .sidecol h2 { margin: 0 0 1em 0; }
.manual-container .sidecol .menuwrapper { position: -webkit-sticky; position: sticky; top: 1em; }
.manual-container .sidecol li > p { font-weight: bold; margin: 0.5em 0 0.5em 0; }
.manual-container .sidecol ul { padding-left: 1.5em; }
.manual-container .contentcol { flex-grow: 1; padding: 0 1em 0 2em; border-left: 1px #AAA solid; }
.manual-container .contentcol h1:first-child { margin: 0 0 0em 0; }

.def-group { margin-bottom: 3em; border-left: 2px #AAA solid; padding-left: 1em; }
.def-table-container { padding: 0 1em 0 1em; background-color: #F5F5F5; }
.method-def { margin-bottom: 0.5em; background-color: #EEE; padding: 1em; }
.method-signature { display:block; font-size: 2em; font-weight: bold; white-space: nowrap; }
.method-desc { margin-bottom: 0; margin-top: 1em; }
.code-example { white-space:pre; display:block; padding: 1em; background-color: #EEE; }
.args-list { margin: 0; padding-left: 1em; }
.type { font-style: italic; color:darkorange; }
.var { color:darkslategrey; }
.func { color:darkred; }
.screenshot { width: auto; max-height: 400px; }

table { border-collapse: collapse; }
table tr td { padding: 1em 0 1em; vertical-align: top; }
table tr:not(:last-child) td { border-bottom: 1px #AAA solid; }
table tr td:first-child { padding-right: 1em; font-weight: bold; }

code { font-size: 1.2em; }

hr { margin: 2em 0 2em 0; border: 0; border-top: 1px #AAA solid; }
</style>
@endpush

@section('content')
<div class="manual-container">
    <div class="sidecol">
        <div class="menuwrapper">
            <h2>Manual & Reference</h2>
            <ul>
                <li><p><a href="{{ route('manual') }}">Introduction</a></p></li>
                <li>
                    <p>Interface</p>
                    <ul>
                        <li>
                            <p><a href="{{ route('manual.devices') }}">Devices</a></p>
                            <ul>
                                <li><a href="{{ route('manual.devices') }}#devices-browser">Devices browser</a>
                                <li><a href="{{ route('manual.devices') }}#add-device-dialog">Add device dialog</a>
                            </ul>
                        </li>
                        <li>Scripts browser</li>
                        <li>Script editor</li>
                        <li>Timelines & Boards browser</li>
                        <li>Timeline editor</li>
                        <li>Board editor</li>
                    </ul>
                </li>
                <li>
                    <p>Scripting</p>
                    <ul>
                        <li>
                            <p><a href="{{ route('manual.objects') }}">Objects</a></p>
                            <ul>
                                <li><a href="{{ route('manual.objects') }}#Device">Device</a></li>
                            </ul>
                        </li>
                        <li>
                            <p><a href="{{ route('manual.hooks') }}">Hooks</a></p>
                            <ul>
                                <li><a href="{{ route('manual.hooks') }}#setup">setup</a></li>
                                <li><a href="{{ route('manual.hooks') }}#start">start</a></li>
                                <li><a href="{{ route('manual.hooks') }}#frame">frame</a></li>
                                <li><a href="{{ route('manual.hooks') }}#beat">beat</a></li>
                                <li><a href="{{ route('manual.hooks') }}#input">input</a></li>
                            </ul>
                        </li>
                        <li>
                            <p><a href="{{ route('manual.helpers') }}">Helpers</a></p>
                            <ul>
                                @include('pages/manual/helpers_menu_generated')
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="contentcol">
        @section('manualContent')
        <h1>Introduction</h1>
        <p>Kodtrol is all about scripting. By having low-level access to your devices, you are free to code the exact behaviors, animations and
            effects you want.</p>
        @endsection
        @yield('manualContent')
    </div>
</div>
@endsection
