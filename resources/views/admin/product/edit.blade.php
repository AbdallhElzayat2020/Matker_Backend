{{--@extends('admin.layouts.master');--}}
{{--@section('title')--}}
{{--    Update Product Page--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    <section class="section">--}}
{{--        <div class="section-header">--}}
{{--            <h1>Update Product Page</h1>--}}
{{--        </div>--}}

{{--        <div class="card card-primary">--}}
{{--            <div class="card-header">--}}
{{--                <h4>Update Product</h4>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <form enctype="multipart/form-data" action="{{ route('admin.product.update', $product->id)}}"--}}
{{--                      method="POST">--}}
{{--                    @method('PUT')--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="title">Name</label>--}}
{{--                        <input name="title" required placeholder="title" value="{{ $product->title}}" id="title"--}}
{{--                               type="text" class="form-control">--}}
{{--                        @error('title')--}}
{{--                        <p class="text-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="description">Description</label>--}}
{{--                        <input name="description" required placeholder="description" value="{{ $product->description }}"--}}
{{--                               id="description" type="text" class="form-control">--}}
{{--                        @error('description')--}}
{{--                        <p class="text-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="price">price</label>--}}
{{--                        <input name="price" required placeholder="price" value="{{ $product->price }}"--}}
{{--                               id="price" type="text" class="form-control">--}}
{{--                        @error('price')--}}
{{--                        <p class="text-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="product">المتبقي بالمخزون</label>--}}
{{--                        <input name="product" required placeholder="المتبقي بالمخزون" value="{{ $product->product }}"--}}
{{--                               id="product"--}}
{{--                               type="number" class="form-control">--}}
{{--                        @error('product')--}}
{{--                        <p class="text-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="content">Image</label>--}}
{{--                        <div id="image-preview" class="image-preview">--}}
{{--                            <label for="image-upload" id="image-label">Choose File</label>--}}
{{--                            <input type="file" name="image" id="image-upload">--}}
{{--                        </div>--}}
{{--                        --}}{{--                        <input type="text" hidden name="id" value="{{ $product->id }}">--}}
{{--                        @error('image')--}}
{{--                        <p class="text-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="category_id">Category</label>--}}
{{--                        <select class="form-control" name="category_id" id="category_id">--}}
{{--                            @foreach ($categories as $category)--}}
{{--                                <option value="{{ $category->id }}"--}}
{{--                                    {{ $category->id == $product->category_id ? 'selected' : '' }}>--}}
{{--                                    {{ $category->name }}--}}
{{--                                </option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        @error('category_id')--}}
{{--                        <p class="text-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-primary" type="submit">Update</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
{{--@section('js')--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('.image-preview').css({--}}
{{--                "background-image": "url({{ asset($product->image) }}",--}}
{{--                "background-size": "cover",--}}
{{--                "background-position": "center",--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
6

@extends('admin.layouts.master')
@section('title', 'Update Product Page')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update Product Page</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Product</h4>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.product.update', $product->id) }}"
                      method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input name="title" required placeholder="Title" value="{{ $product->title }}" id="title"
                               type="text" class="form-control">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" required placeholder="Description" value="{{ $product->description }}"
                               id="description" type="text" class="form-control">
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" required placeholder="Price" value="{{ $product->price }}" id="price"
                               type="text" class="form-control">
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product">Stock Quantity</label>
                        <input name="product" required placeholder="Stock Quantity" value="{{ $product->product }}"
                               id="product" type="number" class="form-control">
                        @error('product')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Images</label>
                        <div id="image-preview" class="image-preview">
                            @php
                                $imgPaths = json_decode($product->image, true);
                            @endphp
                            @if($imgPaths)
                                @foreach($imgPaths as $imgPath)
                                    <img src="{{ asset($imgPath) }}" alt="Product Image"
                                         style="max-width: 100%; height: auto; margin-bottom: 10px;">
                                @endforeach
                            @else
                                <p>No images uploaded</p>
                            @endif
                        </div>
                        <input type="file" name="image[]" id="image-upload" multiple>
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#image-upload').change(function () {
                var input = $(this)[0];
                if (input.files) {
                    $('#image-preview').empty(); // Clear previous images
                    Array.from(input.files).forEach(file => {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#image-preview').append('<img src="' + e.target.result + '" style="max-width: 100%; height: auto; margin-bottom: 10px;" />');
                        };
                        reader.readAsDataURL(file);
                    });
                }
            });
        });
    </script>
@endsection
