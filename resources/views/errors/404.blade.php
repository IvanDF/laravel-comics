@extends('layouts.main-content')

@section('page-title')
    <title>Error 404 :(</title>
@endsection

@section('content')
    <div class="error404">
        <div class="text txtCenter pr-2">
            <h2>404</h2>
            <small>Page does not exist</small>
        </div>
        <img src="{{ asset('img/error.gif')}}" alt="">
    </div>
@endsection