<div>
    <table class="screenshots-table">
        @foreach ($items as $index => $item)
        <tr>
            <td>
                <img class="screenshot" src="{{ $item['file'] }}" alt="{{ $item['name'] }}" />
            </td>
            <td>
                @isset(${'item'.$index})
                {{ ${'item'.$index} }}
                @endif
        @endforeach
    </table>
</div>
