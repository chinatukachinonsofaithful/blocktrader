@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Create  Plan</h3>

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

                <form action="{{ route('admin.plans.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <!-- Plan Name -->
                            <div class="form-group">
                                <label for="Plan_name">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <!-- Plan Price in USD -->
                          <div class="form-group">
                            <label for="Plan_price_usd">ROI</label>
                            <input type="number" class="form-control" name="roi" id="roi">
                        </div>

                            <!-- Plan Price in USD -->
                            <div class="form-group">
                                <label for="Plan_price_usd">Duration </label>
                                <select name="duration" class="form-control"  >
                                   
                                    <option selected disabled>Select Duration</option>
                                    <option value="1">One Day</option>
                                    <option value="7">A week</option>
                                    <option value="30">One  Month</option>
                                    <option value="45">Semi Quarterly</option>
                                    <option value="90">Quarterly</option>
                                    <option value="180">Semi Annual</option>
                                    <option value="365">One  Year</option>
                            </select>
                            </div>



                            <!-- Plan Price in USD -->
                            <div class="form-group">
                                <label for="Plan_price_usd">Capital </label>
                                <select name="capital" class="form-control" >
                                   
                                    <option selected disabled>Select Capital</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                            </select>
                            </div>


                        </div>


                        <div class="col-md-6">
                             <!-- Plan Price in USD -->
                             <div class="form-group">
                                <label for="Plan_price_usd">Price (in USD)</label>
                                <input type="text" class="form-control" name="amount" id="amount">
                            </div>


                             <!-- Plan Price in USD -->
                             <div class="form-group">
                                <label for="Plan_price_usd">Min (in USD)</label>
                                <input type="number" class="form-control" name="min" id="min">
                            </div>

                             <!-- Plan Price in USD -->
                             <div class="form-group">
                                <label for="Plan_price_usd">Max (in USD)</label>
                                <input type="number" class="form-control" name="max" id="max">
                            </div>

                           
                            <!-- Category selection -->
                            <div class="form-group">
                                <label for="terms">Terms Category</label>
                                <select name="terms" class="form-control" >
                                   
                                        <option  selected disabled>Select Terms Type</option>
                                        <option value="long">Long Terms</option>
                                        <option value="short">Short Terms</option>
                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="commission">Commission</label>
                                <input type="text" class="form-control" name="commission" required>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Create Plan</button>
                </div>
            </div>
            </form>
        </div>

    </section>
    <!-- /.box -->

    
@endpush
