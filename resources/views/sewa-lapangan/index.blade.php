@extends('partials.main')

@section('css')
    <style>
        .fc-black {
            color: black
        }

        .bg-abu {
            background-color: #f5f5f7
        }
    </style>
@endsection

@section('js')
@endsection

@section('content')
    @include('sewa-lapangan.component.filter')
    @include('sewa-lapangan.component.list_lapangan')
    @include('sewa-lapangan.component.faq')
@endsection
