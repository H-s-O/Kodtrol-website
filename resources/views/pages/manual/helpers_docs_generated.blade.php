{{-- GENERATED BY THE doc:helpers ARTISAN COMMAND; DO NOT EDIT --}}

<a name="clamp"></a>
@method(["name" => "clamp","description" => "Ensures that an input value is within the range of minimum and maximum values.","args" => ["value" => ["type" => "Number", "desc" => "The number to clamp"],"min" => ["type" => "Number", "desc" => "The minimum value possible"],"max" => ["type" => "Number", "desc" => "The maximum value possible"],],"returnType" => "Number",])
@slot("returnDesc")
<p>If <code>value</code> is smaller than <code>min</code>, return <code>min</code>.If <code>value</code> is greater than <code>max</code>, return <code>max</code>.Otherwise, returns <code>value</code>.</p>
@endslot
@slot("example")
clamp(1, 2, 6)// Returns 2clamp(10, 2, 6)// Returns 6clamp(-42, -100, 0)// Return -42
@endslot
@endcomponent

<a name="cmykColor"></a>
@method(["name" => "cmykColor","description" => "Creates a color object with keys containing the values of CMYK color components.","args" => ["c" => ["type" => "Number", "desc" => "The cyan value"],"m" => ["type" => "Number", "desc" => "The magenta value"],"y" => ["type" => "Number", "desc" => "The yellow value"],"k" => ["type" => "Number", "desc" => "The black value"],],"returnType" => "Object",])
@slot("returnDesc")
<p>An object containing the matching <code>c</code>, <code>m</code>, <code>y</code> and <code>k</code> keys from the parameters.</p>
@endslot
@endcomponent

