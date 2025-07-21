@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Create Investment History</h3>

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

                <form action="{{ route('admin.history.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_id">User </label>
                                <select name="user_id" class="form-control">
                                    <option selected disabled>Select User</option>
                                    @foreach ($users as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }} - {{ $value->email }} (${{ $value->balance }})
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <!-- Plan Price in USD -->
                            <div class="form-group">
                                <label for="plan_id">Plan Package</label>
                                <select name="plan_id" class="form-control">
                                    <option selected disabled>Select Plan Package</option>
                                    @foreach ($plans as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }} - Min:${{ $value->amount }}
                                            Max:${{ $value->max }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>




                            <!-- Plan Price in USD -->
                            <div class="form-group">
                                <label for="status">Status </label>
                                <select name="status" class="form-control">

                                    <option selected disabled>Select Status</option>
                                    <option value="completed">Completed</option>
                                    <option value="processing">Processing</option>
                                    <option value="active">Active</option>
                                </select>
                            </div>





                        </div>


                        <div class="col-md-6">


                            <div class="form-group">
                                <label for="amount">Amount (in USD)</label>
                                <input type="text" class="form-control" name="amount" id="amount">
                            </div>

                            <div class="form-group">
                                <label for="total_return">Profit (in USD)</label>
                                <input type="text" class="form-control" name="total_return" id="total_return">
                            </div>

                            <div class="form-group">
                                <label for="amount">Date</label>
                                <input type="date" class="form-control" name="created_at" id="created_at">
                            </div>



                        </div>

                    </div>
                    <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Create Investment History</button>
                </div>
            </div>
            </form>
        </div>

    </section>
    <!-- /.box -->


@endpush
