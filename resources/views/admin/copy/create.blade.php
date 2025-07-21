@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Create Copy Expert Profile</h3>

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

                <form action="{{ route('admin.copy.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Profile Name -->
                            <div class="form-group">
                                <label for="profile_name">Name</label>
                                <input type="text" class="form-control" name="profile_name" required>
                            </div>
                
                            <!-- Bio -->
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" name="bio" id="bio" required></textarea>
                            </div>
                
                            <!-- Specialty (Duration) -->
                            <div class="form-group">
                                <label for="specialty">Duration</label>
                                <select name="specialty" class="form-control" required>
                                    <option selected disabled>Select Duration</option>
                                    <option value="Daily">One Day</option>
                                    <option value="Weekly">A week</option>
                                    <option value="Monthly">One Month</option>
                                    <option value="Semi Quarterly">Semi Quarterly</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Semi Annual">Semi Annual</option>
                                    <option value="One Year">One Year</option>
                                </select>
                            </div>
                        </div>
                
                        <div class="col-md-6">
                            <!-- Win Percentage -->
                            <div class="form-group">
                                <label for="win_count">Win Percentage (%)</label>
                                <input type="number" class="form-control" name="win_count" id="win_count" required>
                            </div>
                
                            <!-- Loss Percentage -->
                            <div class="form-group">
                                <label for="loss_count">Loss Percentage (%)</label>
                                <input type="number" class="form-control" name="loss_count" id="loss_count" required>
                            </div>
                
                            <!-- Profile Image -->
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" name="image" id="image" class="form-control" required>
                            </div>
                        </div>
                    </div>
                
                    <!-- Form Submit -->
                    <div class="box-footer">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Create Copy Expert</button>
                        </div>
                    </div>
                </form>
                
            </div>

        </div>

    </section>
    <!-- /.box -->

   
@endpush
