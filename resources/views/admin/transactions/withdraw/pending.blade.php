@extends('admin.layouts.master')

@push('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{ $page_title }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->user->name ?? 'N/A' }}</td>
                                            <td>${{ $transaction->amount }}</td>
                                            <td>{{ $transaction->transaction_type }}</td>
                                            <td>{{ $transaction->user->email ?? 'N/A' }}</td>
                                            <td>{{ $transaction->status }}</td>
                                            <td>{{ $transaction->created_at }}</td>
                                            <td><a
                                                    href="{{ route('admin.transactions.withdraw.show', $transaction->id) }}">View</a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endpush