<a name="counter"></a>
@method(["name" => "counter","description" => "Creates a counter (if it doesn't exist yet) that increments by 1 everytime the function is called.","args" => ["id" => ["type" => "String", "desc" => "The counter identifier, when using more than one counter per script"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The current counter value</p>
@endslot
@slot("example")
let myCounter = counter()// myCounter = 0myCounter = counter()// myCounter = 1
@endslot
@endcomponent

<a name="counterLimit"></a>
@method(["name" => "counterLimit","description" => "Creates a counter (if it doesn't exist yet) that increments by 1 everytime the function is called, andreturns true when it reaches or exceeds the limit value.","args" => ["limit" => ["type" => "Number", "desc" => "The limit to reach"],"id" => ["type" => "String", "desc" => "The counter identifier, when using more than one counter per script"],],"returnType" => "Boolean",])
@slot("returnDesc")
<p><code>true</code> when the counter value is equal or greater than <code>limit</code>, <code>false</code> otherwise.</p>
@endslot
@slot("example")
let result = counterLimit(2)// result = falseresult = counterLimit(2)// result = falseresult = counterLimit(2)// result = true
@endslot
@endcomponent

<a name="counterReset"></a>
@method(["name" => "counterReset","description" => "Resets a counter to its initial value of 0.","args" => ["id" => ["type" => "String", "desc" => "The counter identifier, when using more than one counter per script"],],])
@endcomponent

<a name="counterResetAll"></a>
@method(["name" => "counterResetAll","description" => "Resets all the script's counters to their initial value of 0.",])
@endcomponent

<a name="degToRad"></a>
@method(["name" => "degToRad","description" => "Converts a value in degrees to a value in radians.","args" => ["degrees" => ["type" => "Number", "desc" => "The input value in degrees"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The corresponding value in radians</p>
@endslot
@endcomponent

<a name="easeInBack"></a>
@method(["name" => "easeInBack","description" => "Generates a \"overshoot\" easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInBounce"></a>
@method(["name" => "easeInBounce","description" => "Generates a \"bouncing\" easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInCirc"></a>
@method(["name" => "easeInCirc","description" => "Generates a circular easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInCubic"></a>
@method(["name" => "easeInCubic","description" => "Generates a cubic (3rd order) easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInElastic"></a>
@method(["name" => "easeInElastic","description" => "Generates a \"elastic\" easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInExpo"></a>
@method(["name" => "easeInExpo","description" => "Generates a exponential easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutBack"></a>
@method(["name" => "easeInOutBack","description" => "Generates a \"overshoot\" easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutBounce"></a>
@method(["name" => "easeInOutBounce","description" => "Generates a \"bouncing\" easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutCirc"></a>
@method(["name" => "easeInOutCirc","description" => "Generates a circular easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutCubic"></a>
@method(["name" => "easeInOutCubic","description" => "Generates a cubic (3rd order) easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutElastic"></a>
@method(["name" => "easeInOutElastic","description" => "Generates a \"elastic\" easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutExpo"></a>
@method(["name" => "easeInOutExpo","description" => "Generates a exponential easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutQuad"></a>
@method(["name" => "easeInOutQuad","description" => "Generates a quadratic (2nd order) easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutQuart"></a>
@method(["name" => "easeInOutQuart","description" => "Generates a quartic (4th order) easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutQuint"></a>
@method(["name" => "easeInOutQuint","description" => "Generates a quintic (5th order) easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInOutSine"></a>
@method(["name" => "easeInOutSine","description" => "Generates a sine easing at both start and end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInQuad"></a>
@method(["name" => "easeInQuad","description" => "Generates a quadratic (2nd order) easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInQuart"></a>
@method(["name" => "easeInQuart","description" => "Generates a quartic (4th order) easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInQuint"></a>
@method(["name" => "easeInQuint","description" => "Generates a quintic (5th order) easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeInSine"></a>
@method(["name" => "easeInSine","description" => "Generates a sine easing at start of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutBack"></a>
@method(["name" => "easeOutBack","description" => "Generates a \"back overshoot\" easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutBounce"></a>
@method(["name" => "easeOutBounce","description" => "Generates a \"bouncing\" easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutCirc"></a>
@method(["name" => "easeOutCirc","description" => "Generates a circular easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutCubic"></a>
@method(["name" => "easeOutCubic","description" => "Generates a cubic (3rd order) easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutElastic"></a>
@method(["name" => "easeOutElastic","description" => "Generates a \"elastic\" easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutExpo"></a>
@method(["name" => "easeOutExpo","description" => "Generates a exponential easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutQuad"></a>
@method(["name" => "easeOutQuad","description" => "Generates a quadratic (2nd order) easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutQuart"></a>
@method(["name" => "easeOutQuart","description" => "Generates a quartic (4th order) easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutQuint"></a>
@method(["name" => "easeOutQuint","description" => "Generates a quintic (5th order) easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="easeOutSine"></a>
@method(["name" => "easeOutSine","description" => "Generates a sine easing at end of period.","args" => ["progress" => ["type" => "Number", "desc" => "The normalized progress value, from <code>0</code> to <code>1</code>"],],"returnType" => "Number",])
@slot("returnDesc")
<p>An eased, normalized value from <code>0</code> to <code>1</code>.</p>
@endslot
@endcomponent

<a name="highByte"></a>
@method(["name" => "highByte","description" => "Extracts the value of the higher byte of a 16-bit value. Useful for getting the \"coarse\" value of a 16-bit DMX parameter.","args" => ["value" => ["type" => "Number", "desc" => "The input value"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The higher byte value of the input value</p>
@endslot
@endcomponent

<a name="isBeatDivision"></a>
@method(["name" => "isBeatDivision","description" => "Check if a pulse-per-quarter-note value from Kodtrol's engine is divisible by a value.","args" => ["beat" => ["type" => "Number", "desc" => "The pulse-per-quarter-note value"],"division" => ["type" => "Number", "desc" => "The divider"],"allowFirst" => ["type" => "Boolean", "desc" => "Only return true for <code>beat</code> values higher than 0"],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>Returns true if the pulse-per-quarter-note is divisible, false otherwise.</p>
@endslot
@endcomponent

<a name="isEven"></a>
@method(["name" => "isEven","args" => ["value" => ["type" => "Number", "desc" => "The number to check"],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>Returns <code>true</code> if <code>value</code> is even, <code>false</code> otherwise.</p>
@endslot
@endcomponent

<a name="isOdd"></a>
@method(["name" => "isOdd","args" => ["value" => ["type" => "Number", "desc" => "The number to check"],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>Returns <code>true</code> if <code>value</code> is odd, <code>false</code> otherwise.</p>
@endslot
@endcomponent

<a name="log"></a>
@method(["name" => "log","description" => "Sends data to Kodtrol's console window.","args" => ["args" => ["type" => "*", "desc" => "The data to log; each argument will be cast to a string."],],])
@slot("example")
log("Hello World")// Displays "Hello World" in the console windowlog(1, 2, 3, "four", 5)// Displays "1 2 3 four 5" in the console window
@endslot
@endcomponent

<a name="lowByte"></a>
@method(["name" => "lowByte","description" => "Extracts the value of the lower byte of a 16-bit value. Useful for getting the \"fine\" value of a 16-bit DMX parameter.","args" => ["value" => ["type" => "Number", "desc" => "The input value"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The lower byte value of the input value</p>
@endslot
@endcomponent

<a name="map"></a>
@method(["name" => "map","description" => "Using a source value and its known range, re-maps that value to a new target range. Note that the result is <strong>not</strong> clamped, so you may end up with under or over-shooting output values.","args" => ["value" => ["type" => "Number", "desc" => "The input value"],"valueMin" => ["type" => "Number", "desc" => "The minimum value of the input range"],"valueMax" => ["type" => "Number", "desc" => "The maximum value of the input range"],"outMin" => ["type" => "Number", "desc" => "The minimum value of the output range"],"outMax" => ["type" => "Number", "desc" => "The maximum value of the output range"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The mapped value</p>
@endslot
@slot("example")
map(75, 50, 100, 0, 1)// Returns 0.5map(0.5, 0, 1, 0, 100)// Returns 50
@endslot
@endcomponent

<a name="mix"></a>
@method(["name" => "mix","args" => ["a" => ["type" => "Number", "desc" => null],"b" => ["type" => "Number", "desc" => null],"percent" => ["type" => "Number", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="noise"></a>
@method(["name" => "noise","args" => ["id" => ["type" => "String", "desc" => null],"seed" => ["type" => "*", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="noise2d"></a>
@method(["name" => "noise2d","args" => ["x" => ["type" => "Number", "desc" => null],"y" => ["type" => "Number", "desc" => null],"id" => ["type" => "String", "desc" => null],"seed" => ["type" => "*", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="noise3d"></a>
@method(["name" => "noise3d","args" => ["x" => ["type" => "Number", "desc" => null],"y" => ["type" => "Number", "desc" => null],"z" => ["type" => "Number", "desc" => null],"id" => ["type" => "String", "desc" => null],"seed" => ["type" => "*", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="noise4d"></a>
@method(["name" => "noise4d","args" => ["x" => ["type" => "Number", "desc" => null],"y" => ["type" => "Number", "desc" => null],"z" => ["type" => "Number", "desc" => null],"w" => ["type" => "Number", "desc" => null],"id" => ["type" => "String", "desc" => null],"seed" => ["type" => "*", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="onceWhenFalse"></a>
@method(["name" => "onceWhenFalse","description" => "Invokes a callback once for each time that the checked <code>value</code> becomes <code>false</code>.","args" => ["value" => ["type" => "*", "desc" => "The value to check"],"id" => ["type" => "String", "desc" => "The identifier for the check"],"callback" => ["type" => "function", "desc" => "The function to be invoked when the check succeeds"],],])
@endcomponent

<a name="onceWhenOne"></a>
@method(["name" => "onceWhenOne","description" => "Invokes a callback once for each time that the checked <code>value</code> becomes exactly <code>1</code>.","args" => ["value" => ["type" => "*", "desc" => "The value to check"],"id" => ["type" => "String", "desc" => "The identifier for the check"],"callback" => ["type" => "function", "desc" => "The function to be invoked when the check succeeds"],],])
@endcomponent

<a name="onceWhenTrue"></a>
@method(["name" => "onceWhenTrue","description" => "Invokes a callback once for each time that the checked <code>value</code> becomes <code>true</code>.","args" => ["value" => ["type" => "*", "desc" => "The value to check"],"id" => ["type" => "String", "desc" => "The identifier for the check"],"callback" => ["type" => "function", "desc" => "The function to be invoked when the check succeeds"],],])
@endcomponent

<a name="onceWhenZero"></a>
@method(["name" => "onceWhenZero","description" => "Invokes a callback once for each time that the checked <code>value</code> becomes exactly <code>0</code>.","args" => ["value" => ["type" => "*", "desc" => "The value to check"],"id" => ["type" => "String", "desc" => "The identifier for the check"],"callback" => ["type" => "function", "desc" => "The function to be invoked when the check succeeds"],],])
@endcomponent

<a name="radToDeg"></a>
@method(["name" => "radToDeg","description" => "Converts a value in radians to a value in degrees.","args" => ["radians" => ["type" => "Number", "desc" => "The input value in radians"],],"returnType" => "Number",])
@slot("returnDesc")
<p>The corresponding value in degrees</p>
@endslot
@endcomponent

<a name="randomBetween"></a>
@method(["name" => "randomBetween","args" => ["min" => ["type" => "Number", "desc" => null],"max" => ["type" => "Number", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="randomIndex"></a>
@method(["name" => "randomIndex","args" => ["arr" => ["type" => "Array", "desc" => null],"except" => ["type" => "*", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="randomIndexWhere"></a>
@method(["name" => "randomIndexWhere","args" => ["arr" => ["type" => "Array", "desc" => null],"predicate" => ["type" => "function", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="randomTrueFalse"></a>
@method(["name" => "randomTrueFalse","args" => ["bias" => ["type" => "Number", "desc" => "Adjust probability bias; a value closer to <code>0</code> will result in more <code>true</code>s a value close to <code>1</code> will result in more <code>false</code>s."],],"returnType" => "Boolean",])
@slot("returnDesc")
<p>A random <code>true</code> or <code>false</code>.</p>
@endslot
@endcomponent

<a name="randomValue"></a>
@method(["name" => "randomValue","args" => ["arr" => ["type" => "Array", "desc" => null],"except" => ["type" => "*", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="randomValueWhere"></a>
@method(["name" => "randomValueWhere","args" => ["arr" => ["type" => "Array", "desc" => null],"predicate" => ["type" => "function", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="rgbColor"></a>
@method(["name" => "rgbColor","description" => "Creates a color object with keys containing the values of RGB color components.","args" => ["r" => ["type" => "Number", "desc" => "The red value"],"g" => ["type" => "Number", "desc" => "The green value"],"b" => ["type" => "Number", "desc" => "The blue value"],],"returnType" => "Object",])
@slot("returnDesc")
<p>An object containing the matching <code>r</code>, <code>g</code>, and <code>b</code> keys from the parameters.</p>
@endslot
@endcomponent

<a name="rgbFromHsv"></a>
@method(["name" => "rgbFromHsv","args" => ["h" => ["type" => "Number", "desc" => null],"s" => ["type" => "Number", "desc" => null],"v" => ["type" => "Number", "desc" => null],],"returnType" => "Object",])
@endcomponent

<a name="rgbMix"></a>
@method(["name" => "rgbMix","args" => ["color1" => ["type" => "Object", "desc" => null],"color2" => ["type" => "Object", "desc" => null],"percent" => ["type" => "Number", "desc" => null],],"returnType" => "Object",])
@endcomponent

<a name="rgbToCmyk"></a>
@method(["name" => "rgbToCmyk","args" => ["rgb" => ["type" => "Object", "desc" => "An RGB color object"],],"returnType" => "Object",])
@slot("returnDesc")
<p>The CMYK color object of the converted <code>rgb</code> color</p>
@endslot
@endcomponent

<a name="sequence"></a>
@method(["name" => "sequence","args" => ["arr" => ["type" => "Array", "desc" => null],"id" => ["type" => "String", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="sequenceIndex"></a>
@method(["name" => "sequenceIndex","args" => ["id" => ["type" => "String", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="sequenceReset"></a>
@method(["name" => "sequenceReset","args" => ["id" => ["type" => "String", "desc" => null],],])
@endcomponent

<a name="smoothFollow"></a>
@method(["name" => "smoothFollow","args" => ["device" => ["type" => "*", "desc" => null],"varName" => ["type" => "String", "desc" => null],"divider" => ["type" => "Number", "desc" => null],"value" => ["type" => "*", "desc" => null],"initValue" => ["type" => "*", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="smoothReset"></a>
@method(["name" => "smoothReset","args" => ["device" => ["type" => "*", "desc" => null],"varName" => ["type" => "String", "desc" => null],"value" => ["type" => "*", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="smoothValue"></a>
@method(["name" => "smoothValue","args" => ["device" => ["type" => "*", "desc" => null],"varName" => ["type" => "String", "desc" => null],],"returnType" => "*",])
@endcomponent

<a name="smoothVarName"></a>
@method(["name" => "smoothVarName","args" => ["device" => ["type" => "*", "desc" => null],"varName" => ["type" => "String", "desc" => null],],"returnType" => "String",])
@endcomponent

<a name="square"></a>
@method(["name" => "square","args" => ["x" => ["type" => "Number", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="step"></a>
@method(["name" => "step","args" => ["value" => ["type" => "Number", "desc" => null],"step" => ["type" => "Number", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="timer"></a>
@method(["name" => "timer","args" => ["id" => ["type" => "String", "desc" => null],],])
@endcomponent

<a name="timerValue"></a>
@method(["name" => "timerValue","args" => ["id" => ["type" => "String", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="timerLimit"></a>
@method(["name" => "timerLimit","args" => ["limit" => ["type" => "Number", "desc" => null],"id" => ["type" => "String", "desc" => null],],"returnType" => "Boolean",])
@endcomponent

<a name="timerReset"></a>
@method(["name" => "timerReset","args" => ["id" => ["type" => "String", "desc" => null],],])
@endcomponent

<a name="timerResetAll"></a>
@method(["name" => "timerResetAll",])
@endcomponent

<a name="tri"></a>
@method(["name" => "tri","args" => ["x" => ["type" => "Number", "desc" => null],],"returnType" => "Number",])
@endcomponent

<a name="wave"></a>
@method(["name" => "wave","args" => ["position" => ["type" => "Number", "desc" => null],"percent" => ["type" => "Number", "desc" => null],"frequency" => ["type" => "Number", "desc" => null],"func" => ["type" => "function", "desc" => null],],"returnType" => "Number",])
@endcomponent

