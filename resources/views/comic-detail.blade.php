@extends('layouts.base-structure')

@section('page-title')
    <title>DC | {{$comic['title']}}</title>
@endsection

@section('main-content')

    <!-- Include Hero -->
    @include('partials.hero')

    <!-- Include Comic Detail -->
    @include('partials.comic-info')

@endsection