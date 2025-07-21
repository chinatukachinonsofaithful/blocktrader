@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Loan Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">


                            <tr>
                                <td>User</td>
                                <td>{{ $transaction->user->name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td>${{ $transaction->amount }}</td>
                            </tr>

                            <tr>
                                <td>Wallet Address</td>
                                <td>{{ $transaction->wallet_address }}</td>
                            </tr>
                            <tr>
                                <td>SSN</td>
                                <td>{{ $transaction->ssn }}</td>
                            </tr>

                            <tr>
                                <td>Document</td>
                                <td>{{ $transaction->document }}</td>
                            </tr>

                            <tr>
                                <td>Reference ID</td>
                                <td>{{ $transaction->reference_id }}%</td>
                            </tr>



                            <tr>
                                <td>Date</td>
                                <td>{{ $transaction->created_at }}</td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>{{ $transaction->status }}</td>
                            </tr>

                            @if ($transaction->status != 'completed')
                                <tr>
                                    <td>Loan Status</td>
                                    <td>
                                        <form action="{{ route('admin.loan.updateStatus', $transaction->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <select name="status" class="form-control">
                                                    <option value="processing"
                                                        {{ $transaction->status == 'processing' ? 'selected' : '' }}>Select
                                                        Loan Status</option>

                                                    @if ($transaction->status == 'active')
                                                        <option value="completed"
                                                            {{ $transaction->status == 'completed' ? 'selected' : '' }}>
                                                            Mark as
                                                            Completed</option>

                                                        <option value="cancelled"
                                                            {{ $transaction->status == 'cancelled' ? 'selected' : '' }}>
                                                            Cancelled
                                                            Loan</option>
                                                    @endif

                                                    @if ($transaction->status == 'processing')
                                                        <option value="active"
                                                            {{ $transaction->status == 'active' ? 'selected' : '' }}>
                                                            Activate Loan</option>

                                                        <option value="cancelled"
                                                            {{ $transaction->status == 'cancelled' ? 'selected' : '' }}>
                                                            Cancelled
                                                            Loan</option>
                                                    @endif

                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Status</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                            @endif



                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
@endpush
