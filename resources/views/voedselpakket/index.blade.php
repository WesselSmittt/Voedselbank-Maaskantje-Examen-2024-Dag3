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
        <h1 class="text-2xl font-bold text-green-700">Overzicht gezinnen met voedselpakketten</h1>
        <form action="{{ route('voedselpakket.filter') }}" method="POST" class="flex justify-end my-4">
            @csrf
            <div class="relative">
                <select name="eetwens_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Selecteer Eetwens</option>
                    @foreach($eetwensen as $eetwens)
                    <option value="{{ $eetwens->id }}">{{ $eetwens->naam }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M7 10V0L3 4 7 8V0h6v8l4-4-4 4V0z" />
                    </svg>
                </div>
            </div>
            <button type="submit" class="ml-2 bg-gray-700 text-white px-4 py-2 rounded">Toon Gezinnen</button>
        </form>
        @if($gezinnen->isEmpty())
        <div class="alert alert-warning mt-3">Er zijn geen gezinnen bekend die de geselecteerde eetwens hebben</div>
        @else
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Gezinsnaam</th>
                    <th class="py-2 px-4 border-b">Omschrijving</th>
                    <th class="py-2 px-4 border-b">Volwassenen</th>
                    <th class="py-2 px-4 border-b">Kinderen</th>
                    <th class="py-2 px-4 border-b">Babys</th>
                    <th class="py-2 px-4 border-b">Vertegenwoordiger</th>
                    <th class="py-2 px-4 border-b">Voedselpakket Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gezinnen as $gezin)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $gezin->naam }}</td>
                    <td class="py-2 px-4 border-b">{{ $gezin->omschrijving }}</td>
                    <td class="py-2 px-4 border-b">{{ $gezin->aantal_volwassenen }}</td>
                    <td class="py-2 px-4 border-b">{{ $gezin->aantal_kinderen }}</td>
                    <td class="py-2 px-4 border-b">{{ $gezin->aantal_babys }}</td>
                    <td class="py-2 px-4 border-b">
                        @foreach($gezin->personen as $persoon)
                        @if($persoon->IsVertegenwoordiger)
                        {{ $persoon->voornaam }} {{ $persoon->tussenvoegsel }} {{ $persoon->achternaam }}
                        @endif
                        @endforeach
                    </td>
                    <td class="py-2 px-4 border-b text-center">
                        @foreach($gezin->voedselpakketten as $voedselpakket)
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M7 10V0L3 4 7 8V0h6v8l4-4-4 4V0z" />
                            </svg>
                        </a>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        <div class="mt-4">
            <a href="{{ url('/') }}" class="bg-blue-500 text-white px-4 py-2 rounded">home</a>
        </div>
    </div>
</body>

</html>