@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>

    {!! Form::open() !!}

    {!! Form::close() !!}


    <form method="post" action="/posts">
        
        <input type="text" name="title" placeholder="Enter title">
        
        <input type="submit" name="submit">

    </form>


    

@endsection