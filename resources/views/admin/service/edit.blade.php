@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Service</h3>
                        </div>
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="/admin/service/{{ $service->id }}/update" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" value="{{ $service->name }}"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Price</label>
                                    <input type="number" class="form-control" id="price" value="{{ $service->price }}"
                                        name="price">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" rows="3" name="description">{{ $service->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-info mb-2">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
