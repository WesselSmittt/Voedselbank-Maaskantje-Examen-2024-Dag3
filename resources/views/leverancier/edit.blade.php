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
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Begin Form -->
                    <form method="POST" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="houdbaarheidsdatum" class="block text-sm font-medium text-gray-700">Houdbaarheidsdatum</label>
                            <input type="date" name="houdbaarheidsdatum" id="houdbaarheidsdatum" value="{{ \Carbon\Carbon::parse($product->houdbaarheidsdatum)->format('Y-m-d') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                Update
                            </button>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('producten.overzicht') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 active:bg-gray-600 focus:outline-none focus:border-gray-600 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                Terug naar overzicht
                            </a>
                        </div>
                    </form>
                    <!-- Einde Form -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
