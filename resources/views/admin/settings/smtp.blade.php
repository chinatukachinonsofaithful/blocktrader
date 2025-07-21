@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">SMTP Settings</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        <form action="{{ route('admin.smtp-settings.update') }}" method="POST">
            @csrf
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="mail_driver">Mail Driver (sendmail, smtp)</label>
                                <input type="text" name="mail_mailer" id="mail_mailer" class="form-control" value="{{ old('mail_mailer', $mail_mailer) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="mail_host">Mail Host</label>
                                <input type="text" name="mail_host" id="mail_host" class="form-control" value="{{ old('mail_host', $mail_host) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="mail_port">Mail Port (465, 567)</label>
                                <input type="number" name="mail_port" id="mail_port" class="form-control" value="{{ old('mail_port', $mail_port) }}" required>
                            </div>


                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="mail_username">Mail Username</label>
                                <input type="text" name="mail_username" id="mail_username" class="form-control" value="{{ old('mail_username', $mail_username) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="mail_password">Mail Password</label>
                                <input type="text" name="mail_password" id="mail_password" class="form-control" value="{{ old('mail_password', $mail_password) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="mail_encryption">Mail Encryption (ssl,tls)</label>
                                <input type="text" name="mail_encryption" id="mail_encryption" class="form-control" value="{{ old('mail_encryption', $mail_encryption) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="mail_from_address">Mail From Address</label>
                                <input type="email" name="mail_from_address" id="mail_from_address" class="form-control" value="{{ old('mail_from_address', $mail_from_address) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="mail_from_name">Mail From Name</label>
                                <input type="text" name="mail_from_name" id="mail_from_name" class="form-control" value="{{ old('mail_from_name', $mail_from_name) }}" required>
                            </div>

                        </div>

                        <!-- /.col -->
                        <div class="box-footer">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                            </div>
                        </div>

                    </div>

                </form>
                    <!-- /.row -->
            </div>
            <!-- /.box-body -->


        </div>

    </section>
    <!-- /.box -->
@endpush
