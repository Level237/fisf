<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>@vite(['resources/css/app.css', 'resources/js/app.js'])
<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md flex flex-col">
            <div class="p-6 font-bold text-xl border-b">Admin Panel</div>
            <nav class="flex-1 mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-gray-200">Accueil</a>
                <a href="{{ route('news.index') }}" class="block py-2 px-4 hover:bg-gray-200">Actualités</a>
                <a href="{{ route('evenements') }}" class="block py-2 px-4 hover:bg-gray-200">Événements</a>
                <a href="{{ route('partners') }}" class="block py-2 px-4 hover:bg-gray-200">Partenaires</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Utilisateurs</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200">Paramètres</a>
            </nav>
            <div class="p-4 border-t">
                <form method="POST" action="">
                    @csrf
                    <button type="submit" class="w-full text-left py-2 px-4 hover:bg-gray-200">Déconnexion</button>
                </form>
            </div>
        </aside>
        <!-- Main content -->
        <main class="flex-1 p-8">
            <!-- Topbar -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">@yield('page-title', 'Tableau de bord')</h1>
                <div class="flex items-center gap-4">
                    <input type="text" placeholder="Recherche..." class="border rounded px-2 py-1">
                    <div class="flex items-center gap-2">
                        <img src="https://ui-avatars.com/api/?name=Admin" class="w-8 h-8 rounded-full" alt="Avatar">
                        <span>Admin</span>
                    </div>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
</body>
</html> 