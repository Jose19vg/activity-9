@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Panel de control 🚀</h1>
    <p>Esta es la vista exclusiva para usuarios autenticados.</p>
    <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar sesión</a>
</div>
@endsection
