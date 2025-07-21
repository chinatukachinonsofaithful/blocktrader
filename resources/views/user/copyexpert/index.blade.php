@extends('layout.user')
@push('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- HEADER -->
        <div class="header bg-dark pb-5">
            <div class="container-fluid">

                <!-- Body -->
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle text-secondary">
                                Verified
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title text-white">
                                All Copy Experts
                            </h1>

                        </div>
                    </div><!-- / .row -->
                </div> <!-- / .header-body -->

            </div>
        </div> <!-- / .header -->

        <!-- CARDS -->
        <div class="container-fluid mt-n6">


            <div class="row">
                <div class="col-12">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                          
                            </div>
                        </div> <!-- / .row -->
                    </div>


                </div>
            </div>

            {{-- <div class="card-header">

                    <!-- Search -->
                    <form>
                        <div class="input-group input-group-flush input-group-merge input-group-reverse">
                            <input class="form-control list-search" type="search" placeholder="Search">
                            <span class="input-group-text">
                                <i class="fe fe-search"></i>
                            </span>
                        </div>
                    </form>

                </div> --}}

            <style>
                .border-bottom {
                    border-color: #e9ecef;
                }

                .py-2 {
                    padding-top: 0.5rem;
                    padding-bottom: 0.5rem;
                }

                .avatar {
                    width: 50px;
                    height: 50px;
                }

                .me-2 {
                    margin-right: 0.5rem;
                }
            </style>

            <div class="row">
                <!-- Header Row -->

                <!-- Profiles -->
                @foreach ($copyexperts as $value)
                    <div class="col-12 col-md-4">
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <!-- Profile Image -->
                            <div class="d-flex align-items-center">
                                <a href="{{ url('user/copy-expert/' . $value->id) }}" class="avatar avatar-sm me-2">
                                    <img id="avatar" alt="avatar" data-helpers--file-upload-target="avatar"
                                        src="{{ image_url($value->image ?? 'no-picture.png') }}"
                                        class="avatar-img rounded-circle" />
                                </a>
                            </div>

                            <!-- Name -->
                            <div class="flex-grow-1">
                                <span>{{ $value->profile_name }}</span>
                            </div>

                            <!-- Bio -->
                            <div class="flex-grow">
                                <span>Win {{ $value->win_count }}%</span>
                            </div>

                            <!-- Action -->
                            <div>
                                <a href="{{ url('user/copy-expert/' . $value->id) }}"
                                    class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div> <!-- / .row -->


    <!-- / .main-content -->
@endpush
