{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion Immobilière')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg mb-8">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('properties.index') }}" class="text-xl font-bold text-gray-800">IMMOBILIER ACHRAF</a>
                <div class="space-x-4">
                    <a href="{{ route('owners.index') }}" class="text-gray-600 hover:text-gray-900">OWNERS</a>
                    <!-- Bouton pour créer un propriétaire -->
                    <a href="{{ route('owners.create') }}" 
                       class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Créer un propriétaire
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>