@extends('layout')
@section('title', 'Servicio')
@section('content')

    <h1>Lista de Servicios</h1>

    <table class="TablaServicios">
        <tr>
            <td class="NuevoServicio" colspan="4">
                <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
            </td>
        </tr>
        <tr>
            <td colspan="4"><b>Servicios Actuales:</b></td>
        </tr>
        <tr class="Resultados">
            @if ($servicios)
                @foreach ($servicios as $servicio)
                    <td>
                        <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }}</a> <br>
                        {{ $servicio->descripcion }}
                    </td>
                @endforeach
            @else
                <td colspan="4">
                    No hay Servicios para mostrar!
                </td>
            @endif
        </tr>
        <tr>
            <td colspan="4" class="Menucito">
                {{ $servicios->links('pagination::bootstrap-4') }}
            </td>
        </tr>
    </table>

@endsection