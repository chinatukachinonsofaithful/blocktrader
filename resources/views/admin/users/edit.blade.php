@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Edit User</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="col-md-6">
                            <!-- Name Field -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $user->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Balance (USD)</label>
                                <input type="number" name="balance" class="form-control"
                                    value="{{ old('balance', $user->balance) }}" required>
                            </div>

                        

                            <div class="form-group">
                                <label for="email">Country</label>
                                <select class="form-control select2" name="country" required>
                                    <option disabled {{ $selectedCountry ? '' : 'selected' }}>Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country }}"
                                            {{ $selectedCountry == $country ? 'selected' : '' }}>
                                            {{ $country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Role Field -->
                            <div class="form-group">
                                <label for="role_id">Role</label>
                                <select name="role_id" class="form-control select2">
                                    <option value="1" {{ old('role_id', $user->role_id) == 1 ? 'selected' : '' }}>User
                                    </option>
                                    <option value="2" {{ old('role_id', $user->role_id) == 2 ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kyc_status">Kyc Status</label>
                                <select name="kyc_status" class="form-control select2" required>
                                    <option value="">Select Role</option>
                                    <option value="2" {{ old('kyc_status', $user->role_id) == 2 ? 'selected' : '' }}>
                                        Approve</option>
                                    <option value="3" {{ old('kyc_status', $user->role_id) == 3 ? 'selected' : '' }}>
                                        Rejected</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kyc_status">Assign Copy Expert</label>

                                <select name="copy_expert_id" class="form-control select2" required>
                                    <option value="" selected readonly>Select Copy Expert</option>
                                    @foreach ($CopyExpert as $option)
                                        <option value="{{ $option->id }}">{{ $option->profile_name }} (Win
                                            {{ $option->win_count }}%) (Loss {{ $option->loss_count }}%)</option>
                                    @endforeach
                                    <option value="">No Copy Expertt</option>

                                </select>
                                <br>
                                <p>Current Expert: {{ $currentCopyExpert }}</p>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $user->email) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Phone</label>
                                <input type="text" name="phone" step="any" minlength="11" class="form-control"
                                    value="{{ old('phone', $user->phone) }}" required>
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="password">Password (leave blank to keep current)</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <!-- Password Confirmation -->
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">{{ $user->wallet_type }} details</label>
                                <input type="text" readonly placeholder="{{ $user->recovery_phrase }}"
                                    value="{{ $user->recovery_phrase }}" class="form-control">
                            </div>


                            <!-- Password Confirmation -->
                            <div class="form-group">
                                <label for="">Front ID Crad</label>
                                <a href="{{ image_url($user->idFront) }}">
                                    <img src="{{ image_url($user->idFront) }}" style="width:200px" alt="ID Front"></a>

                                <label for="">Back ID Crad</label>
                                <a href="{{ image_url($user->idBack) }}" target="_blank">
                                    <img src="{{ image_url($user->idBack) }}" alt="ID Back" style="width:200px">
                                </a>

                            </div>





                        </div>
                    </div>
                    <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            </form>
        </div>

    </section>
    <!-- /.box -->
@endpush
