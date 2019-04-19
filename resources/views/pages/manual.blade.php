@extends('master')

@push('head')
<style>
.manual-container { position: relative; }
.manual-container .sidecol { width: 25%; position: absolute; left: 0; }
.manual-container .sidecol li > p { font-weight: bold; }
.manual-container .contentcol { width: 75%; position: absolute; left: 25%; padding: 0 2em 0 2em; border-left: 1px #AAA solid; }

.def-group { margin-bottom: 3em; }
.def-table-container { border-left: 2px #AAA solid; padding-left: 1em; }
.method-def { display:block; font-size: 2em; margin-bottom: 0.5em; }
.code-example { white-space:pre; display:block; padding: 1em; background-color: #EEE; }
.args-list { margin: 0; padding-left: 1em; }
.type { font-style: italic; color:darkorange; }
.var { color:darkslategrey; }
.func { color:darkred; }

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
        <ul>
            <li><p><a href="{{ route('manual') }}">Introduction</a></p></li>
            <li>
                <p>Interface</p>
                <ul>
                    <li>Devices browser</li>
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
                            <li><a href="{{ route('manual.helpers') }}#isEven">isEven</a></li>
                            <li><a href="{{ route('manual.helpers') }}#isOdd">isOdd</a></li>
                            <li><a href="{{ route('manual.helpers') }}#clamp">clamp</a></li>
                            <li><a href="{{ route('manual.helpers') }}#map">map</a></li>
                            <li><a href="{{ route('manual.helpers') }}#mix">mix</a></li>
                            <li><a href="{{ route('manual.helpers') }}#tri">tri</a></li>
                            <li><a href="{{ route('manual.helpers') }}#randomBetween">randomBetween</a></li>
                            <li><a href="{{ route('manual.helpers') }}#randomIndex">randomIndex</a></li>
                            <li><a href="{{ route('manual.helpers') }}#randomIndexWhere">randomIndexWhere</a></li>
                            <li><a href="{{ route('manual.helpers') }}#randomValue">randomValue</a></li>
                            <li><a href="{{ route('manual.helpers') }}#randomValueWhere">randomValueWhere</a></li>
                            <li><a href="{{ route('manual.helpers') }}#isBeatDivision">isBeatDivision</a></li>
                            <li><a href="{{ route('manual.helpers') }}#step">step</a></li>
                            <li><a href="{{ route('manual.helpers') }}#smoothFollow">smoothFollow</a></li>
                            <li><a href="{{ route('manual.helpers') }}#smoothReset">smoothReset</a></li>
                            <li><a href="{{ route('manual.helpers') }}#smoothValue">smoothValue</a></li>
                            <li><a href="{{ route('manual.helpers') }}#smoothVarName">smoothVarName</a></li>
                            <li><a href="{{ route('manual.helpers') }}#backInOut">backInOut</a></li>
                            <li><a href="{{ route('manual.helpers') }}#bounceOut">bounceOut</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
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
