@extends('pages/manual')

@section('manualContent')
<h1><small>Interface</small></h1>
<h1>Devices</h1>

<h2 id="devices-browser">Devices browser</h2>

<p>Allows you to create new devices and lists existing devices.</p>

<div>
    <img class="screenshot" src="/images/screenshots/devices_browser.png"/>
</div>

@screenshots([
    'items' => [
        [
            'name' => 'Add button',
            'file' => '/images/screenshots/devices_browser_add.png',
        ],
    ],
])
@slot('item0')
<p><strong>Add button</strong></p>
<p>Click to open the <a href="#add-device-dialog">Add device dialog</a>.</p>
@endslot
@endcomponent

<h2 id="add-device-dialog">Add device dialog</h2>

<div>
    <img class="screenshot" src="/images/screenshots/add_device_dialog.png"/>
</div>

@endsection
