@extends('layouts.app')

@section('content')
<style>
    .grid{
        display: grid;
        place-items: center;
        height: 100vh;
    }
    .shadow{
        width: 90vh;
        height: 50vh;
        background: #fff;

    }
</style>
    <div class="container">
        <div class="grid">
            <div class="shadow">
                <div class="h2 text-center mt-4 mb-5">Register</div>
                <form method="POST" action="{{ route('registerofficer') }}" class="m-5">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">OFFicerName</label>

                        <div class="col-md-6">
                            <input id="name" type="name" 
                            class="form-control 
                            @error('officer_name') is-invalid
                             @enderror" name="name" value="{{ old('name') }}"
                              autocomplete="name"
                              autofocus>

                            @error('officer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4 d-flex flex-col">
                            <button type="submit" class="btn btn-primary d-flex flex-col">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection