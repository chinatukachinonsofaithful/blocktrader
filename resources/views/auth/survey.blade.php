@extends('layout.user')
@push('content')

    <!-- HEADER -->
    <div class="header">
    </div> <!-- / .header -->

    <div class="main-content">


        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne"
                        data-helpers--step-form-target="step">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                                <h1 class="mb-3  text-center">
                                    Financial Profile
                                </h1>
                                {{-- <p class="mb-5 text-muted">
                                    Secure and safely deposit money into your account.
                                </p> --}}
                                <form method="POST" action="{{ route('submit.survey.index') }}">
                                    @csrf

                                    <!-- Networth -->
                                    <div class="form-group">
                                        <label class="form-label">Networth</label>
                                        <select name="networth" class="form-select mb-3" required>
                                            <option selected disabled>Select Networth</option>
                                            <option value="$5,000 - $10,000"
                                                {{ old('networth') == '$5,000 - $10,000' ? 'selected' : '' }}>
                                                <$5,000 - $10,000</option>
                                            <option value="$10,000 - $50,000"
                                                {{ old('networth') == '$10,000 - $50,000' ? 'selected' : '' }}>$10,000 -
                                                $50,000</option>
                                            <option value="$50,000 - $150,000"
                                                {{ old('networth') == '$50,000 - $150,000' ? 'selected' : '' }}>$50,000 -
                                                $150,000</option>
                                            <option value="$150,000 - $300,000"
                                                {{ old('networth') == '$150,000 - $300,000' ? 'selected' : '' }}>$150,000 -
                                                $300,000</option>
                                            <option value="$300,000 - $800,000"
                                                {{ old('networth') == '$300,000 - $800,000' ? 'selected' : '' }}>$300,000 -
                                                $800,000</option>
                                            <option value="$800,000 - $1,000,000"
                                                {{ old('networth') == '$800,000 - $1,000,000' ? 'selected' : '' }}>$800,000
                                                - $1,000,000</option>
                                        </select>
                                        @error('networth')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Stock Trading Experience -->
                                    <div class="form-group">
                                        <label class="form-label">Stock Trading Experience</label>
                                        <select name="stocktrading" class="form-select mb-3" required>
                                            <option selected disabled>Select Stock Trading Experience</option>
                                            <option value="Starter"
                                                {{ old('stocktrading') == 'Starter' ? 'selected' : '' }}>Starter</option>
                                            <option value="Intermediate"
                                                {{ old('stocktrading') == 'Intermediate' ? 'selected' : '' }}>Intermediate
                                            </option>
                                            <option value="Advance"
                                                {{ old('stocktrading') == 'Advance' ? 'selected' : '' }}>Advance</option>
                                            <option value="Expert" {{ old('stocktrading') == 'Expert' ? 'selected' : '' }}>
                                                Expert</option>
                                        </select>
                                        @error('stocktrading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Monthly Trading Volume -->
                                    <div class="form-group">
                                        <label class="form-label">Monthly Trading Volume</label>
                                        <select name="monthlytrading" class="form-select mb-3" required>
                                            <option selected disabled>Select Monthly Trading Volume</option>
                                            <option value="$5,000 - $10,000"
                                                {{ old('networth') == '$5,000 - $10,000' ? 'selected' : '' }}>
                                                <$5,000 - $10,000</option>
                                            <option value="$10,000 - $50,000"
                                                {{ old('networth') == '$10,000 - $50,000' ? 'selected' : '' }}>$10,000 -
                                                $50,000</option>
                                            <option value="$50,000 - $150,000"
                                                {{ old('networth') == '$50,000 - $150,000' ? 'selected' : '' }}>$50,000 -
                                                $150,000</option>
                                            <option value="$150,000 - $300,000"
                                                {{ old('networth') == '$150,000 - $300,000' ? 'selected' : '' }}>$150,000 -
                                                $300,000</option>
                                            <option value="$300,000 - $800,000"
                                                {{ old('networth') == '$300,000 - $800,000' ? 'selected' : '' }}>$300,000 -
                                                $800,000</option>
                                            <option value="$800,000 - $1,000,000"
                                                {{ old('networth') == '$800,000 - $1,000,000' ? 'selected' : '' }}>$800,000
                                                - $1,000,000</option>
                                        </select>
                                        @error('monthlytrading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Purpose of Account -->
                                    <div class="form-group">
                                        <label class="form-label">Purpose of Account</label>
                                        <select name="purpose" class="form-select mb-3" required>
                                            <option selected disabled>Select Purpose of Account</option>
                                            <option value="Investing"
                                                {{ old('purpose') == 'Investing' ? 'selected' : '' }}>Investing</option>
                                            <option value="Learning" {{ old('purpose') == 'Learning' ? 'selected' : '' }}>
                                                Learning</option>
                                            <option value="Others" {{ old('purpose') == 'Others' ? 'selected' : '' }}>
                                                Others</option>
                                        </select>
                                        @error('purpose')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Source of Funds -->
                                    <div class="form-group">
                                        <label class="form-label">Source of Funds</label>
                                        <select name="source" class="form-select mb-3" required>
                                            <option selected disabled>Select Source of Funds</option>
                                            <option value="Inheritance"
                                                {{ old('source') == 'Inheritance' ? 'selected' : '' }}>Inheritance</option>
                                            <option value="Savings" {{ old('source') == 'Savings' ? 'selected' : '' }}>
                                                Savings</option>
                                            <option value="Salary" {{ old('source') == 'Salary' ? 'selected' : '' }}>Salary
                                            </option>
                                            <option value="Loan" {{ old('source') == 'Loan' ? 'selected' : '' }}>Loan
                                            </option>
                                        </select>
                                        @error('source')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Annual Net Income -->
                                    <div class="form-group">
                                        <label class="form-label">Annual Net Income</label>
                                        <select name="annual" class="form-select mb-3" required>
                                            <option selected disabled>Select Annual Net Income</option>
                                            <option value="$5,000 - $10,000"
                                                {{ old('networth') == '$5,000 - $10,000' ? 'selected' : '' }}>
                                                <$5,000 - $10,000</option>
                                            <option value="$10,000 - $50,000"
                                                {{ old('networth') == '$10,000 - $50,000' ? 'selected' : '' }}>$10,000 -
                                                $50,000</option>
                                            <option value="$50,000 - $150,000"
                                                {{ old('networth') == '$50,000 - $150,000' ? 'selected' : '' }}>$50,000 -
                                                $150,000</option>
                                            <option value="$150,000 - $300,000"
                                                {{ old('networth') == '$150,000 - $300,000' ? 'selected' : '' }}>$150,000 -
                                                $300,000</option>
                                            <option value="$300,000 - $800,000"
                                                {{ old('networth') == '$300,000 - $800,000' ? 'selected' : '' }}>$300,000 -
                                                $800,000</option>
                                            <option value="$800,000 - $1,000,000"
                                                {{ old('networth') == '$800,000 - $1,000,000' ? 'selected' : '' }}>$800,000
                                                - $1,000,000</option>
                                        </select>
                                        @error('annual')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Liquid Networth -->
                                    <div class="form-group">
                                        <label class="form-label">Liquid Networth</label>
                                        <select name="liquid" class="form-select mb-3" required>
                                            <option selected disabled>Select Liquid Networth</option>
                                            <option value="$5,000 - $10,000"
                                                {{ old('networth') == '$5,000 - $10,000' ? 'selected' : '' }}>
                                                <$5,000 - $10,000</option>
                                            <option value="$10,000 - $50,000"
                                                {{ old('networth') == '$10,000 - $50,000' ? 'selected' : '' }}>$10,000 -
                                                $50,000</option>
                                            <option value="$50,000 - $150,000"
                                                {{ old('networth') == '$50,000 - $150,000' ? 'selected' : '' }}>$50,000 -
                                                $150,000</option>
                                            <option value="$150,000 - $300,000"
                                                {{ old('networth') == '$150,000 - $300,000' ? 'selected' : '' }}>$150,000 -
                                                $300,000</option>
                                            <option value="$300,000 - $800,000"
                                                {{ old('networth') == '$300,000 - $800,000' ? 'selected' : '' }}>$300,000 -
                                                $800,000</option>
                                            <option value="$800,000 - $1,000,000"
                                                {{ old('networth') == '$800,000 - $1,000,000' ? 'selected' : '' }}>$800,000
                                                - $1,000,000</option>
                                        </select>
                                        @error('liquid')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <hr class="my-5">
                                    <div class="nav row align-items-center">
                                        <div class="col-auto">
                                            <button class="btn btn-lg btn-primary" type="submit">Continue</button>
                                        </div>
                                </form>


                                <form method="POST" action="{{ route('skip.survey.index') }}">
                                    @csrf


                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-white lift" type="submit">Skip</button>
                                    </div>

                                </form>


                            </div><br><br><br>


                        </div>
                    </div>




                </div>



            </div>
        </div>
    </div>
    </div>
@endpush
