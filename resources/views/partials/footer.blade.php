<!-- Footer -->
<footer id="footer" class="bg-white">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <div class="footer-content flex flex-grow">
                    <div class="widget-logo flex-grow">
                        <div class="logo-footer" id="logo-footer">
                            <a href="index.html">
                                <img id="logo_footer" src="assets/images/logo/logo-dark.png"
                                    data-retina="assets/images/logo/logo-dark@2x.png">
                            </a>
                        </div>
                    </div>
                    <div class="widget widget-menu style-1">
                        <h5 class="title-widget">Perusahaan</h5>
                        <ul>
                            <li><a href="{{ route('tentang') }}">Tentang</a></li>
                            <li><a href="{{ route('ketentuan') }}">Syarat & Ketentuan</a></li>
                            <li><a href="{{ route('kebijakan') }}">Kebijakan & Privasi</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-menu style-2">
                        <h5 class="title-widget">Produk</h5>
                        <ul>
                            <li><a href="#">Sewa Lapangan</a></li>
                            <li><a href="#">Video Replay</a></li>
                        </ul>
                    </div>
                    <div class="widget-last">
                        <div class="widget-menu style-4">
                            <h5 class="title-widget">Hubungi Kami</h5>
                            <ul>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                        <h5 class="title-widget mt-30">Join the community</h5>
                        <div class="widget-social">
                            <ul class="flex">
                                <li><a href="#" class="icon-facebook"></a></li>
                                <li><a href="#" class="icon-twitter"></a></li>
                                <li><a href="#" class="icon-vt"></a></li>
                                <li><a href="#" class="icon-tiktok"></a></li>
                                <li><a href="#" class="icon-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} HiViPlay</p>
        </div>
    </div>
</footer><!-- /#footer -->
