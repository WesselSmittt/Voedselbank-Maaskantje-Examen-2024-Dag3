<x-app-layout>
<!DOCTYPE html>
<html>
<head>
    <title>Wijzig Product Details</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 w-3/6">
        <div class="bg-white shadow-md rounded-lg p-5">
            <h1 class="text-2xl font-bold text-green-600 mb-5">Wijzig Product Details: {{ $product->naam }}</h1>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
                    <strong class="font-bold">De product gegevens kunnen niet gewijzigd worden</strong>
                </div>
            @endif
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
                    <strong class="font-bold">Succes!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                <script>
                    setTimeout(function() {
                        window.location.href = "{{ session('redirect') }}";
                    }, 3000);
                </script>
            @endif
            <form method="POST" action="{{ route('voorraad.update', $product->id) }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="productnaam">
                        Productnaam
                    </label>
                    <input type="text" name="productnaam" id="productnaam" class="bg-gray-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $product->naam }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="houdbaarheidsdatum">
                        Houdbaarheidsdatum
                    </label>
                    <input type="text" name="houdbaarheidsdatum" id="houdbaarheidsdatum" class="bg-gray-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $product->houdbaarheidsdatum }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="barcode">
                        Barcode
                    </label>
                    <input type="text" name="barcode" id="barcode" class="bg-gray-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $product->barcode }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="locatie">
                        Magazijn Locatie
                    </label>
                    <select name="locatie" id="locatie" class="bg-gray-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="{{ $magazijn->locatie }}">{{ $magazijn->locatie }}</option>
                        <!-- Voeg hier extra locaties toe indien nodig -->
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="ontvangstdatum">
                        Ontvangstdatum
                    </label>
                    <input type="text" name="ontvangstdatum" id="ontvangstdatum" class="bg-gray-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $magazijn->ontvangstdatum }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="aantal">
                        Aantal uitgeleverde producten
                    </label>
                    <input type="number" name="aantal" id="aantal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('aantal', $magazijn->aantal) }}">
                    @if ($errors->has('aantal'))
                        <p class="text-red-500 text-xs italic mt-2">Er worden meer producten uitgeleverd dan dat er op voorraad zijn</p>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="uitleveringsdatum">
                        Uitleveringsdatum
                    </label>
                    <input type="date" name="uitleveringsdatum" id="uitleveringsdatum" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $magazijn->uitleveringsdatum }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="aantal_op_voorraad">
                        Aantal op voorraad
                    </label>
                    <input type="number" name="aantal_op_voorraad" id="aantal_op_voorraad" class="bg-gray-100 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $magazijn->aantal }}" disabled>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Wijzig Product Details</button>
                    <div class="space-x-4">
                        <a href="{{ route('voorraad.show', $product->id) }}" class="bg-gray-600 text-white px-4 py-2 rounded-md shadow hover:bg-gray-700">Terug</a>
                        <a href="{{ route('voorraad.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">Home</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
</x-app-layout>
