@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Copy Expert</h3>

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

                <form action="{{ route('admin.copy.update', $copy->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Copy Name -->
                            <div class="form-group">
                                <label for="profile_name">Name</label>
                                <input type="text" class="form-control" name="profile_name"
                                    value="{{ old('profile_name', $copy->profile_name) }}">
                            </div>

                            <!-- Bio -->
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" name="bio" id="bio">{{ old('bio', $copy->bio) }}</textarea>
                            </div>

                            <!-- Specialty (Duration) -->
                            <div class="form-group">
                                <label for="specialty">Duration</label>
                                <select name="specialty" class="form-control">
                                    <option value="" disabled>Select Duration</option>
                                    <option value="Daily"
                                        {{ old('specialty', $copy->specialty) == 'Daily' ? 'selected' : '' }}>One Day
                                    </option>
                                    <option value="Weekly"
                                        {{ old('specialty', $copy->specialty) == 'Weekly' ? 'selected' : '' }}>A week
                                    </option>
                                    <option value="Monthly"
                                        {{ old('specialty', $copy->specialty) == 'Monthly' ? 'selected' : '' }}>One Month
                                    </option>
                                    <option value="Semi Quarterly"
                                        {{ old('specialty', $copy->specialty) == 'Semi Quarterly' ? 'selected' : '' }}>Semi
                                        Quarterly</option>
                                    <option value="Quarterly"
                                        {{ old('specialty', $copy->specialty) == 'Quarterly' ? 'selected' : '' }}>Quarterly
                                    </option>
                                    <option value="Semi Annual"
                                        {{ old('specialty', $copy->specialty) == 'Semi Annual' ? 'selected' : '' }}>Semi
                                        Annual</option>
                                    <option value="One Year"
                                        {{ old('specialty', $copy->specialty) == 'One Year' ? 'selected' : '' }}>One Year
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Win Percentage -->
                            <div class="form-group">
                                <label for="win_count">Win Percentage (%)</label>
                                <input type="number" class="form-control" name="win_count"
                                    value="{{ old('win_count', $copy->win_count) }}">
                            </div>

                            <!-- Loss Percentage -->
                            <div class="form-group">
                                <label for="loss_count">Loss Percentage (%)</label>
                                <input type="number" class="form-control" name="loss_count"
                                    value="{{ old('loss_count', $copy->loss_count) }}">
                            </div>

                            <!-- Profile Image -->
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                @if ($copy->image)
                                    <p>Current Image: <img src="{{ image_url($copy->image) }}" alt="Profile Image"
                                            width="100"></p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Form Submit -->
                    <div class="box-footer">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Copy Expert</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.box-body -->

        </div>

    </section>
    <!-- /.box -->

@endpush
