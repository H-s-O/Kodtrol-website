@extends('pages/manual')

@section('manualContent')
<h1><small>Scripting</small></h3>

<h1>Hooks</h1>
<p>Hooks are functions you write to make your scripts respond to various events while it is executed by Kodtrol.</p>

<hr>

<a name="frame"></a>
@method([
    'name' => 'frame',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'the list of <a href="/devices">Devices</a> associated to the script',
        ],
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
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
    'returnType' => 'mixed',
])
@slot('description')
<p>When the script is in a timeline, this hook is continously executed on each frame for the whole duration of the script block.</p>
<p>When the script is in a board, this hook is continously executed on each frame as long as the script block is active.</p>
<p>When running standalone, this hook is endlessly executed on each frame.</p>
<p>This hook is used to set and output device data.</p>
@endslot
@slot('returnDesc')
<p>Optional; any value returned by this hook will be saved as script data.</p>
@endslot
@slot('example')
function frame(devices, data, blockInfo, triggers, curves) {
    devices.forEach((device) => {
        device.setDimmer(255);
    });

    // Optionally return script data
    // return { foo: 42 };
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
    'returnType' => 'mixed',
])
@slot('description')
<p>This hook is executed once, immediately before the first execution of any other hook.</p>
<p>You can use this hook to prepare certain device data, before the
        actual script execution begins.</p>
@endslot
@slot('returnDesc')
<p>Optional; any value returned by this hook will be saved as script data.</p>
@endslot
@slot('example')
function start(devices, data, triggers, curves) {
    devices.forEach((device) => {
        device.setDimmer(255);
    });

    // Optionally return script data
    // return { foo: 42 };
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
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
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
    'returnType' => 'mixed',
])
@slot('description')
<p>When the script is in a timeline, this hook is continously executed on each frame for the whole duration of the script block.</p>
<p>When the script is in a board, this hook is continously executed on each frame as long as the script block is active.</p>
<p>When running standalone, this hook is endlessly executed on each frame.</p>
<p>This hook is used to set and output device data.</p>
@endslot
@slot('returnDesc')
<p>Optional; any value returned by this hook will be saved as script data.</p>
@endslot
@slot('example')
function setup(devices) {
    devices.forEach((device) => {
        device.setPan(127);
    });

    // Optionally return script data
    // return { foo: 1 };
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
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
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
    'returnType' => 'mixed',
])
@slot('description')
<p>When the script is in a timeline, this hook is continously executed on each frame for the whole duration of the script block.</p>
<p>When the script is in a board, this hook is continously executed on each frame as long as the script block is active.</p>
<p>When running standalone, this hook is endlessly executed on each frame.</p>
<p>This hook is used to set and output device data.</p>
@endslot
@slot('returnDesc')
<p>Optional; any value returned by this hook will be saved as script data.</p>
@endslot
@slot('example')
function setup(devices) {
    devices.forEach((device) => {
        device.setPan(127);
    });

    // Optionally return script data
    // return { foo: 1 };
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
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p>This hook is executed on each 1/24th of a beat, respective of the set tempo of the timeline, board or standalone setting.</p>
<p>Use this hook to create beat-based automations and set or alter device variables and script data; you can then use the values you set
    in the <a href="#frame">frame()</a> hook. You cannot set device output content within this hook.</p>
@endslot
@slot('returnDesc')
<p>Optional; any value returned by this hook will be saved as script data.</p>
@endslot
@slot('example')
function beat(devices, beatInfo, data) {
    if (isBeatDivision(beatInfo.localBeat, 24)) {
        devices.forEach((device) => {
            device.setVar('flash', true);
        });
    }

    // Optionally return script data
    // return { foo: 42 };
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
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p>This hook is executed each time input content is received from any of your active inputs.</p>
<p>Use this hook to create interactive automations and set or alter device variables and script data; you can then use the values you set
    in the <a href="#frame">frame()</a> hook. You cannot set device output content within this hook.</p>
@endslot
@slot('returnDesc')
<p>Optional; any value returned by this hook will be saved as script data.</p>
@endslot
@slot('example')
function input(devices, inputType, inputData, data) {
    if (inputType === 'midi') {
        if (inputData.getNoteOn()) {
            devices.forEach((device) => {
                device.setVar('flash', true);
            });
        }
    }

    // Optionally return script data
    // return { foo: 42 };
}
@endslot
@endcomponent

@endsection
