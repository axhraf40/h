{{-- resources/views/owners/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Liste des Propriétaires')

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-6">Propriétaires</h1>
            
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($owners as $owner)
                            <tr>
                                <td class="px-6 py-4">{{ $owner->name }}</td>
                                <td class="px-6 py-4">{{ $owner->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection