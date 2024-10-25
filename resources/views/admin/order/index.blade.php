@extends('admin.master')

@section('title')
    <title>Order </title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Order</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('order.create') }}" class="btn btn-primary">Add Order</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Views</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
