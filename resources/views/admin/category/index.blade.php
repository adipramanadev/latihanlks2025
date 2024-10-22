@extends('admin.master')

@section('title')
    <title>Category Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category Page</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    {{-- //jika session success --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <span>{{ 'success' }}</span>
                            </div>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Category Name</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($category as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', $item->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{ route('category.destroy', $item->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Data Tidak Ada</td>
                                            </tr>
                                        @endforelse
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
