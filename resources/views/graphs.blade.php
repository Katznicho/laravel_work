@extends('layouts.app')

@section('content')
<style>
        .footer{
        margin-top: 4rem;
        padding: 10px;
        text-align: center;
    }
    .footer>a{
        text-decoration:none;

        cursor: pointer;
        font-weight: bold;
    }
</style>
<div class="layout">
    <div class="container">
      
        <div class="footer">
            <small>2021 All Rights Reserved</small>
            <a href="{{ route('home') }}">BackHome</a>
        </div>
    </div>
    
</div>
    
@endsection