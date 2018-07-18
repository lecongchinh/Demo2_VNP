@extends('index')

@section('title', 'admin')

@section('admin')
<div class="container-fluid">
    @if(Session::has('message'))
        <div class="alert alert-info">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="col-md-8"></div>
    <div class="col-md-4">
        <a href="{{route('logout')}}">
            <button class="btn-primary">
                Log Out
            </button>
        </a>
    </div>
</div>
<div>
    <p>Day la trang admin</p>
<div>
@endsection