@extends('admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Messages</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    @php $displayId = 1; @endphp
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Messages</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message as $item)
                                        <tr>
                                            <td>{{ $displayId++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone_number }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->message }}</td>
                                            <td><a href="/admin/message/{{ $item->id }}/delete"
                                                    class="btn btn-danger">Delete</a></< /td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
