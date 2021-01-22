@extends('pages/manual')

@section('manualContent')
<h1><small>Interface</small></h1>
<h1>Medias</h1>

<h2 id="medias-browser">Medias browser</h2>

<p>Allows you to create new medias and lists existing medias.</p>

<div>
    <img class="screenshot" src="/images/screenshots/medias_browser.png"/>
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
<p>Click to open the <a href="#add-media-dialog">Add media dialog</a>.</p>
@endslot
@endcomponent

<h2 id="add-media-dialog">Add media dialog</h2>

<div>
    <img class="screenshot" src="/images/screenshots/add_media_dialog.png"/>
</div>

@endsection
