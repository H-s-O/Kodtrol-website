{{-- GENERATED BY THE doc:helpers COMMAND; DO NOT EDIT --}}

<a name="clamp"></a>
@method(["name" => "clamp","desc" => "Ensures that an input value is within the range of minimum and maximum values.","args" => ["value" => ["type" => "Number", "desc" => "The number to clamp"],"min" => ["type" => "Number", "desc" => "The minimum value possible"],"max" => ["type" => "Number", "desc" => "The maximum value possible"],],"returnType" => "Number",])
@slot("returnDesc")
<p>If <code>value</code> is smaller than <code>min</code>, return <code>min</code>.
If <code>value</code> is greater than <code>max</code>, return <code>max</code>.
Otherwise, returns <code>value</code>.</p>
@endslot
@slot("example")
isEven(1)
// Returns true

isEven(2)
// Returns false
@endslot
@endcomponent

<a name="cmykColor"></a>
@method(["name" => "cmykColor","desc" => "Creates an object with keys containing the values of CMYK color components.","args" => ["c" => ["type" => "Number", "desc" => "The cyan value"],"m" => ["type" => "Number", "desc" => "The magenta value"],"y" => ["type" => "Number", "desc" => "The yellow value"],"k" => ["type" => "Number", "desc" => "The black value"],],"returnType" => "Object",])
@slot("returnDesc")
<p>An object containing the matching <code>c</code>, <code>m</code>, <code>y</code> and <code>k</code> keys from the parameters.</p>
@endslot
@endcomponent

<a name="highByte"></a>
@method(["name" => "highByte","desc" => "Extracts the value of the higher byte of a 16-bit value. Useful for getting the \"coarse\" value of a 16-bit DMX parameter.","args" => ["value" => ["type" => "Number", "desc" => "The input value"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The higher byte value of the input value</p>
@endslot
@endcomponent

<a name="isEven"></a>
@method(["name" => "isEven","args" => ["value" => ["type" => "Number", "desc" => "The number to check"],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>Returns <code>true</code> if <code>value</code> is even, <code>false</code> otherwise.</p>
@endslot
@slot("example")
isEven(1)
// Returns false

isEven(2)
// Returns true
@endslot
@endcomponent

<a name="isOdd"></a>
@method(["name" => "isOdd","args" => ["value" => ["type" => "Number", "desc" => "The number to check"],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>Returns <code>true</code> if <code>value</code> is odd, <code>false</code> otherwise.</p>
@endslot
@slot("example")
isEven(1)
// Returns true

isEven(2)
// Returns false
@endslot
@endcomponent

<a name="log"></a>
@method(["name" => "log","desc" => "Sends data to Kodtrol\'s console window.","args" => ["args" => ["type" => "*", "desc" => "The data to log; each argument will be cast to a string."],],])
@slot("example")
log("Hello World")
// Displays "Hello World" in the console window

log(1, 2, 3, "four", 5)
// Displays "1 2 3 four 5" in the console window
@endslot
@endcomponent

<a name="lowByte"></a>
@method(["name" => "lowByte","desc" => "Extracts the value of the lower byte of a 16-bit value. Useful for getting the \"fine\" value of a 16-bit DMX parameter.","args" => ["value" => ["type" => "Number", "desc" => "The input value"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The lower byte value of the input value</p>
@endslot
@endcomponent

<a name="radToDeg"></a>
@method(["name" => "radToDeg","desc" => "Converts a value in radians to a value in degrees.","args" => ["radians" => ["type" => "Number", "desc" => "The input value in radians"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The corresponding value in degrees</p>
@endslot
@endcomponent

<a name="randomTrueFalse"></a>
@method(["name" => "randomTrueFalse","args" => ["bias" => ["type" => "Number", "desc" => "Adjust probability bias; a value closer to <code>0</code> will result in more <code>true</code>s a value close to <code>1</code> will result in more <code>false</code>s."],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>A random <code>true</code> or <code>false</code>.</p>
@endslot
@endcomponent

