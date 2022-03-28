@extends('pages/manual')

@section('manualContent')
<h1><small>Scripting</small></h3>

<h1>Hooks</h1>
<p>Hooks are functions you write to make your scripts respond to various events while it is executed by Kodtrol.</p>
<p>Hooks must be written as top-level functions in your scripts in order to be valid and properly executed:</p>
<code class="code-example">// Good
function frame(devices) {
}

// Bad
function myOtherFunction() {
    function frame(devices) {
    }
}

// Also bad
var frame = function(devices) {
}
</code>

<hr>

<a name="frame"></a>
@method([
    'name' => 'frame',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'the list of <a href="/devices">Devices</a> associated to the script',
        ],
        'blockInfo' => [
            'type' => 'object',
            'desc' => 'infos related to the scripts timing and progression',
            'timeline' => true,
            'board' => true,
        ],
        'triggers' => [
            'type' => 'object',
            'desc' => 'timeline trigger(s) occuring at the time this hook is run',
            'timeline' => true,
        ],
        'curves' => [
            'type' => 'object',
            'desc' => 'timeline curve(s) occuring at the time this hook is run',
            'timeline' => true,
        ],
    ],
])
@slot('description')
<p>When the script is in a timeline, this hook is continuously executed on each frame for the whole duration of the script block.</p>
<p>When the script is in a board, this hook is continuously executed on each frame as long as the script block is active.</p>
<p>When running standalone, this hook is continuously executed on each frame.</p>
<p>This hook is used to set and output device data.</p>
@endslot
@slot('example')
function frame(devices, blockInfo, triggers, curves) {
    devices.forEach((device) => {
        device.setDimmer(255);
    });
}
@endslot
@endcomponent

<a name="start"></a>
@method([
    'name' => 'start',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'the list of <a href="/devices">Devices</a> associated to the script',
        ],
    ],
])
@slot('description')
<p>This hook is executed once, immediately before the first execution of any other hook.</p>
<p>You can use this hook to prepare certain device data, before the
        actual script execution begins.</p>
@endslot
@slot('example')
function start(devices) {
    devices.forEach((device) => {
        device.setDimmer(255);
    });
}
@endslot
@endcomponent

<a name="leadInFrame"></a>
@method([
    'name' => 'leadInFrame',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'the list of <a href="/devices">Devices</a> associated to the script',
        ],
        'blockInfo' => [
            'type' => 'object',
            'desc' => 'infos related to the scripts timing and progression',
            'timeline' => true,
            'board' => true,
        ],
        'triggers' => [
            'type' => 'object',
            'desc' => 'timeline trigger(s) occuring at the time this hook is run',
            'timeline' => true,
        ],
        'curves' => [
            'type' => 'object',
            'desc' => 'timeline curve(s) occuring at the time this hook is run',
            'timeline' => true,
        ],
    ],
])
@slot('description')
<p>When the script is in a timeline, this hook is continuously executed on each frame for the lead-in duration of the script block.</p>
<p>When the script is in a board, this hook is continuously executed on each frame for the lead-in duration of the script block after it is activated.</p>
<p>When running standalone, this hook is <strong>not</strong> executed.</p>
<p>This hook is used to set and output device data.</p>
@endslot
@slot('example')
function leadInFrame(devices) {
    devices.forEach((device) => {
        device.setPan(127);
    });
}
@endslot
@endcomponent

<a name="leadOutFrame"></a>
@method([
    'name' => 'leadOutFrame',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'the list of <a href="/devices">Devices</a> associated to the script',
        ],
        'blockInfo' => [
            'type' => 'object',
            'desc' => 'infos related to the scripts timing and progression',
            'timeline' => true,
            'board' => true,
        ],
        'triggers' => [
            'type' => 'object',
            'desc' => 'timeline trigger(s) occuring at the time this hook is run',
            'timeline' => true,
        ],
        'curves' => [
            'type' => 'object',
            'desc' => 'timeline curve(s) occuring at the time this hook is run',
            'timeline' => true,
        ],
    ],
])
@slot('description')
<p>When the script is in a timeline, this hook is continuously executed on each frame for the lead-out duration of the script block.</p>
<p>When the script is in a board, this hook is continuously executed on each frame for the lead-out duration of the script block after it is deactivated.</p>
<p>When running standalone, this hook is <strong>not</strong> executed.</p>
<p>This hook is used to set and output device data.</p>
@endslot
@slot('example')
function leadOutFrame(devices) {
    devices.forEach((device) => {
        device.setPan(127);
    });
}
@endslot
@endcomponent

<a name="beat"></a>
@method([
    'name' => 'beat',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'a list of Devices that are associated to the script',
        ],
        'beatInfo' => [
            'type' => 'object',
            'desc' => 'a structure of infos related to beat progression',
        ],
    ],
])
@slot('description')
<p>This hook is executed on each 1/24th of a beat, respective of the set tempo of the timeline, board or standalone setting.</p>
<p>Use this hook to create beat-based automations and set or alter global or device variables; you can then use those values
    afterwards in the <a href="#frame">frame()</a> hook. You cannot set device output content within this hook.</p>
@endslot
@slot('example')
function beat(devices, beatInfo) {
    if (isBeatDivision(beatInfo.localBeat, 24)) {
        devices.forEach((device) => {
            device.setVar('flash', true);
        });
    }
}
@endslot
@endcomponent

<a name="input"></a>
@method([
    'name' => 'input',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'a list of Devices that are associated to the script',
        ],
        'inputType' => [
            'type' => 'string',
            'desc' => 'the type of received input',
        ],
        'inputData' => [
            'type' => 'object',
            'desc' => 'a structure of infos related to the received input',
        ],
    ],
])
@slot('description')
<p>This hook is executed each time input content is received from any of your active inputs.</p>
<p>Use this hook to create interactive automations and set or alter global or device variables; you can then use those values
    afterwards in the <a href="#frame">frame()</a> hook. You cannot set device output content within this hook.</p>
@endslot
@slot('example')
function input(devices, inputType, inputData) {
    if (inputType === 'midi') {
        if (inputData.getNoteOn()) {
            devices.forEach((device) => {
                device.setVar('flash', true);
            });
        }
    }
}
@endslot
@endcomponent

@endsection
