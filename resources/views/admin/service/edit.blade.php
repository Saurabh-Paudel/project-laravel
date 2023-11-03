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
                            <h3 class="card-title">Edit <b>{{ $service->name }}</b> Service</h3>
                        </div>
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="/admin/service/{{ $service->id }}/update" method="POST" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <label for="image">Image (1x1)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choose
                                                file</label>

                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img class="img-fluid bg-light  p-2 mx-auto mt-2" src="{{ $service->image }}"
                                        style="width: 100px; height: 80px;">
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
