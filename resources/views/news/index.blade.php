@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-b from-emerald-900 to-emerald-800">
        <div class="container mx-auto px-4 relative">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-5xl font-bold text-white mb-6">Actualités</h1>
                <p class="text-xl text-white/90">Restez informé de toute l'actualité du Scrabble francophone</p>
            </div>
        </div>
    </section>

    <!-- Navigation des sections -->
    <section class="bg-white border-b">
        <div class="container mx-auto px-4">
            <nav class="flex flex-wrap justify-center gap-4 py-4">
                <a href="" class="px-6 py-3 rounded-full bg-emerald-100 text-emerald-700 font-medium hover:bg-emerald-200 transition-colors">
                    Événements
                </a>
                <a href="{{ route('news.announcements') }}" class="px-6 py-3 rounded-full bg-emerald-100 text-emerald-700 font-medium hover:bg-emerald-200 transition-colors">
                    Annonces
                </a>
                <a href="{{ route('news.media') }}" class="px-6 py-3 rounded-full bg-emerald-100 text-emerald-700 font-medium hover:bg-emerald-200 transition-colors">
                    Médias
                </a>
                <a href="{{ route('news.publications') }}" class="px-6 py-3 rounded-full bg-emerald-100 text-emerald-700 font-medium hover:bg-emerald-200 transition-colors">
                    Publications
                </a>
            </nav>
        </div>
    </section>

    <!-- Contenu Principal -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Section Événements -->
            <div class="mb-16">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Événements à venir</h2>
                    <a href="" class="text-emerald-600 hover:text-emerald-700">Voir tous les événements →</a>
                </div>
                <!-- Liste des événements -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Cartes d'événements -->
                </div>
            </div>

            <!-- Section Médias -->
            <div class="mb-16">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Derniers Médias</h2>
                    <a href="{{ route('news.media') }}" class="text-emerald-600 hover:text-emerald-700">Voir tous les médias →</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Cartes médias -->
                </div>
            </div>

            <!-- Section Publications -->
            <div class="mb-16">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Nos Publications</h2>
                    <a href="{{ route('news.publications') }}" class="text-emerald-600 hover:text-emerald-700">Voir toutes les publications →</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Cartes publications -->
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-emerald-900">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Restez informé</h2>
                <p class="text-xl text-white/90 mb-8">Inscrivez-vous à notre newsletter pour ne rien manquer de l'actualité du Scrabble francophone</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Votre adresse email" class="px-6 py-4 rounded-full flex-1 max-w-md">
                    <button type="submit" class="px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection 