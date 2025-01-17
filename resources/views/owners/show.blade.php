{{-- resources/views/owners/show.blade.php --}}
@extends('layouts.app')

@section('title', $owner->name)

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $owner->name }}</h1>
            
            <div class="mb-4">
                <p><strong>Email:</strong> {{ $owner->email }}</p>
            </div>

            <div class="mt-8">
                <a href="{{ route('owners.index') }}" 
                   class="inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>
@endsection