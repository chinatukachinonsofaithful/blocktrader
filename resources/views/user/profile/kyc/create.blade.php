@extends('layout.user')
@push('content')
    <div class="main-content">
        <div class="container-lg">
          

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">


                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                            <h6 class="mb-4 text-uppercase text-muted">

                            </h6>
                            <h1 class="mb-3">
                                KYC Verification
                            </h1>
                            <p class="mb-5 text-muted">
                                Please upload a scan of a photo ID, such as a driver's license, passport or Voter
                                Identity Card
                            </p>
                        </div>
                    </div>

                    <div>
                        <form method="POST" action="{{ route('user.kyc.submit') }}" enctype="multipart/form-data" class="tab-content">
                            @csrf
                            <div class="grid gap-y-6">
                                <!-- Front Photo ID -->
                                <div class="grid gap-y-2">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="idFront">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Front Photo ID
                                        </span>
                                        <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                    </label>
                                    <input name="idFront" type="file" id="idFront" class="form-control" required />
                                    <small class="fi-fo-field-wrp-helper-text text-sm text-gray-500">
                                        Please upload a clear (png, jpeg only) image of the front photo ID.
                                    </small>
                                </div>
                        
                                <!-- Back Photo ID -->
                                <div class="grid gap-y-2">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="idBack">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Back Photo ID
                                        </span>
                                        <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                    </label>
                                    <input name="idBack" type="file" id="idBack" class="form-control" required />
                                    <small class="fi-fo-field-wrp-helper-text text-sm text-gray-500">
                                        Please upload a clear (png, jpeg only) image of the back photo ID.
                                    </small>
                                </div>
                        
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary mt-4">
                                    Submit
                                </button>
                            </div>
                        </form>
                        

                        <!-- __ENDBLOCK__ -->
                    </div>


                    <hr class="my-5">

                  
                </div>
            </div>
        </div>
    </div>
@endpush
