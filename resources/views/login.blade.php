@extends('layouts.logins')
@section('title','practica')
@section('header')
<center><strong><h1>{{$title}}</h1></strong></center>
@stop
@section('contenido')
<form action="{{action('ControllerPractica@validarlogin')}}" method = "POST">
    {{csrf_field()}}
    <label for="user">Usuario</label>
    <input type="text" name="user"> 
    <br>
    <label for="pass">Password</label>
    <input type="password" name="pass"> 
    <br>
    <label for="llave">LLave</label>
    <input type="text" name="llave"> 
    <br>
    <input type="submit" value="Enviar"  class="p-3 mb-2 bg-secondary text-white">
</form>
<br>
@stop
@section('footer')
<h4>Derechos Reservados - {{date('y')}}</h4>
@stop