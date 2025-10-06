<div class="tf-section-2 widget-box-icon" style="margin-top: 100px">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-20" style="color:black">Form Pendaftaran</h2>
                </div>
            </div>
            <div class="col-12">
                <form action="{{ route('kemitraan.simpan_pendaftaran') }}" method="POST">
                    @csrf
                    @method('POST')
                    <fieldset>
                        <input class="txt-form" type="text" id="name" placeholder="Nama" name="name"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset>
                        <input class="txt-form" type="text" id="email" placeholder="Email" name="email"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset>
                        <input class="txt-form" type="text" id="phone" placeholder="Nomor HP" name="phone"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset>
                        <input class="txt-form" type="text" id="city" placeholder="Kota" name="city"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset>
                        <textarea id="message" name="message" rows="4" placeholder="Pesan & pertanyaan" tabindex="4"
                            aria-required="true" required=""></textarea>
                    </fieldset>
                    <div class="btn-submit">
                        <button class="tf-button style-1" type="submit">Simpan <i
                                class="icon-arrow-up-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
