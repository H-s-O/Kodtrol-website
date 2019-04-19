@extends('pages/manual')

@section('manualContent')
<h1><small>Scripting</small></h1>
<h1>Helpers</h1>

<p>Helpers are useful functions that you can call anywhere in your scripts.</p>
<p>@TODO future link to Helper Hub?</p>

<hr>

<a name="isEven"></a>
@method([
    'name' => 'isEven',
    'args' => [
        'value' => [
            'type' => 'number',
            'desc' => 'the number to check',
        ],
    ],
    'returnType' => 'boolean',
])
@slot('returnDesc')
<p>Returns <code>true</code> if <code class="var">value</code> is even, <code>false</code> otherwise.</p>
@endslot
@slot('example')
isEven(1)
// Returns false

isEven(2)
// Returns true
@endslot
@endcomponent

<a name="isOdd"></a>
@method([
    'name' => 'isOdd',
    'args' => [
        'value' => [
            'type' => 'number',
            'desc' => 'the number to check',
        ],
    ],
    'returnType' => 'boolean',
])
@slot('returnDesc')
<p>Returns <code>true</code> if <code class="var">value</code> is odd, <code>false</code> otherwise.</p>
@endslot
@slot('example')
isEven(1)
// Returns true

isEven(2)
// Returns false
@endslot
@endcomponent

<a name="clamp"></a>
@method([
    'name' => 'clamp',
    'args' => [
        'value' => [
            'type' => 'number',
            'desc' => 'the number to clamp',
        ],
        'min' => [
            'type' => 'number',
            'desc' => 'the minimum value possible',
        ],
        'max' => [
            'type' => 'number',
            'desc' => 'the maximum value possible',
        ],
    ],
    'returnType' => 'number',
])
@slot('returnDesc')
<p>If <code class="var">value</code> is smaller than <code class="var">min</code>, returns <code class="var">min</code>.</p>
<p>If <code class="var">value</code> is greater than <code class="var">max</code>, returns <code class="var">max</code>.</p>
<p>Otherwise, returns <code class="var">value</code>.</p>
@endslot
@slot('example')
clamp(5, 1, 10)
// Returns 5

clamp(-42, 1, 10)
// Returns 1

clamp(42, 1, 10)
// Returns 10
@endslot
@endcomponent

@endsection
