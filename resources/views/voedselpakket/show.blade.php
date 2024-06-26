<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voedselpakketten</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-green-700">Gezin Details</h1>
        <div class="bg-white p-4 rounded shadow-md">
            <h2 class="text-xl font-semibold">{{ $gezin->naam }}</h2>
            <p>Omschrijving: {{ $gezin->omschrijving }}</p>
            <p>Totaal aantal personen: {{ $gezin->totaal_aantal_personen }}</p>
            <div class="mt-4">
                <h3 class="text-lg font-semibold">Voedselpakketten</h3>
                @if($gezin->voedselpakketten->isEmpty())
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">Gezin heeft geen voedselpakketten.</span>
                </div>
                @else
                <table class="min-w-full bg-white mt-2">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Pakketnummer</th>
                            <th class="py-2 px-4 border-b">Datum samenstelling</th>
                            <th class="py-2 px-4 border-b">Datum uitgifte</th>
                            <th class="py-2 px-4 border-b">Status</th>
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
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{ route('voedselpakket.edit', $voedselpakket->id) }}" class="text-blue-500 hover:text-blue-700">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M7 10V0L3 4 7 8V0h6v8l4-4-4 4V0z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('voedselpakket.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Terug</a>
        </div>
    </div>
</body>

</html>