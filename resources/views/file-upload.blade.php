@extends('layouts.app1')
@section('title', 'file-upload')
@section('content')
    <form method="post" action="/fileUpload" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">file input</label>
            <input type="file" class="form-control-file" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Upload</button>
    </form>
@endsection
