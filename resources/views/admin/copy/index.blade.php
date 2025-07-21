@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('admin.copy.create') }}" class="btn btn-primary">Create New Copy Expert</a>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Win</th>
                                        <th>Loss</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($copy as $Plan)
                                        <tr>
                                            <td>{{ $Plan->profile_name }}</td>
                                            <td>{{ $Plan->win_count }}%</td>
                                            <td>{{ $Plan->loss_count }}%</td>
                                            <td>{{ $Plan->specialty }}</td>

                                            <td>{{ $Plan->created_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.copy.edit', $Plan->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('admin.copy.destroy', $Plan->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.row -->
    </section>

@endpush
