<div class="tf-section-2 pt-60 widget-box-icon">
    <div class="themesflat-container w920">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-16" style="color:black">Masuk</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="widget-login" style="background-color: #f5f5f7">
                    <form id="commentform" class="comment-form">
                        <fieldset>
                            <label style="color:black">No. Handphone</label>
                            <input type="text" id="phone" name="phone" tabindex="2" value=""
                                aria-required="true" required>
                        </fieldset>
                        <div class="btn-submit mb-30">
                            <a href="market.html" class="tf-button h50 w-100" type="submit"
                                style="background-color: #def246; color: #171717; transition: all 0.3s ease;"
                                onmouseover="this.style.backgroundColor='#171717'; this.style.color='#def246';"
                                onmouseout="this.style.backgroundColor='#def246'; this.style.color='#171717';">Selanjutnya<i
                                    class="icon-arrow-up-right2"></i></a>
                        </div>
                    </form>
                    <div class="other" style="color:black">atau</div>
                    <div class="login-other">
                        <a href="{{ route('login.redirectToGoole') }}" class="login-other-item"
                            style="background-color: #171717; color: #def246; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#def246'; this.style.color='#171717';"
                            onmouseout="this.style.backgroundColor='#171717'; this.style.color='#def246';">
                            <img src="{{ asset('assets/images/google.png') }}" alt="">
                            <span>Masuk dengan google</span>
                        </a>
                    </div>
                    <div class="no-account" style="color:black">Belum punya akun? <a href="sign-up.html"
                            style="color:black; font-size: 16px; font-weight: bold">Daftar <i
                                class="icon-arrow-right2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
