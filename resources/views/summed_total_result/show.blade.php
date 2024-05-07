<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summed Total Result</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8" style="max-width: 90%;">
        <h2 class="text-xl font-bold mt-8">Summed Total Result for {{ $lgaName }} LGA:</h2>
        <div class="bg-white p-4 rounded shadow-md">
            <p class="text-xl font-bold mb-2">Total Score: {{ $totalScore }}</p>
        </div>
    </div>
</body>
</html>
