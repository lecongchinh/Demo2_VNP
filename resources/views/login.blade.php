@extends('index')

@section('title', 'Login')



@section('login')

    <div class='container-fluid'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>

            @if(Session::has('message'))
                <div class="alert alert-danger">
                    {{ Session::get('message') }}
                </div>
            @endif

            <h1 style='text-align: center'>Sign in to Blog</h1>
            <form action="{{route('login')}}" method='POST'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">email: </label>
                    <input type="email" name='email' class="form-control" placeholder="Email: ">
                
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>     
                    <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div style='text-align: center'>
                    <button type="submit" class="btn btn-primary" style='text-align: center'>Submit</button>
                </div>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>

@endsection

