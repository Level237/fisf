@extends('layouts.admin')

@section('page-title', 'Tableau de bord')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Carte Statistique Actualités -->
    <div class="bg-white p-6 rounded-lg shadow flex items-center">
        <div class="bg-blue-100 text-blue-600 rounded-full p-3 mr-4">
            <!-- Icône Actualités -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h2l2-2h4l2 2h2a2 2 0 012 2v12a2 2 0 01-2 2z"/>
            </svg>
        </div>
        <div>
            <div class="text-gray-500">Actualités</div>
            <div class="text-2xl font-bold">12</div>
        </div>
    </div>
    <!-- Carte Statistique Événements -->
    <div class="bg-white p-6 rounded-lg shadow flex items-center">
        <div class="bg-green-100 text-green-600 rounded-full p-3 mr-4">
            <!-- Icône Événements -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8 7V3M16 7V3M4 11h16M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
        <div>
            <div class="text-gray-500">Événements</div>
            <div class="text-2xl font-bold">5</div>
        </div>
    </div>
    <!-- Carte Statistique Partenaires -->
    <div class="bg-white p-6 rounded-lg shadow flex items-center">
        <div class="bg-yellow-100 text-yellow-600 rounded-full p-3 mr-4">
            <!-- Icône Partenaires -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 3.13a4 4 0 010 7.75M8 3.13a4 4 0 000 7.75"/>
            </svg>
        </div>
        <div>
            <div class="text-gray-500">Partenaires</div>
            <div class="text-2xl font-bold">8</div>
        </div>
    </div>
</div>

<!-- Section Dernières Actualités -->
<div class="bg-white p-6 rounded-lg shadow mb-8">
    <h2 class="text-xl font-semibold mb-4">Dernières actualités</h2>
    <ul>
        <li class="border-b py-2 flex justify-between items-center">
            <span>Titre de l'actualité 1</span>
            <span class="text-xs text-gray-400">il y a 2 jours</span>
        </li>
        <li class="border-b py-2 flex justify-between items-center">
            <span>Titre de l'actualité 2</span>
            <span class="text-xs text-gray-400">il y a 4 jours</span>
        </li>
        <li class="py-2 flex justify-between items-center">
            <span>Titre de l'actualité 3</span>
            <span class="text-xs text-gray-400">il y a 1 semaine</span>
        </li>
    </ul>
</div>

<!-- Section Accès rapide -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <a href="{{ route('news.index') }}" class="bg-blue-600 text-white rounded-lg p-6 flex items-center shadow hover:bg-blue-700 transition">
        <svg class="w-8 h-8 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h2l2-2h4l2 2h2a2 2 0 012 2v12a2 2 0 01-2 2z"/>
        </svg>
        <span class="text-lg font-semibold">Gérer les actualités</span>
    </a>
    <a href="{{ route('evenements') }}" class="bg-green-600 text-white rounded-lg p-6 flex items-center shadow hover:bg-green-700 transition">
        <svg class="w-8 h-8 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M8 7V3M16 7V3M4 11h16M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        <span class="text-lg font-semibold">Gérer les événements</span>
    </a>
</div>
@endsection 