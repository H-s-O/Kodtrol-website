@extends('pages/manual')

@section('manualContent')
<h1>Scripting > Helpers</h1>
<p>Helpers are useful functions that you can call from within your scripts.</p>
<div class="def-group">
    <code class="method-def">isEven( value )</code>
    <table>
        <tr>
            <td>Arguments</td>
            <td>
                <ul class="args-list">
                    <li>value: the input number</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Return value</td>
            <td>
                <em>boolean</em>
                <p><code>true</code> if the number is even, <code>false</code> otherwise.</p>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>
                <code class="code-example">
                    isEven(1)
                    // Returns false

                    isEven(2)
                    // Returns true
                </code>
            </td>
        </tr>
    </table>
</div>
<div class="def-group">
    <code class="method-def">isOdd( value )</code>
    <table>
        <tr>
            <td>Arguments</td>
            <td>
                <ul class="args-list">
                    <li>value: the input number</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Return value</td>
            <td>
                <em>boolean</em>
                <p><code>true</code> if the number is odd, <code>false</code> otherwise.</p>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>
                <code class="code-example">
                    isEven(1)
                    // Returns true

                    isEven(2)
                    // Returns false
                </code>
            </td>
        </tr>
    </table>
</div>
<div class="def-group">
    <code class="method-def">clamp( value, min, max )</code>
    <table>
        <tr>
            <td>Arguments</td>
            <td>
                <ul class="args-list">
                    <li>value: the input number</li>
                    <li>min: the minimum value possible</li>
                    <li>max: the maximum value possible</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Return value</td>
            <td>
                <em>number</em>
                <p>If <code>value</code> is smaller than <code>min</code>, returns <code>min</code>.</p>
                <p>If <code>value</code> is greater than <code>max</code>, returns <code>max</code>.</p>
                <p>Otherwise, returns <code>value</code>.</p>
            </td>
        </tr>
        <tr>
            <td>Example</td>
            <td>
                <code class="code-example">
                    isEven(1)
                    // Returns true

                    isEven(2)
                    // Returns false
                </code>
            </td>
        </tr>
    </table>
</div>
@endsection
