@csrf
<tr>
    <th>Titulo</th>
    <td>
        <input type="text" name="titulo" id="titulo" value="{{old('titulo', $servicio->titulo)}}">
    </td>
</tr>
<tr>
    <th>Descripcion</th>
    <td>
        <input type="text" name="descripcion" id="descripcion" value="{{old('descripcion', $servicio->descripcion)}}">
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><button>{{$btnText}}</button></td>
</tr>