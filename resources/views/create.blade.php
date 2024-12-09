@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">CREAR NUEVO SERVICIO</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('servicios.store') }}" method="post">
    @include('partials.form',['btnText' => 'Guardar'])
    </form>
</table>
@endsection