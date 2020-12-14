@extends('layouts.master')
@section('title','practica')
@section('header')
<center><strong><h1>{{$title}}</h1></strong></center>
@parent
@stop
@section('navbar')
@parent
@stop
@section('contenido')
@parent
@stop
@section('footer')
<h4>Derechos Reservados - {{date('y')}}</h4>
@stop