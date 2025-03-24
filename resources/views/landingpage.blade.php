@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Bienvenido a la App de Reciclaje ♻️</h1>
    <p>Esta es la página de inicio para usuarios no registrados.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
    <a href="{{ route('register') }}" class="btn btn-success">Registrarse</a>
</div>
@endsection
