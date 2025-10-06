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

        p {
            color: black
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @include('kemitraan.component.penjelasan')

    @include('kemitraan.component.fitur_benefit')

    @include('kemitraan.component.langkah')

    @include('kemitraan.component.banner_bawah')
@endsection
