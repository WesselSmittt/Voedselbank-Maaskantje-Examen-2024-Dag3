<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gezinsdetails</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-green-700">Gezinsdetails</h1>
        <div class="bg-white p-4 rounded shadow-md">
            <h2 class="text-xl font-semibold">{{ $gezin->naam }}</h2>
            <p><strong>Omschrijving:</strong> {{ $gezin->omschrijving }}</p>
            <p><strong>Totaal aantal personen:</strong> {{ $gezin->totaal_aantal_personen }}</p>
            <h3 class="text-lg font-semibold mt-4">Voedselpakketten</h3>
            <table class="min-w-full bg-white mt-2">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Pakketnummer</th>
                        <th class="py-2 px-4 border-b">Datum samenstelling</th>
                        <th class="py-2 px-4 border-b">Datum uitgifte</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Aantal producten</th>
                        <th class="py-2 px-4 border-b">Wijzig Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gezin->voedselpakketten as $voedselpakket)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $voedselpakket->pakket_nummer }}</td>
                        <td class="py-2 px-4 border-b">{{ $voedselpakket->datum_samenstelling }}</td>
                        <td class="py-2 px-4 border-b">{{ $voedselpakket->datum_uitgifte ?? '-' }}</td>
                        <td class="py-2 px-4 border-b">{{ $voedselpakket->status }}</td>
                        <td class="py-2 px-4 border-b">{{ $voedselpakket->producten->count() }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="{{ route('voedselpakket.edit', $voedselpakket->id) }}" class="text-blue-500 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M12.293 2.293a1 1 0 011.414 0L16 4.586a1 1 0 010 1.414L8.414 14.586a2 2 0 01-.707.293l-4 1a1 1 0 01-1.263-1.263l1-4a2 2 0 01.293-.707L12.293 2.293z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="{{ route('voedselpakket.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">terug</a>
            <a href="{{ url('/') }}" class="bg-blue-500 text-white px-4 py-2 rounded">home</a>
        </div>
    </div>
</body>

</html>