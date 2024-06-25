@extends('admin.layouts.master')
@section('title')
    Categories Page
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Categories Setting</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>All Categories</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create New
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="tab-content tab-bordered" id="myTab3Content">
                    @foreach ($categories as $category)
                        <div class="tab-pane fade show" id="" role="tabpanel" aria-labelledby="home-tab2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Name</th>
                                                <th>Language</th>
                                                <th>In Nav</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>asdasd</td>
                                                <td>dassad</td>
                                                <td>dsadfsd</td>
                                                <td>
                                                    dfsfsdfsdfd
                                                </td>
                                                <td>
                                                    fsdfdsfdsfds
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.category.edit', $category->id) }}">
                                                        <i class="fas fa-edit" style="font-size:15px"></i></a>
                                                    <a class="btn btn-danger delete-item"
                                                        href="{{ route('admin.category.destroy', $category->id) }}">
                                                        <i class="fas fa-trash" style="font-size:15px"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
    </section>
@endsection
{{-- @section('js')
    <script>
        @foreach ($languages as $language)
            $(document).ready(function() {
                $("#table-{{ $language->lang }}").DataTable({
                    "columnDefs": [{
                        "sortable": false,
                        "targets": [2, 3]
                    }]
                });
            });
        @endforeach
    </script>
@endsection --}}
