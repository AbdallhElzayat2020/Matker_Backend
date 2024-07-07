@php
    $products = \App\Models\Product::paginate(8); // Ensure this matches the controller
@endphp
@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <h1 class="text-center my-4">اهم المنتجات</h1>
        <div class="row">
            @foreach ($products as $key => $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm rounded">
                        <a class="text-decoration-none" href="{{ route('product-details', $product->id) }}">
                            <img class="card-img-top" src="{{$product->image}}" alt="{{ $product->title }}"
                                 style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><span
                                        style="font-size: 18px;">اسم المنتج: {{$product->title}}</span></h5>
                                <h6 class="card-subtitle text-muted">سعر المنتج: {{$product->price}}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex ">
            {{ $products->links() }}
        </div>
    </div>
@endsection
