@extends('layouts.error-page')

@section('page-title')
    <title>Error 404 - Page does not exist</title>
@endsection

@section('content')
    <div class="errorPahe error404">
        <div class="text txtCenter pr-2">
            <h2>404</h2>
            <small>Page does not exist</small>
        </div>
        <img src="{{ asset('img/error.gif')}}" alt="">
    </div>
@endsection