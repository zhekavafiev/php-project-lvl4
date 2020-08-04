<select name="{{ $name }}" id="" class="{{ $selectClass }}">
    <option value="{{ $startValue }}">{{ $startText }}</option>
    @foreach ($array as $item)
        @if (is_array($filter) && $filter['status'] == $item->id &&  $filter['status'] != $startValue)
            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
        @else
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endif
    @endforeach
</select>
