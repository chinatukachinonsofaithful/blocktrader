@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Create Plan</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Validation Error Display -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.payments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <!-- Short Name -->
                            <div class="form-group">
                                <label for="short_name">Short Name (e.g., BTC, ETH)</label>
                                <input type="text" class="form-control" name="short_name" id="short_name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Wallet Address -->
                            <div class="form-group">
                                <label for="website_address">Wallet Address</label>
                                <input type="text" class="form-control" name="website_address" id="website_address" required>
                            </div>
                            <!-- Icon Upload -->
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="file" name="icon" id="icon" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Payment</button>
                    </div>
                </form>
                
            </div>

    </section>
    <!-- /.box -->


@endpush
