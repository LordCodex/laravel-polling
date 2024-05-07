<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling Unit Result</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-8" style="max-width: 90%;">
    @if($result->isNotEmpty())
        <h2 class='text-xl font-bold mt-8'>Result for Polling Unit ({{ $result->first()->polling_unit_name }}):</h2>
        <div class='overflow-x-auto'>
            <table class='table-auto mt-4 w-full'>
                <thead>
                <tr class='bg-gray-200'>
                    <th class='px-4 py-2'>Polling Unit Number</th>
                    <th class='px-4 py-2'>Polling Unit Name</th>
                    <th class='px-4 py-2'>Party</th>
                    <th class='px-4 py-2'>Score</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result as $row)
                    <tr>
                        <td class='border px-4 py-2'>{{ $row->polling_unit_number }}</td>
                        <td class='border px-4 py-2'>{{ $row->polling_unit_name }}</td>
                        <td class='border px-4 py-2'>{{ $row->party_abbreviation }}</td>
                        <td class='border px-4 py-2'>{{ $row->party_score }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class='mt-8 text-red-500'>No result found for the given polling unit unique ID.</p>
    @endif
</div>
</body>
</html>
