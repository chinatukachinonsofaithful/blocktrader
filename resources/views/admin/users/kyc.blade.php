@extends('admin.layouts.master')

@push('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Balance</th>
                                            <th>Phone</th>
                                            <th>Kyc</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userskyc as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>${{ amount($user->balance) }}</td>
                                                <td>{{ $user->phone }}</td>

                                                <?php
                                                if($user->kyc_status == 2){
                                            ?>
                                                <td>Approved</td>
                                                <?php
                                                } else {
                                            ?>
                                                <td>Pending</td>
                                                <?php
                                                }
                                            ?>

                                                <td>
                                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                                        class="btn btn-warning">Edit</a>

                                                    <form action="{{ route('admin.users.destroy', $user->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Deleting a user will delete all Plans associated with this account, Are you sure?')">Delete</button>
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
        </div>
            <!-- /.row -->
    </section>

@endpush
