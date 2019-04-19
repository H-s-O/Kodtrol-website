@extends('pages/manual')

@section('manualContent')
<h1>Scripting > Hooks</h1>
<p>Hooks are functions you write to define how a script reacts to specific events.</p>
<div class="def-group">
    <code class="method-def">setup( devices )</code>
    <table>
        <tr>
            <td>Parameters</td><td>devices: an array of Devices</td>
        </tr>
        <tr>
            <td>Return value</td><td><em>boolean</em><p><code>true</code> if the number is even, <code>false</code> otherwise.</td>
        </tr>
        <tr>
            <td>Example</td>
            <td>
                <code class="code-example">
                    function setup(devices) {
                        devices.forEach((device) => {
                            device.setPan(127);
                        });

                        // Optionally return script data
                        // return { myValue: 1 };
                    }
                </code>
            </td>
        </tr>
        <tr>
            <td>Description</td>
            <td>
                <p>When in a timeline, this hook is continously executed for half a second before the script starts.</p>
                <p>When running standalone, this hook is executed immediately before <a href="#start">start()</a>.</p>
                <p>You can use this hook to prepare certain device channels, such as pan and tilt, before the
                        actual script execution begins.</p>
            </td>
    </table>
</div>
@endsection
