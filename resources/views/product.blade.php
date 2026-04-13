@extends('layouts.frontend')

@section('content')

<div class="container mt-5">
    <div class="row">

        <div class="col-md-6">
            <img src="{{ asset('images/product-1.png') }}" class="img-fluid">
        </div>

        <div class="col-md-6">
            <h2>Detail Produk ID: {{ $id }}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <h4 class="text-success">Rp 500.000</h4>

            <a href="#" class="btn btn-primary mt-3">Beli Sekarang</a>
        </div>

    </div>
</div>

@endsection