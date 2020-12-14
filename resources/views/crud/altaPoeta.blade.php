@extends('layouts.master')
@if(isset($user) and is_object($user))
    @php
        $title='Modificación de un Usuario';
        $boton = 'Actualizar';
        $id = $user->poetcode;
        $firstname = $user->firstname;
        $surname = $user->surname;
        $address = $user->adress;
        $postcode = $user->postcode;
        $telephonenumeber = $user->telephonenumeber;
    @endphp
@else
    @php
        $title='Alta de Usuario';
        $boton = 'Dar de alta';
        $id = '';
        $firstname = '';
        $surname = '';
        $address = '';
        $postcode = '';
        $telephonenumeber = '';
    @endphp
@endif
@section('title','Mostrar Poetas')
@section('header')
     <center><strong><h1>{{$title}}</h1></strong></center>
@parent
@stop
@section('navbar')
@parent
@stop
@section('contenido')
<br>
<form action="{{isset($user) ? action('poetcontroller@update') :action('poetcontroller@store')}}" method="post" > 
{{csrf_field()}}
@if(isset($user) and is_object($user))
<input type="hidden" name="id" value="{{$id}}">
@endif
<label for="Firstname">Firstname</label>
<input type="text" name="firstname" value="{{$firstname}}">
<br>
<label for="Surname">Surname</label>
<input type="text" name="surname" value="{{$surname}}">
<br>
<label for="Address">Address</label>
<input type="text" name="address" value="{{$address}}">
<br>
<label for="PostCode">Post Code</label>
<input type="text" name="postcode" value="{{$postcode}}">
<br>
<label for="TelephoneNumber">Telephone Number</label>
<input type="text" name="telephonenumber" value="{{$telephonenumeber}}">
<br>
<input type="submit" value="{{$boton}}" > 
</form>
<br>
@stop
@section('footer')
<h4>Derechos Reservados - {{date('y')}}</h4>
@stop