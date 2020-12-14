@extends('layouts.master')
@section('title','Practica CRUD')
@section('header')
<center><strong><h1>Practica CRUD</h1></strong></center>
@parent
@stop
@section('navbar')
@parent
@stop
@section('contenido')
<div class="p-3 mb-2 bg-dark text-white">
<a href="{{action('poetcontroller@create')}}"> Agregar Nuevo Poeta</a>
</div>

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">PoetCode</th>
      <th scope="col">Firstname</th>
      <th scope="col">Surname</th>
      <th scope="col">Address</th>
      <th scope="col">PostCode</th>
      <th scope="col">Telephone Number</th>
      <th scope="col">ACTUALIZAR</th>
      <th scope="col">BORRAR</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($usuarios as $user)
     <tr>
        <th scope="row">{{$user->poetcode}}</th>
        <td>{{$user->firstname}}</td>
        <td>{{$user->surname}}</td>
        <td>{{$user->adress}}</td>
        <td>{{$user->postcode}}</td>
        <td>{{$user->telephonenumeber}}</td>
        <td><a href="{{action('poetcontroller@show',['id'=>$user->poetcode])}}">
        <img src="/images/actualizar.png" width="30" height="30" class="d-inline-block align-top" alt="img no found" loading="lazy"></td></a>
        <td><a href="{{action('poetcontroller@destroy',['id'=>$user->poetcode])}}">
        <img src="/images/borrar.png" width="30" height="30" class="d-inline-block align-top" alt="img no found" loading="lazy"></td></a>
      </tr>
    @endforeach
  </tbody>
</table>
<br>
<div class="alert alert-success" role="alert">
  {{session('Status')}}
</div>
<br>
@stop
@section('footer')
<h4>Derechos Reservados - {{date('y')}}</h4>
@stop