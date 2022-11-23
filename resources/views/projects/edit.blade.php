@extends('layout')

@section('content')
    <form method="POST" action="#">
        <input class="form-control mb-2" type="text" name="name" value="" placeholder="Project name">

        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection