<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig Voedselpakket Status</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-green-700">Wijzig voedselpakket status</h1>
        <div class="bg-white p-4 rounded shadow-md">
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
            <form action="{{ route('voedselpakket.update', $voedselpakket->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                    <select name="status" id="status" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" {{ session('error') ? 'disabled' : '' }}>
                        <option value="Niet Uitgereikt" {{ $voedselpakket->status == 'Niet Uitgereikt' ? 'selected' : '' }}>Niet Uitgereikt</option>
                        <option value="Uitgereikt" {{ $voedselpakket->status == 'Uitgereikt' ? 'selected' : '' }}>Uitgereikt</option>
                        @if($voedselpakket->status == 'NietMeerGegeven')
                        <option value="NietMeerGegeven" selected>NietMeerGegeven</option>
                        @endif
                    </select>
                </div>
                @if(!session('error'))
                <button type="submit" class="bg-gray-700 text-white px-4 py-2 rounded">Wijzig status voedselpakket</button>
                @endif
            </form>
        </div>
        <div class="mt-4">
            <a href="{{ route('voedselpakket.show', $voedselpakket->gezin_id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">terug</a>
            <a href="{{ url('/') }}" class="bg-blue-500 text-white px-4 py-2 rounded">home</a>
        </div>
    </div>
</body>

</html>