@extends('pages/manual')

@section('manualContent')
<h1><small>Scripting</small></h3>

<h1>Hooks</h1>
<p>Hooks are functions you implement to define how a script reacts to specific events.</p>

<hr>

<a name="setup"></a>
@method([
    'name' => 'setup',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'a list of Devices that are associated to the script',
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p>Optional hook.</p>
<p>When running in a timeline, this hook is continously executed on each render frame for half a second before the script starts
    (except if the script starts less than half a second after the beginning of a timeline).</p>
<p>When running standalone, this hook is executed once, immediately before <a href="#start">start()</a>.</p>
<p>You can use this hook to prepare certain device channels, such as pan and tilt, before the
        actual script execution begins.</p>
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

<a name="start"></a>
@method([
    'name' => 'start',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'a list of Devices that are associated to the script',
        ],
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
        ],
        'triggers' => [
            'type' => 'object',
            'desc' => 'a structure of currently occuring timeline triggers',
            'timeline' => true,
        ],
        'curves' => [
            'type' => 'object',
            'desc' => 'a structure of currently occuring timeline curves',
            'timeline' => true,
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p>Optional hook.</p>
<p>This hook is executed once, immediately before the first execution of <a href="#frame">frame()</a>.</p>
<p>You can use this hook to prepare certain device channels, such as pan and tilt, before the
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

<a name="frame"></a>
@method([
    'name' => 'frame',
    'args' => [
        'devices' => [
            'type' => 'array',
            'desc' => 'a list of Devices that are associated to the script',
        ],
        'data' => [
            'type' => 'mixed',
            'desc' => 'the current script data',
        ],
        'blockInfo' => [
            'type' => 'object',
            'desc' => 'a structure of infos related to the scripts timing on the timeline',
            'timeline' => true,
        ],
        'triggers' => [
            'type' => 'object',
            'desc' => 'a structure of currently occuring timeline triggers',
            'timeline' => true,
        ],
        'curves' => [
            'type' => 'object',
            'desc' => 'a structure of currently occuring timeline curves',
            'timeline' => true,
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p><strong>Mandatory</strong> hook.</p>
<p>When in a timeline, this hook is continously executed on each render frame for the whole duration of the script.</p>
<p>When running standalone, this hook is endlessly executed on each render frame.</p>
<p>This hook is used to do the main rendering to your devices.</p>
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
<p>Optional hook.</p>
<p>This hook is executed on each 1/24th of a beat, respective of the set tempo.</p>
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
<p>Optional hook.</p>
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
