{{-- resources/views/properties/show.blade.php --}}
@extends('layouts.app')

@section('title', $property->name)

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $property->name }}</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Détails de la propriété</h2>
                    <ul class="space-y-2">
                        <li><strong>Prix:</strong> {{ number_format($property->price, 2) }} €</li>
                        <li><strong>Localisation:</strong> {{ $property->location }}</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8">
                <a href="{{ route('properties.index') }}" 
                   class="inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>
@endsection