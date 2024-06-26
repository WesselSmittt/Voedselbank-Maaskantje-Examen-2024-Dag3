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
                    <h1>Overzicht Producten</h1>
                    <h2>Leverancier Details</h2>
                        <p><strong>Naam:</strong> {{ $leverancier->naam }}</p>
                        <p><strong>Leveranciernummer:</strong> {{ $leverancier->leveranciernummer }}</p>
                        <p><strong>Leveranciertype:</strong> {{ $leverancier->leveranciertype }}</p>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Soort Allergie</th>
                                <th>Barcode</th>
                                <th>Houdbaarheidsdatum</th>
                                <th>Product Wijzigen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($producten as $product)
                                <tr>
                                    <td>{{ $product->naam }}</td>
                                    <td>{{ $product->soortallergie }}</td>
                                    <td>{{ $product->barcode }}</td>
                                    <td>{{ \Carbon\Carbon::parse($product->houdbaarheidsdatum)->format('d-m-Y') }}</td>
                                    <!-- <td>
                                        <a href="{{ route('leverancier.edit', $product->id) }}" class="btn btn-primary">Bewerken</a>
                                    </td> -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('leverancier.overzicht') }}" class="btn btn-primary">Terug</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>