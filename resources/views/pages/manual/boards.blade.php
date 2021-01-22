@extends('pages/manual')

@section('manualContent')
<h1><small>Interface</small></h1>
<h1>Boards</h1>

<h2 id="boards-browser">Boards browser</h2>

<p>Allows you to create new boards and lists existing boards.</p>

<div>
    <img class="screenshot" src="/images/screenshots/boards_browser.png"/>
</div>

@screenshots([
    'items' => [
        [
            'name' => 'Add button',
            'file' => '/images/screenshots/boards_browser_add.png',
        ],
    ],
])
@slot('item0')
<p><strong>Add button</strong></p>
<p>Click to open the <a href="#add-board-dialog">Add board dialog</a>.</p>
@endslot
@endcomponent

<h2 id="add-board-dialog">Add board dialog</h2>

<div>
    <img class="screenshot" src="/images/screenshots/add_board_dialog.png"/>
</div>

@endsection
