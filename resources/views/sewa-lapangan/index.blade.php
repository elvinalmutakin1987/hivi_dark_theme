@extends('partials.main')

@section('css')
    <style>
        .fc-black {
            color: black
        }

        .bg-abu {
            background-color: #f5f5f7
        }

        #kota,
        #sport,
        #date {
            background-color: white;
            border: 1px solid black;
            color: black;
            box-sizing: border-box;
        }

        #kota::placeholder,
        #sport::placeholder,
        #date::placeholder {
            color: #888;
        }

        #kotaList,
        #sportList {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: white;
            border: 1px solid black;
            display: none;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            z-index: 999;
            box-sizing: border-box;
        }

        #kotaList li,
        #sportList li {
            padding: 8px;
            font-size: 16px;
            color: black;
            cursor: pointer;
        }

        #kotaList li:hover,
        #sportList li:hover {
            background-color: #f0f0f0;
        }
    </style>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            let timeout;

            $('#kota').on('input focus', function() {
                clearTimeout(timeout);

                var searchTerm = $('#kota').val();
                timeout = setTimeout(function() {
                    $.ajax({
                        url: "{{ route('kota') }}",
                        type: 'GET',
                        data: {
                            term: searchTerm
                        },
                        success: function(response) {
                            if (response.success) {
                                var listItemsHTML =
                                    '';
                                response.data.forEach(function(item) {
                                    listItemsHTML +=
                                        `<li data-value="${item.name}" onclick="pilih_kota('${item.name}')">${item.name}</li>`;
                                });

                                $('#kotaList').html(listItemsHTML).show();
                                adjustKotaListWidth();
                            } else {
                                $('#kotaList').html('').hide();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }, 300);
            });

            function adjustKotaListWidth() {
                var maxWidth = 0;
                var maxWidth = $("#kota").outerWidth();
                $('#kotaList').width(maxWidth);
            }

            window.pilih_kota = function(cityName) {
                $('#kota').val(cityName);
                $('#kotaList').hide();
            };

            $('#kota').on('blur', function() {
                setTimeout(function() {
                    $('#kotaList').hide();
                }, 100);
            });

            $('#kotaList').on('mousedown', function(e) {
                e.stopPropagation();
            });

            $('#sport').on('input focus', function() {
                clearTimeout(timeout);

                var searchTerm = $('#sport').val();
                timeout = setTimeout(function() {
                    $.ajax({
                        url: "{{ route('sport') }}",
                        type: 'GET',
                        data: {
                            term: searchTerm
                        },
                        success: function(response) {
                            if (response.success) {
                                var listItemsHTML = "";
                                if (searchTerm == "") {
                                    listItemsHTML +=
                                        `<li data-value="Semua Olahraga" onclick="pilih_sport('Semua Olahraga')">Semua Olahraga</li>`;
                                }
                                response.data.forEach(function(item) {
                                    listItemsHTML +=
                                        `<li data-value="${item.sport_name}" onclick="pilih_sport('${item.sport_name}')">${item.sport_name}</li>`;
                                });
                                $('#sportList').html(listItemsHTML).show();
                                adjustSportListWidth();
                            } else {
                                $('#sportList').html('').hide();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }, 300);
            });

            function adjustSportListWidth() {
                var maxWidth = 0;
                var maxWidth = $("#sport").outerWidth();
                $('#sportList').width(maxWidth);
            }

            window.pilih_sport = function(sportName) {
                $('#sport').val(sportName);
                $('#sportList').hide();
            };

            $('#sport').on('blur', function() {
                setTimeout(function() {
                    $('#sportList').hide();
                }, 100);
            });

            $('#sportList').on('mousedown', function(e) {
                e.stopPropagation();
            });
        });
    </script>
@endsection

@section('content')
    @include('sewa-lapangan.component.filter')
    @include('sewa-lapangan.component.list_lapangan')
    @include('sewa-lapangan.component.faq')
@endsection
