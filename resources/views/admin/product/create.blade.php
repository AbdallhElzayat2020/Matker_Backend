@extends('admin.layouts.master');
@section('title')
    Create Category Page
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Category Page</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Category</h4>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.product.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">اسم المنتج</label>
                        <input name="title" required placeholder="title" value="{{ old('title') }}" id="title"
                               type="text" class="form-control">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">وصف المنتج</label>
                        <input name="description" required placeholder="description" value="{{ old('description') }}"
                               id="description" type="text" class="form-control">
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">السعر</label>
                        <input name="price" required placeholder="price" value="{{ old('price') }}" id="description"
                               type="number" class="form-control">
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product">المتبقي بالمخزون</label>
                        <input name="product" required placeholder="product" value="{{ old('product') }}" id="description"
                               type="number" class="form-control">
                        @error('product')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">صورة المنتج</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" required name="image" id="image-upload">
                        </div>
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category_id">قئة المنتج</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">انشاء</button>
                </form>
            </div>
        </div>
    </section>
@endsection
{{--
@section('js')
    <script>
        $(document).ready(function() {
            $('.image-preview').css({
                "background-image": "url({{ asset($user->image) }}",
                "background-size": "cover",
                "background-position": "center",
            });
        });
    </script>
@endsection --}}
