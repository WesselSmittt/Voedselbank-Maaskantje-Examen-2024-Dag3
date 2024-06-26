<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig voedselpakket status</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-green-700">Wijzig voedselpakket status</h1>
        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif
        <form action="{{ route('voedselpakket.update', $voedselpakket->id) }}" method="POST" class="mt-4">
            @csrf
            <div class="flex items-center">
                <label for="status" class="mr-2">Status:</label>
                <select name="status" id="status" class="form-select mr-4">
                    <option value="Niet Uitgereikt" {{ $voedselpakket->status == 'Niet Uitgereikt' ? 'selected' : '' }}>Niet Uitgereikt</option>
                    <option value="Uitgereikt" {{ $voedselpakket->status == 'Uitgereikt' ? 'selected' : '' }}>Uitgereikt</option>
                </select>
                <button type="submit" class="bg-gray-700 text-white px-4 py-2 rounded">Wijzig status voedselpakket</button>
            </div>
        </form>
        <div class="mt-4">
            <a href="{{ route('voedselpakket.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">terug</a>
            <a href="{{ url('/') }}" class="bg-blue-500 text-white px-4 py-2 rounded">home</a>
        </div>
    </div>
</body>

</html>