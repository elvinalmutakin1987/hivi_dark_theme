@extends('partials.main')

@section('css')
@endsection

@section('js')
    <style>
        .fc-black {
            color: black
        }
    </style>
@endsection

@section('content')
    @include('home.component.hero')

    @include('home.component.mitra')
@endsection
