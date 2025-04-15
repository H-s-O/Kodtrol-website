<div class="def-group">
    <div class="method-def">
        <code class="method-signature">
            <span class="func">{{ $name }}</span>
            (@isset($args) @foreach ($args as $arg => $argInfo)
            <span class="var">{{ $arg }}</span>@if (!$loop->last),@endif
            @endforeach @endif)
        </code>
        @isset($description)
        <p class="method-desc">{!! $description !!}</p>
        @endif
    </div>
    <div class="def-table-container">
        <table>
            @isset($args)
            <tr>
                <td>Arguments</td>
                <td>
                    <ul class="args-list">
                        @foreach ($args as $arg => $argInfo)
                        <li>
                            <code class="var">{{ $arg }}</code> (
                            @if (is_array($argInfo['type']))
                            @foreach ($argInfo['type'] as $type)
                            <span class="type">{{ $type }}</span>@if (!$loop->last) | @endif
                            @endforeach
                            @else
                            <span class="type">{{ $argInfo['type'] }}</span>
                            @endif)
                            @if(isset($argInfo['timeline']) || isset($argInfo['board']))
                            <small>@isset($argInfo['timeline']) timelines @endif @if(isset($argInfo['timeline']) && isset($argInfo['board'])) and @endif @isset($argInfo['board']) boards @endif only</small>
                            @endif
                            <p>{!! $argInfo['desc'] !!}</p>
                        </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endif
            @isset($returnType)
            <tr>
                <td>Return value</td>
                <td>
                    <span class="type">{{ $returnType }}</span>
                    @isset($returnDesc)
                    {!! $returnDesc !!}
                    @endif
                </td>
            </tr>
            @endif
            @isset($example)
            <tr>
                <td>Example</td>
                <td>
<code class="code-example">{!! $example !!}</code>
                </td>
            </tr>
            @endif
        </table>
    </div>
</div>
