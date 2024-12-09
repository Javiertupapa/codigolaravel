@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')
<table class="Resultados2" border="1">
    <tr>
        <td colspan="4" align="center"><b>INFORMACIÓN</b></td>
    </tr>
    <tr>
        <td colspan="4"><b>Servicio:</b></td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->titulo }} 
        <a href="{{route ('servicios.edit', $servicio)}}">
        Editar</a>
        </td>
        <td colspan="2">
            <form action="{{route('servicios.destroy',$servicio)}}" method="post">
                @csrf @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="4"><b>Descripción:</b></td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->descripcion }}</td>
    </tr>
    <tr>
        <td colspan="4"><b>Fecha:</b></td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->created_at->diffForHumans() }}</td>
    </tr>
</table>
@endsection