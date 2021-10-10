@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles</h1>
@stop

@section('content')
    <div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">{{$product->name}}</h2>
                <h3>Id: {{$product->id}}</h3>
                <p class="lead">Cantidad: {{$product->cantidad}}</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto p-3"
                 style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">{{$product->description}}</div>
        </div>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
