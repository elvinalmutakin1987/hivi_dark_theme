@extends('partials.main')

@section('css')
    <style>
        #phone {
            background-color: white;
            border: 1px solid black;
            color: black;
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @include('login.component.form_login')
@endsection
