@extends('admin.layouts.master')
@section('title')
    Products Page
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Products Setting</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>All Products</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>اسم المنتج</th>
                                <th>صورة المنتج</th>
                                <th>فئة المنتج</th>
                                <th>وصف المنتج</th>
                                <th>السعر</th>
                                <th>المتبقي بالمخزون</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td><img src="{{ asset($product->image) }}" alt="{{ $product->title }}"
                                             width="70" height="50">
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->product }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Action buttons">
                                            <a class="btn btn-primary"
                                               href="{{ route('admin.product.edit', $product->id) }}">
                                                <i class="fas fa-edit" style="font-size:15px"></i>
                                            </a>
                                            <a class="btn btn-danger delete-item"
                                               href="{{ route('admin.product.destroy', $product->id) }}">
                                                <i class="fas fa-trash" style="font-size:15px"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
