@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Settings</h3>

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
                <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="site_name">Website Name</label>
                                <input type="text" name="website_name" id="website_name" class="form-control"
                                    value="{{ old('website_name', $settings['website_name'] ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="official_phone">Website Email</label>
                                <input type="email" name="official_email" id="official_email" class="form-control"
                                    value="{{ old('official_email', $settings['official_email'] ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="official_phone">Website Address</label>
                                <input type="text" name="official_address" id="official_address" class="form-control"
                                    value="{{ old('official_address', $settings['official_address'] ?? '') }}" required>
                            </div>


                          





                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">



                            <div class="form-group">
                                <label for="official_phone">Website Phone</label>
                                <input type="text" name="official_phone" id="official_phone" class="form-control"
                                    value="{{ old('official_phone', $settings['official_phone'] ?? '') }}" required>
                            </div>


                            <div class="form-group">
                                <label for="live_chat">Website Livechat</label>
                                <input type="text" name="live_chat" id="live_chat" class="form-control"
                                    value="{{ old('live_chat', $settings['live_chat'] ?? '') }}" required>
                            </div>


                            <div class="form-group">
                                <label for="site_logo">Website Logo</label>
                                <input type="file" name="site_logo" id="site_logo" class="form-control">
                                @if (isset($settings['site_logo']))
                                    <img src="{{ image_url(get_settings('site_logo')) }}" alt="Site Logo"
                                        style="max-width: 150px; margin-top: 10px;">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="loan_features">Loan Features ({{ old('loan_features', $settings['loan_features'] ?? '') }})</label>
                                <select class="form-control" id="loan_features" name="loan_features" required>
                                    <!-- Display current status or a default placeholder -->
                                    <option value="" disabled {{ empty(old('loan_features', $settings['loan_features'] ?? '')) ? 'selected' : '' }}>
                                        Select Status
                                    </option>
                                    <option value="on" {{ old('loan_features', $settings['loan_features'] ?? '') == 'on' ? 'selected' : '' }}>On</option>
                                    <option value="off" {{ old('loan_features', $settings['loan_features'] ?? '') == 'off' ? 'selected' : '' }}>Off</option>
                                </select>
                            </div>
                            

                        </div>

                        <!-- /.col -->
                        <div class="box-footer">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Update Settings</button>
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
