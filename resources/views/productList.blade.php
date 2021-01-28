@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos Cat. A/C - Los 10 mas caros</div>    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad Vendida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product['id'] }}</th>
                                <td>{{ $product['title'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['sold_quantity'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Total vendido</th>
                            <th scope="col">Precio de los 10 productos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $totalSoldQuantity }}</td>
                            <td>{{ $totalPrice }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('mercadolibre.home') }}" class="btn btn-secondary btn-md btn-block">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection