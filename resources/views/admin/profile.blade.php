@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{ isset($user) ? 'Edit User' : 'Create User' }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.profile.update') }}"
                    method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <div class="col-md-6">

                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="name">Email</label>
                               <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" name="password" class="form-control">
                                <small class="text-muted">Leave blank if you don't want to change the password.</small>
                            </div>

                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>



                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->


                    </div>
                    <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </div>
            </form>
        </div>

    </section>
    <!-- /.box -->
@endpush
