<style>
    .icon i {
        color: #8E8E8E;
        font-size: 17px
    }
</style>

@props(['headers ' => $headers , 'entries' => $entries ?? '' ])


<div class="entry-table-wrap">
    <table class="table entries-table">
        <thead>
            <tr>
                @foreach ($headers as $header)
                <th scope="col" style="background: #8E8E8E !important; color: white !important;">{{ $header }} <i class="fa-solid fa-arrow-down"></i></th>
                @endforeach
                <th scope="col" style="background: #8E8E8E !important; color: white !important;">Action<i class="fa-solid fa-arrow-down"></i></th>
                <th scope="col" style="background: #8E8E8E !important; color: white !important;">Action<i class="fa-solid fa-arrow-down"></i></th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($entries as $entry)


                <tr>
                    <td>{{ $entry['name'] }}</td>
                    <td>{{ $entry['label'] }}</td>
                    <td>{{ $entry['date'] }}</td>
                    <td>
                        <a href="#" class="icon" title="Download">
                            <i class="fa fa-download"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="icon" title="Download">
                            <i class="fa-solid fa-check"></i>
                        </a>
                    </td>
                </tr>
            @endforeach  --}}
            @foreach ($entries as $entry)
                <tr class="{{ $loop->index % 2 === 1 ? 'bg-changed' : '' }}">
                    @foreach ($entry as $key => $value)
                        <td>{{ $value }}</td>
                    @endforeach
                    <td>
                        <a href="#" class="icon" title="Download">
                            <i class="fa fa-download"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="icon" title="Download">
                            <i class="fa-solid fa-check"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
