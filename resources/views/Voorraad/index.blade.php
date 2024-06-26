<x-app-layout>
<!DOCTYPE html>
<html>
<head>
    <title>Overzicht Productvoorraden</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-bold underline text-green-600 m-6">Overzicht Productvoorraden</h1>
            <form method="GET" action="{{ route('voorraad.index') }}" class="flex items-center space-x-4">
                <label for="categorie_id" class="font-semibold">Selecteer Categorie</label>
                <select name="categorie_id" id="categorie_id" class="form-select block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    <option value="">Alle Categorieën</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ ($categorie_id == $category->id) ? 'selected' : '' }}>
                            {{ $category->naam }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="bg-gray-600 text-white px-2 py-2 rounded-md shadow hover:bg-gray-700 w-64">Toon Voorraad</button>
            </form>
        </div>
        <div class="bg-white shadow-md rounded-lg p-5">
            <table class="min-w-full bg-white">
                <thead class="">
                    <tr>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Productnaam</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Categorie</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Eenheid</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Aantal</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Houdbaarheidsdatum</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Magazijn</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border">Voorraad Details</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse($voorraad as $item)
                        <tr>
                            <td class="text-center py-3 px-4 border">{{ $item->productnaam }}</td>
                            <td class="text-center py-3 px-4 border">{{ $item->categorie }}</td>
                            <td class="text-center py-3 px-4 border">{{ $item->eenheid }}</td>
                            <td class="text-center py-3 px-4 border">{{ $item->aantal }}</td>
                            <td class="text-center py-3 px-4 border">{{ $item->houdbaarheidsdatum }}</td>
                            <td class="text-center py-3 px-4 border">{{ $item->magazijn }}</td>
                            <td class="border border-black py-2 px-4">
                                <a href="{{ route('voorraad.show', $item->id) }}" class="text-blue-500 hover:underline">
                                    <img src="{{ asset('img/view-details-4.png') }}" alt="Details" class="inline-block w-6 h-6">
                                </a>
                            </td>                        </tr>
                    @empty
                        
                    <tr>
                        <td colspan="7" class="text-center py-5 px-4 bg-yellow-100 text-yellow-600 m-6">Er zijn geen producten bekend die behoren bij de geselecteerde productcategorie</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <a href="{{ route('dashboard') }}" class="mt-5 inline-block bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 m-4">Home</a>
        </div>
    </div>
</body>
</html>

</x-app-layout>