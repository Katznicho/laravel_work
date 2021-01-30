@extends('layouts.app')

@section('content')
<style>
  

    
</style>
    <div class="container mt-5">    
        <div class="grid">
            @if (session('status'))
        <div class="officer-created" id="remove">
            <h4>
                {{ session('status') }}
            </h4>    
        </div>
        @endif

            <div class="shadow">

                <div class="h2 text-center mt-4 mb-5">Register</div>
                <form method="POST" action="{{ route('registerofficer') }}" class="m-5">
                    @csrf

                    <div class="form-group  ">
                        <label for="name" class="col-md-12 col-form-label
                        @error('officer_name') invalid @enderror
                        ">OFFicerName</label>

                        <div class="col-md-12">
                            <input id="name" type="name" 
                            class="form-control 
                            @error('officer_name') is-invalid
                             @enderror" name="officer_name" value="{{ old('officer_name') }}"
                              autocomplete="name"
                              autofocus>

                            @error('officer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  ">
                        <label for="name" class="col-md-12 col-form-label
                        @error('officer_name') invalid @enderror
                        ">Contact</label>

                        <div class="col-md-12">
                            <input id="name" type="name" 
                            class="form-control 
                            @error('contact') is-invalid
                             @enderror" name="contact" value="{{ old('contact') }}"
                              autocomplete="name"
                              autofocus>

                            @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ml-6 mt-4 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        
                    </div>
                </form>       
            </div>
            

        </div>
    </div>
@endsection


