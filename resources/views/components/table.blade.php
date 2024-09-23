<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th class="text-gray-800 dark:text-gray-200 text-center">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td class="text-gray-800 dark:text-gray-200 text-center border-b-2 border-gray-300 p-2 mb-2">{!! $cell !!}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>