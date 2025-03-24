@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-10 bg-gray-100 shadow-lg rounded-lg">
    <h1 class="text-4xl font-bold text-center text-blue-600">📊 Dashboard</h1>
    <p class="text-gray-700 text-center mt-4">
        ¡Bienvenido, {{ Auth::user()->name }}! Aquí puedes gestionar tus actividades de reciclaje.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-green-600">♻️ Puntos acumulados</h2>
            <p class="text-gray-700 mt-2">250 puntos</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-blue-600">📅 Actividad reciente</h2>
            <p class="text-gray-700 mt-2">Última recolección: 22 de marzo, 2025</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-yellow-600">🏅 Recompensas disponibles</h2>
            <p class="text-gray-700 mt-2">Canjea tus puntos por descuentos o premios.</p>
        </div>
    </div>

    <div class="mt-10 text-center">
        <a href="{{ route('logout') }}" 
           class="px-6 py-3 bg-red-500 text-white rounded-md hover:bg-red-600 transition"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>
@endsection
