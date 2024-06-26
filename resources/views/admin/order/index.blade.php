@extends('admin.layouts.master')
@section('title')
    Orders Page
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Orders Setting</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>All Orders</h4>
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
                                    <th>Client Name</th>
                                    <th>Phone Number</th>
                                    <th>Adress</th>
                                    <th>Order History</th>
                                    <th>Number Offer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->number }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->offer }}</td>
                                        <td>
                                            <a class="btn btn-danger delete-item"
                                                href="{{ route('admin.order.destroy', $order->id) }}">
                                                <i class="fas fa-trash" style="font-size:15px"></i>
                                            </a>
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
