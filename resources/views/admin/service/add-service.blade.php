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
                            <h3 class="card-title">Add Service</h3>
                        </div>
                        <div class="container">

                            <form action="/admin/service/adding-service" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Service Name:</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Enter Service Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Price:</label>
                                    <input type="number" class="form-control" id="name" placeholder="Enter the price"
                                        name="price">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Enter Description" name="description"></textarea>
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
                                </div>

                                <button type="submit" class="btn btn-primary mb-2">
                                    Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
