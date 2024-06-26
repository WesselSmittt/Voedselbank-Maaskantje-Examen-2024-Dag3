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
                    <div class="input-group mb-3">
                        <select class="form-control" name="leveranciertype">
                            <option value="">Kies een type...</option>
                            <option value="Bedrijf">Bedrijf</option>
                            <option value="Instelling">Instelling</option>
                            <option value="Overheid">Overheid</option>
                            <option value="Particulier">Particulier</option>
                            <option value="Donor">Donor</option>
                            <option value="kaas">kaas</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Zoeken</button>
                            <a href="{{ route('leveranciers.index') }}" class="btn btn-primary">Terug naar overzicht</a>
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
                <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Naam</th>
                                <th>ContactPersoon</th>
                                <th>Email</th>
                                <th>Telefoonnummer</th>
                                <th>LeverancierNummer</th>
                                <th>LeverancierType</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leveranciers as $leverancier)
                                <tr>
                                    <td>{{ $leverancier->id }}</td>
                                    <td>{{ $leverancier->naam }}</td>
                                    <td>{{ $leverancier->contactpersoon }}</td>
                                    <td>
                                        @foreach ($leverancier->contacten as $contact)
                                            {{ $contact->email }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($leverancier->contacten as $contact)
                                            {{ $contact->telefoonnummer }}<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $leverancier->leveranciernummer }}</td>
                                    <td>{{ $leverancier->leveranciertype }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
