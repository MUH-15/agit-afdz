@extends('master.layout')

@section('title', 'Welcome to Fape Vape Store')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1 class="text-center">Welcome to BeeLiquid</h1>
    <p class="text-center">Your ultimate destination for premium vaping products!</p>

    <!-- Promotional Banner -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="alert alert-info text-center">
                <strong>Special Offer!</strong> Get 20% off on your first order with code: FIRST20
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sample Vape Product 1 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="/images/ursa.jpg" class="card-img-top" alt="Vape Product 1">
                <div class="card-body">
                    <h5 class="card-title">Ursa Nano S2</h5>
                    <p class="card-text">$29.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="name" value="Ursa Nano S2">
                        <input type="hidden" name="price" value="29.99">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sample Vape Product 2 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/panda.jpg') }}" class="card-img-top" alt="Vape Product 2">
                <div class="card-body">
                    <h5 class="card-title">Panda V1</h5>
                    <p class="card-text">$39.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="name" value="Panda V1">
                        <input type="hidden" name="price" value="39.99">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sample Vape Product 3 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/chillvibe.png') }}" class="card-img-top" alt="Vape Product 3">
                <div class="card-body">
                    <h5 class="card-title">Panda V2</h5>
                    <p class="card-text">$49.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="name" value="Panda V2">
                        <input type="hidden" name="price" value="49.99">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('cart.index') }}" class="btn btn-secondary">View Cart</a>
    </div>
</div>
@endsection