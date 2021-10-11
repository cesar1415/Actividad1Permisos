@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de productos</h1>
@stop

@section('content')
    <div>
        @hasanyrole('admin|employed')
        <a href="{{route('products.create')}}" type="button" class="btn btn-secondary btn-lg">Crear</a>
    @endhasanyrole
    </div>
    <br>
    <div class="modal-content">
        <div class="p-4">
            <div>
                <table id="products" class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                        @hasanyrole('admin|employed')
                        <th scope="col">Acciones</th>
                        @endhasanyrole
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($products as $product)
                            <th>{{$product->id}}</th>
                            <th>{{$product->name}}</th>
                            <th>{{$product->description}}</th>
                            <th>{{$product->cantidad}}</th>
                            <td>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                @hasanyrole('admin|employed')
                                <a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-outline-info">Detalles</a>
                                @endhasanyrole
                                @role('admin')
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-outline-warning ">Editar</a>
                                <button class="btn btn-sm btn-outline-danger submit-prevent-button" type="sumbit">Eliminar</button>
                                @endrole
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#products').DataTable({
                "lengthMenu": [[5,10,15, -1], [5,10,15, "ALL"]]
            });
        } );
    </script>
@stop
