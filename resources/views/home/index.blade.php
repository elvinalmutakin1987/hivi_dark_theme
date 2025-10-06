@extends('partials.main')

@section('css')
    <style>
        .fc-black {
            color: black
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @include('home.component.hero')

    @include('home.component.mitra')
@endsection
