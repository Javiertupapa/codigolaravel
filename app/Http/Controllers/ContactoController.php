<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Mail;
use App\mail\MensajeRecibido;

class ContactoController extends Controller
{
 public function store(){
  $mensaje = request()->validate([
     'nombre' => 'required',
     'email' => 'required|email',
     'asunto' => 'required',
     'mensaje' => 'required|min:3',
    ],[
    'nombre.required' => 'Ingresar tu nombre',
    'email.required' => 'Ingresar tu correo',
    'asunto.required' => 'Ingresar tu asunto',
    'mensaje.required' => 'Ingresar tu mensaje',
    ]);

    Mail::to('renzomoranfasa14@gmail.com')->send( new MensajeRecibido($mensaje));
   // return new MensajeRecibido($mensaje);

    return 'Mensaje Enviado';
 }  
}   

