@extends('layouts.app1')
@section('title', 'update')
@section('content')
    <div class="container">
        <form method="post" action="update_submit">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">ID</label>
                </div>
                <select class="custom-select" id="id" name="id">
                    <option selected>Choose...</option>
                    @foreach($data as $item)
                    <option value="{{$item->id}}">{{$item->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection
