@extends('layouts.frontend')
@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__title">
                    <h1>Order Detail</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="{{ route('orders.index')}}">Orders</li>
                        <li class="color__blue">Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
    

<!-- order detail section -->
<div class="cartarea sp_top_100 sp_botton_100">
    <div class="container">
        <div class="mb-4">
            <h4>Order Information</h4>
            <p><strong>Order Code:</strong> {{ $order->order_code}}</p>
            <p><strong>Status:</strong>
        @if ($order->status == 'pending')
            <span class="badge bg-warning text-dark">Pending</span>
        @elseif($order->status == 'success')
            <span class="badge bg-success">Success</span>
        @else
            <span class="badge bg-danger">Canceled</span>
        @endif
            </p>
        </div>

        <div class="table-responsive">
            <h4>Products</h4>
            <table class="table table-bordered text-center align-middle">
                <thead class="thead-dark bg-dark text-white">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->product as $index => $product)
                    <tr>
                        <td>{{ $index + 1}}</td>
                        <td>{{ $product->name}}</td>
                        <td>{{ $product->pivot->qty}}</td>
                        <td>Rp {{ number_format($product->pivot->price, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($product->pivot->qty * $product->pivot->price, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-end mt-4">
            <a href="{{ route('orders.index')}}" class="btn btn-secondart"> backto Orders</a>
        </div>
    </div>
</div>
@endsection