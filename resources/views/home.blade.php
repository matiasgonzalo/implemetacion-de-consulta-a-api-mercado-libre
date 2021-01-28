@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Opciones</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('productList') }}" class="btn btn-primary btn-md btn-block">10 Articulos Categoria AC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
