@extends('layouts.app')
@section('content')
<style>
    
</style>
<div class="container mt-5">
    <div class="grid">
        <div class="grid">
        <div class="shadow">
            <div class="h2 text-center mt-4 mb-5">
                <h3>Register</h3>
            </div>
            <form method="POST" action="{{ route('registerdonormoney') }}" class="m-5">
                @csrf

                <div class="form-group  ">
                    <label for="name" class="col-md-12 col-form-label
                    ">DonorName</label>

                    <div class="col-md-12">
                        <input id="name" type="name" 
                        class="form-control 
                        @error('donor_name') is-invalid
                         @enderror" name="donor_name" value="{{ old('donor_name') }}"
                          >

                        @error('donor_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                  
                <div class="form-group  ">
                    <label for="month" class="col-md-12 col-form-label
                    ">Month</label>

                    <div class="col-md-12">
                        <input id="month" type="month" 
                        class="form-control 
                        @error('month') is-invalid
                         @enderror" name="month" value="{{ old('month') }}"
                          >

                        @error('month')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group  ">
                    <label for="contact" class="col-md-12 col-form-label
                    ">contact</label>

                    <div class="col-md-12">
                        <input id="contact" type="text" 
                        class="form-control 
                        @error('contact') is-invalid
                         @enderror" name="contact" value="{{ old('contact') }}"
                          >

                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                

                <div class="form-group mb-4 ">
                    <label for="name" class="col-md-12 col-form-label
                    ">Amount</label>

                    <div class="col-md-12">
                        <input id="name" type="name" 
                        placeholder="like  1000000"
                        class="form-control 
                        @error('amount') is-invalid
                         @enderror" name="amount" value="{{ old('amount') }}"
                          >

                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group ml-6 mb-4 ">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
</div>

   
@endsection