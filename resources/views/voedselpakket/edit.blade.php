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
        @if(session('success'))
        <div class=" bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        <form action="{{ route('voedselpakket.update', $voedselpakket->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
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
            <a href="{{ route('voedselpakket.show', $voedselpakket->gezin_id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">terug</a>
            <a href="{{ url('/') }}" class="bg-blue-500 text-white px-4 py-2 rounded">home</a>
        </div>
    </div>
</body>

</html>