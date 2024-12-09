@extends('layout')
@section('title', 'Editar Servicio')
@section('content')
    <table>
        <tr>
            <th colspan="4">Editar Servicio</th>
        </tr>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        @include('partials.validation-errors')
        <form action="{{route('servicios.update', $servicio)}}" method="post">
            @csrf @method('PATCH')
            @include('partials.form',['btnText' => 'Actualizar'])
        </form>
    </table>
@endsection