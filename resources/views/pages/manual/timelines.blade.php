@extends('pages/manual')

@section('manualContent')
<h1><small>Interface</small></h1>
<h1>Timelines</h1>

<h2 id="timelines-browser">Timelines browser</h2>

<p>Allows you to create new timelines and lists existing timelines.</p>

<div>
    <img class="screenshot" src="/images/screenshots/timelines_browser.png"/>
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
<p>Click to open the <a href="#add-timeline-dialog">Add timeline dialog</a>.</p>
@endslot
@endcomponent

<h2 id="add-timeline-dialog">Add timeline dialog</h2>

<div>
    <img class="screenshot" src="/images/screenshots/add_timeline_dialog.png"/>
</div>

@endsection
