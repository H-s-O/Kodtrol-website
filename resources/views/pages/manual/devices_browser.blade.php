@extends('pages/manual')

@section('manualContent')
<h1><small>Interface</small></h1>
<h1>Devices browser</h1>

<div>
    <img class="screenshot" src="/images/screenshots/devices_browser.png"/>
</div>

<p>Allows you to create new devices and lists existing devices.</p>

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
<p>Click to open the <em>Add Device</em> dialog.</p>
@endslot
@endcomponent

@endsection
