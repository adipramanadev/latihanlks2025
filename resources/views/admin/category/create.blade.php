@extends('admin.master')

@section('title')
    <title>Add Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add Page</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Page</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td>Name</td>
                                            <td><input type="text" name="name" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><button class="btn btn-primary" type="submit">Save</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
