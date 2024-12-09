@extends('layout')
@section('title', 'Contacto')
@section('content')
<tr>
    <td colspan="4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="2">Contacto</th>
                </tr>
            </thead>
            <form action="{{route('contacto')}}" method="post">
            @csrf{{-- Toque para verificar que el formulario es seguro --}}
            <tbody>
                <tr>
                    <td scope="row">Nombre</td>
                    <td>
                        <input type="text" name="nombre" placeholder="Nombre" class="from-control" value="{{old('nombre')}}">
                        {{$errors->first('nombre')}}
                    </td>
                </tr>
                <tr>
                    <td scope="row">Email</td>
                    <td>
                        <input type="text" name="email" placeholder="Email" class="from-control" value="{{old('email')}}">
                        {{$errors->first('email')}}
                    </td>
                </tr>
                <tr>
                    <td scope="row">Asunto</td>
                    <td>
                        <input type="text" name="asunto" placeholder="Asunto" class="from-control" value="{{old('asunto')}}">
                        {{$errors->first('asunto')}}
                    </td>
                </tr>
                <tr>
                    <td scope="row">Mensaje</td>
                    <td>
                        <textarea name="mensaje" colspan="15" rows="8"  placeholder="Mensaje" class="from-control" value="{{old('mensaje')}}">
                            {{$errors->first('mensaje')}}
                    </textarea>
                </tr>   

                <tr>
                    <td scope="row" colspan="2" align="center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="rest" class="btn btn-primary">Cancelar</button>
                    </td>
                </tr>
            </tbody>
            </form>
        </table>
    </td>
</tr>
@endsection

