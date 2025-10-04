@extends('partials.main')

@section('css')
    <style>
        .fc-black {
            color: black;
        }

        .bg-black {
            background-color: black
        }

        .bg-term {
            background-color: #f5f5f7
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @include('ketentuan.component.syarat_ketentuan')
@endsection
