<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-6">Overzicht Producten</h1>
                    <h2 class="text-2xl font-semibold mb-4">Leverancier Details</h2>

                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Naam</th>
                                <th class="py-3 px-6 text-left">Soort Allergie</th>
                                <th class="py-3 px-6 text-left">Barcode</th>
                                <th class="py-3 px-6 text-left">Houdbaarheidsdatum</th>
                                <th class="py-3 px-6 text-left">Product Wijzigen</th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($producten as $product)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">{{ $product->id }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $product->naam }}</td>
                                    <td class="py-3 px-6 text-left">{{ $product->soortallergie }}</td>
                                    <td class="py-3 px-6 text-left">{{ $product->barcode }}</td>
                                    <td class="py-3 px-6 text-left">{{ \Carbon\Carbon::parse($product->houdbaarheidsdatum)->format('d-m-Y') }}</td>
                                    <td class="py-3 px-6 text-left">
                                    @if(empty($product->id))
                                        <p>Error: Product ID is missing!</p>
                                    @else
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}">
                                            <img src="{{ asset('img/view-details-4.png') }}" alt="Details" class="inline-block w-6 h-6">
                                        </a>
                                    @endif
                                    </td>                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-6">
                        <a href="{{ route('leverancier.overzicht') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Terug</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
