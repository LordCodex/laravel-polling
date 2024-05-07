<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Polling Unit</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-8" style="max-width: 90%;">
    <h1 class="text-2xl font-bold mb-4">Select Available Polling Unit:</h1>
    <form action="{{ route('polling_unit.show') }}" method="post" class="max-w-sm flex items-center mb-4">
        @csrf
        <select name="polling_unit_uniqueid" id="polling_unit_uniqueid" required
                class="border border-gray-300 px-4 py-2 rounded-l-md flex-1">
            @foreach($polling_units as $polling_unit)
                <option value="{{ $polling_unit->uniqueid }}">{{ $polling_unit->polling_unit_name }}</option>
            @endforeach
        </select>
        <button type="submit" name="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded-r-md ml-2 hover:bg-blue-600 transition-colors">Show
        </button>
    </form>
</div>
</body>
</html>
