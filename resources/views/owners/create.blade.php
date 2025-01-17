{{-- resources/views/owners/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Ajouter un propriétaire')

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-6">Ajouter un propriétaire</h1>

            <form action="{{ route('owners.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" name="name" id="name" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <button type="submit"
                                class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Ajouter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
