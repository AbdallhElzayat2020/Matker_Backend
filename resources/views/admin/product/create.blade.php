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
                        <label for="name">Name</label>
                        <input name="title" placeholder="Name" value="{{ old('name') }}" id="name" type="text"
                            class="form-control">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <input name="description" placeholder="description" value="{{ old('description') }}" id="name"
                            type="text" class="form-control">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload">
                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
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
