@extends('admin.layouts.master')

@push('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Investment Details</h3>
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
                                <td>Plan Name</td>
                                <td>{{ $plan->name }} Plan</td>
                            </tr>
                            <tr>
                                <td>Plan Price</td>
                                <td>${{ $plan->amount }}</td>
                            </tr>

                            <tr>
                                <td>Plan Days</td>
                                <td>{{ $plan->duration }} Days</td>
                            </tr>

                            <tr>
                                <td>Plan Roi</td>
                                <td>{{ $plan->roi }}%</td>
                            </tr>

                            <tr>
                                <td>Plan Terms</td>
                                <td>{{ $plan->terms }}</td>
                            </tr>

                            <tr>
                                <td>Copy Expert Name</td>
                                <td>{{ $currentCopyExpert }}</td>
                            </tr>

                            <tr>
                                <td>Plan Commission</td>
                                <td>{{ $plan->commission }}%</td>
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
                                    <td>Investment Status</td>
                                    <td>
                                        <form action="{{ route('admin.transactions.updateStatus', $transaction->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <select name="status" class="form-control">
                                                    <option value="processing"
                                                        {{ $transaction->status == 'processing' ? 'selected' : '' }}>Select
                                                        Investment Status</option>

                                                    @if ($transaction->status == 'active')
                                                        <option value="completed"
                                                            {{ $transaction->status == 'completed' ? 'selected' : '' }}>
                                                            Mark as
                                                            Completed</option>

                                                        <option value="cancelled"
                                                            {{ $transaction->status == 'cancelled' ? 'selected' : '' }}>
                                                            Cancelled
                                                            Investment</option>
                                                    @endif

                                                    @if ($transaction->status == 'processing')
                                                        <option value="active"
                                                            {{ $transaction->status == 'active' ? 'selected' : '' }}>
                                                            Activate Investment</option>

                                                        <option value="cancelled"
                                                            {{ $transaction->status == 'cancelled' ? 'selected' : '' }}>
                                                            Cancelled
                                                            Investment</option>
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
