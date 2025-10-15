@props(['headersy ' => $headersy , 'entriesy' => $entriesy ])

<div class="entry-table-wrap">
    {{-- <table class="table entries-table">
        <thead>
            <tr>
                @foreach ($headersy as $header)
                    <th scope="col" style="background: #8E8E8E !important; color: white !important;">{{ $header }} <i class="fa-solid fa-arrow-down"></i></th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($entriesy as $entry)
                <tr class="{{ $loop->index % 2 === 1 ? 'bg-changed' : '' }}">
                    @foreach ($entry as $key => $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    <table class="table entries-table">
        <thead>
            <tr>
                <?php foreach ($headersy as $header): ?>
                <th scope="col" style="background: #8E8E8E !important; color: white !important;">{{ $header }} <i class="fa-solid fa-arrow-down"></i></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entriesy as $entry): ?>
                <tr>
                    <td><?php echo $entry[0]; ?></td>
                    <td><?php echo $entry[1]; ?></td>
                    <td><?php echo $entry[2]; ?></td>
                    <td>
                        <a href="#" class="icon" title="Download">
                            <i class="fa fa-download"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
