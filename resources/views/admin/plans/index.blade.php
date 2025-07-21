@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('admin.plans.create') }}" class="btn btn-primary">Create New Plan</a>

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
                                        <th>Price</th>
                                        <th>Min</th>
                                        <th>Max</th>
                                        <th>Roi</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Owner</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Plans as $Plan)
                                        <tr>
                                            <td>{{ $Plan->name }}</td>
                                            <td>${{ $Plan->amount }}</td>
                                            <td>{{ $Plan->min }}</td>
                                            <td>{{ $Plan->max }}</td>
                                            <td>{{ $Plan->roi }}%</td>
                                            <td>{{ $Plan->duration }} Days</td>
                                            <td>{{ $Plan->terms }}</td>
                                            <td>{{ $Plan->status }}</td>
                                            <td>
                                                <a href="{{ route('admin.plans.edit', $Plan->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('admin.plans.destroy', $Plan->id) }}" method="POST"
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
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endpush
