@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-10 bg-white shadow-lg rounded-lg">
    <h1 class="text-4xl font-bold text-center text-green-600">🌿 Bienvenido a la App de Reciclaje</h1>
    <p class="text-gray-700 text-center mt-4">
        ¡Recicla y gana recompensas! Únete a nuestra comunidad comprometida con el planeta.
    </p>

    <div class="flex justify-center mt-6">
        <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 transition">
            Registrarse
        </a>
        <a href="{{ route('login') }}" class="ml-4 px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">
            Iniciar sesión
        </a>
    </div>

    <div class="mt-10">
        <h2 class="text-2xl font-semibold text-gray-800">🌍 ¿Por qué unirte?</h2>
        <ul class="list-disc list-inside mt-4 text-gray-600">
            <li>Gana puntos al reciclar y canjéalos por premios.</li>
            <li>Consulta tu impacto ambiental con reportes detallados.</li>
            <li>Conéctate con la comunidad recicladora local.</li>
        </ul>
    </div>
</div>
@endsection
