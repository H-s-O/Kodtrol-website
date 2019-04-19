@extends('pages/manual')

@section('manualContent')
<h1><small>Scripting</small></h1>

<h1>Objects</h1>
<p>Accessible in your scripts are Objects that reference items that you created in Kodtrol, such as Devices and Medias.</p>

<hr>

<p>All objects have the following base functions:</p>

@method([
    'name' => 'setVar',
    'args' => [
        'varName' => [
            'type' => 'string',
            'desc' => 'the device var name',
        ],
        'varValue' => [
            'type' => 'mixed',
            'desc' => 'the device var value',
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p>Save a device-specific variable.</p>
@endslot
@slot('returnDesc')
<p>Returns the value that was passed to <code class="var">varValue</code>.</p>
@endslot
@slot('example')
// Set a device var
device.setVar('foo', 42);

// Set the device var and assign its value to a code variable
var myVar = device.setVar('foo', 'off');
// myVar is 'off'
@endslot
@endcomponent

@method([
    'name' => 'getVar',
    'args' => [
        'varName' => [
            'type' => 'string',
            'desc' => 'the device var name',
        ],
    ],
    'returnType' => 'mixed',
])
@slot('description')
<p>Get a device-specific variable.</p>
@endslot
@slot('returnDesc')
<p>Returns the value of the device var saved as <code class="var">varName</code>.</p>
<p>Returns <code>null</code> if the var doesn't exist.</p>
@endslot
@slot('example')
// Set a device var
device.setVar('foo', 42);

// Get the device var and assign its value to a code variable
var myVar = device.getVar('foo');
// myVar is 42

// Getting a non-existant var
var myAbsentVar = device.getVar('bar');
// myAbsentVar is null
@endslot
@endcomponent

<hr>

<a name="Device"></a>
<h2>Device objects</h2>
<p>An object that references a device that you created in the Device Browser. It can be a physical device, or a virtual device.</p>
<p>Depending on the device's associated output type, different functions will be available on the Device object.</p>

<h3>DMX / ArtNet</h3>
<p>Along will all base Object functions, specific functions are available for devices outputting to DMX / ArtNet:</p>

@method([
    'name' => 'setChannel',
    'args' => [
        'channel' => [
            'type' => ['number', 'string'],
            'desc' => 'the channel number or alias',
        ],
        'channelValue' => [
            'type' => 'number',
            'desc' => 'the channel value',
        ],
    ],
    'returnType' => 'number',
])
@slot('returnDesc')
<p>Returns the value that was passed to <code class="var">channelValue</code>.</p>
@endslot
@endcomponent

<hr>

<h2>Media objects</h2>
<p>An object that references a media file that you created in the Media Browser.</p>
<p>@TODO implements Medias in Kodtrol, lol</p>
@endsection
