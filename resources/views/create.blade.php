@extends('index')

@section('title', 'Create')

@section('create')


    <div class='container-fluid'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <h1 style='text-align: center'>Create data</h1>
            <form action='/create' method='POST'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="" name ="name" class="form-control" placeholder="name: ">
                
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="" name ="email" class="form-control" placeholder="name: ">
                
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input class="form-control" name= "password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">admin</label>
                    <input class="form-control" name= "admin">
                </div>
                <div style='text-align: center'>
                    <button type="submit" class="btn btn-primary" style='text-align: center'>Submit</button>
                </div>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>

@endsection