@extends('layouts.app')

@section('content')
    <h1 class="text-center m-5">Detalle del producto</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ asset('img/product_ejemplo.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <h1>Computado portail</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et incidunt odit nam deleniti atque eum
                    accusamus aperiam magnam adipisci, id veniam nesciunt quasi cum doloribus maiores perspiciatis
                    accusantium. Voluptatum, nihil.</p>
                <h3>$5.000.000</h3>
                <button type="button" class="btn btn-primary">Añadir al Carrito</button>

            </div>
        </div>
    </div>
@endsection
