@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Deposit Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">

                          
                            <tr> 
                                <td>User</td>
                                <td>{{ $transaction->user->name  ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td>${{ $transaction->amount }}</td>
                            </tr>

                           
                            <tr>
                                <td>Payment Type</td>
                                <td>{{ $paymentOption->name }}</td>
                            </tr>
                            
                            <tr>
                                <td>Type</td>
                                <td>{{ $transaction->transaction_type }}</td>
                            </tr>

                            <tr>
                                <td>Reference</td>
                                <td>#{{ $transaction->reference_id }}</td>
                            </tr>
                          
                         
                           
                            <tr>
                                <td>Date</td>
                                <td>{{ $transaction->created_at }}</td>
                            </tr>

                             <tr>
                                <td>Status</td>
                                <td>{{ $transaction->status }}</td>
                            </tr>

                            <tr>
                                <td>Deposit Status</td>
                                <td>
                                    <form action="{{ route('admin.transactions.deposit.updateStatus', $transaction->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <select name="status" class="form-control">
                                                <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Select Status</option>
                                                    <option value="approved" {{ $transaction->status == 'approved' ? 'selected' : '' }}>Approve Deposit</option>
                                                    {{-- <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option> --}}
                                                    <option value="declined" {{ $transaction->status == 'declined' ? 'selected' : '' }}>Declined</option>
                                              
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Status</button>
                                    </form>
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
@endpush
