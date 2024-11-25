@extends('master.layout')

@section('title', 'Your Cart')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>Your Cart</h1>

    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right">
            <h4>Total: ${{ number_format(array_sum(array_column(session('cart'), 'price')) , 2) }}</h4>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection