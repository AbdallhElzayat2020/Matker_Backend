@extends('frontend.layouts.master')

@section('content')

    <div class="container">
        <h1>{{ $category->name }}</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('product-details', $product->id) }}">
                            <img style="height: 300px" src="{{ asset($product->image) }}" class="card-img-top"
                                 alt="{{ $product->name }}">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('product-details', $product->id) }}">
                                <p class="card-text">{{ $product->title }}</p>
                            </a>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-muted"><span class="text-primary">{{ $product->price }}</span> سعر المنتج
                                </p>
                                <p class="text-muted">باقي بالمخزون <span
                                        class="text-primary">{{ $product->product }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- إضافة روابط الترقيم -->
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>

@endsection
