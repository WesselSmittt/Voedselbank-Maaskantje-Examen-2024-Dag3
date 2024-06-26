<x-app-layout>
<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 w-3/6">
        <div class="bg-white shadow-md rounded-lg p-5">
            <h1 class="text-2xl font-bold text-green-600 mb-5">Product Details: {{ $product->naam }}</h1>
            <table class="min-w-full bg-white border border-black">
                <tbody class="text-black">
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Productnaam</th>
                        <td class="border border-black py-2 px-4">{{ $product->naam }}</td>
                    </tr>
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Houdbaarheidsdatum</th>
                        <td class="border border-black py-2 px-4">{{ $product->houdbaarheidsdatum }}</td>
                    </tr>
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Barcode</th>
                        <td class="border border-black py-2 px-4">{{ $product->barcode }}</td>
                    </tr>
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Magazijn locatie</th>
                        <td class="border border-black py-2 px-4">{{ $magazijn->locatie }}</td>
                    </tr>
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Ontvangstdatum</th>
                        <td class="border border-black py-2 px-4">{{ $magazijn->ontvangstdatum }}</td>
                    </tr>
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Uitleveringsdatum</th>
                        <td class="border border-black py-2 px-4">{{ $magazijn->uitleveringsdatum ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th class="border border-black py-2 px-4 text-left">Aantal op voorraad</th>
                        <td class="border border-black py-2 px-4">{{ $magazijn->aantal }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between mt-5">
                <a href="{{ route('voorraad.edit', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">Wijzig</a>
                
                <div class="space-x-4">
                        <a href="{{ route('voorraad.index', $product->id) }}" class="bg-gray-600 text-white px-4 py-2 rounded-md shadow hover:bg-gray-700">Terug</a>
                        <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">Home</a>
                    </div>
               
            </div>
        </div>
    </div>
</body>
</html>
</x-app-layout>
