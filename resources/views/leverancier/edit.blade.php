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
                    <form action="{{ route('product.update', ['product' => $product->your_custom_key]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <label for="houdbaarheidsdatum">Houdbaarheidsdatum:</label>
                        <input type="date" id="houdbaarheidsdatum" name="houdbaarheidsdatum" value="{{ $product->houdbaarheidsdatum->format('Y-m-d') }}">
                        <button type="submit">Opslaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>