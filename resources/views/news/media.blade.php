@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Hero Section réduit -->
    <section class="relative py-12 bg-gradient-to-b from-emerald-900 to-emerald-800">
        <div class="container mx-auto px-4 relative">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl font-bold text-white mb-4">Médias</h1>
                <p class="text-lg text-white/90">Toute l'actualité médiatique du Scrabble francophone</p>
            </div>
        </div>
    </section>

    <!-- Filtres -->
    <section class="bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap gap-4 py-4">
                <button class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700">Presse</button>
                <button class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700">Radio</button>
                <button class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700">TV</button>
                <button class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700">Web médias</button>
                <button class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700">Notre Galerie</button>
            </div>
        </div>
    </section>

    <!-- Contenu Média -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Grille de contenu média -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cartes média -->
            </div>
        </div>
    </section>
</div>
@endsection 