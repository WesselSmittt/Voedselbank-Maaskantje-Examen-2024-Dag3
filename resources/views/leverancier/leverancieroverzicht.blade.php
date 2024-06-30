<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('leveranciers.index') }}" method="GET">
                        <h1 class="text-2xl font-bold mb-4">Overzicht Leveranciers</h1>
                        <div class="flex mb-3">
                            <select class="form-select w-64 border-gray-300 rounded-md shadow-sm" name="leveranciertype">
                                <option value="">Kies een type...</option>
                                <option value="Bedrijf">Bedrijf</option>
                                <option value="Instelling">Instelling</option>
                                <option value="Overheid">Overheid</option>
                                <option value="Particulier">Particulier</option>
                                <option value="Donor">Donor</option>
                                <option value="kaas">kaas</option>
                            </select>
                            <div class="ml-3 flex">
                                <button class="bg-blue-500 text-black px-4 py-2 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Zoeken</button>
                                <a href="{{ route('leveranciers.index') }}" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">Terug naar overzicht</a>
                            </div>
                        </div>
                    </form>
                    @if(session('message'))
                        <div class="alert alert-warning">
                            {{ session('message') }}
                        </div>
                    @elseif(!empty($message))
                        <div class="alert alert-warning">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="min-w-full border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 border-b border-gray-300">
                                    <th class="px-4 py-2 text-left">ID</th>
                                    <th class="px-4 py-2 text-left">Naam</th>
                                    <th class="px-4 py-2 text-left">ContactPersoon</th>
                                    <th class="px-4 py-2 text-left">Email</th>
                                    <th class="px-4 py-2 text-left">Telefoonnummer</th>
                                    <th class="px-4 py-2 text-left">LeverancierNummer</th>
                                    <th class="px-4 py-2 text-left">LeverancierType</th>
                                    <th class="px-4 py-2 text-left">Product Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leveranciers as $leverancier)
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">{{ $leverancier->id }}</td>
                                        <td class="px-4 py-2">{{ $leverancier->naam }}</td>
                                        <td class="px-4 py-2">{{ $leverancier->contactpersoon }}</td>
                                        <td class="px-4 py-2">
                                            @foreach ($leverancier->contacten as $contact)
                                                {{ $contact->email }}<br>
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-2">
                                            @foreach ($leverancier->contacten as $contact)
                                                {{ $contact->telefoonnummer }}<br>
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-2">{{ $leverancier->leveranciernummer }}</td>
                                        <td class="px-4 py-2">{{ $leverancier->leveranciertype }}</td>
                                        <td class="px-4 py-2">
                                            <a href="{{ route('producten.overzicht', ['leverancier_id' => $leverancier->id]) }}" class="text-blue-500 hover:text-blue-700">Producten Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
