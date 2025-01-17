{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Nos propriétés</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($properties as $property)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $property->name }}</h2>
                    <div class="text-gray-600 mb-4">
                        <p class="mb-2">{{ $property->location }}</p>
                        <p class="text-lg font-bold text-blue-600">{{ number_format($property->price, 2) }} €</p>
                    </div>
                    <a href="{{ route('properties.show', $property) }}" 
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Contacter le propriétaire
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection