@extends('partials.main')

@section('css')
    <style>
        #name,
        #phone,
        #city,
        #message,
        #email {
            background-color: white;
            border: 1px solid black;
            color: black;
        }

        #name::placeholder,
        #phone::placeholder,
        #city::placeholder,
        #message::placeholder,
        #email::placeholder {
            color: #888;
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @include('kemitraan.component.form_daftar')
@endsection
