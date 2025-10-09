<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</div>


<div class="tf-section-2 discover-item loadmore-12-item">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-soft items-center">
                    <div class="soft-left">
                        <fieldset>
                            <input type="text" id="kota" placeholder="Kota" name="kota"
                                value="{{ Request::get('kota') && Request::get('kota') ? Request::get('kota') : '' }}"
                                aria-required="true" required="">
                            <ul id="kotaList">
                                {!! Request::get('kota') && Request::get('kota') != ''
                                    ? "<li data-value=\"" .
                                        Request::get('kota') .
                                        "\" onclick=\"pilih_kota('" .
                                        Request::get('kota') .
                                        "')\">" .
                                        Request::get('kota') .
                                        '</li>'
                                    : '' !!}
                            </ul>
                        </fieldset>
                        <fieldset>
                            <input type="text" id="sport" placeholder="Cabang Olahraga" name="sport"
                                value="{{ Request::get('sport') && Request::get('sport') ? Request::get('sport') : '' }}"
                                aria-required="true" required="">
                            <ul id="sportList">
                                {!! Request::get('sport') && Request::get('sport') != ''
                                    ? "<li data-value=\"" .
                                        Request::get('sport') .
                                        "\" onclick=\"pilih_sport('" .
                                        Request::get('sport') .
                                        "')\">" .
                                        Request::get('sport') .
                                        '</li>'
                                    : '' !!}
                            </ul>
                        </fieldset>
                        {{-- <fieldset>
                            <input type="date" id="date" placeholder="Tanggal Pemesanan" name="date"
                                value="{{ date('Y-m-d') }}" aria-required="true" required="">
                        </fieldset> --}}
                        <fieldset>
                            <div class="flat-button flex">
                                <a href="#" class="tf-button style-2 h50 w190 mr-10"
                                    style="height: 56px; width:100%; background-color: #171717; color: #c7ff37; transition: all 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#c7ff37'; this.style.color='#171717';"
                                    onmouseout="this.style.backgroundColor='#171717'; this.style.color='#c7ff37';"
                                    id="searchButton">Cari
                                    Lapangan<i class="icon-search"></i></a>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('searchButton').addEventListener('click', function(event) {
        event.preventDefault();
        var kota = document.getElementById('kota').value;
        var sport = document.getElementById('sport').value;
        var url = "{{ route('sewa_lapangan') }}" + "?kota=" + encodeURIComponent(kota) + "&sport=" +
            encodeURIComponent(sport);
        window.location.href = url;
    });
</script>
