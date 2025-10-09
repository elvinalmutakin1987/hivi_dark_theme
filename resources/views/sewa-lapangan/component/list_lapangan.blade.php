<div class="swiper-wrapper">
    @foreach ($venue as $d)
        <div class="swiper-slide">
            <div class="tf-card-box style-1 bg-white">
                <div class="card-media">
                    <a href="#">
                        <img src="assets/images/box-item/card-item-33.jpg" alt="">
                    </a>
                </div>
                <h5 class="name"><a href="nft-detail-2.html">{{ $d->name }}</a></h5>
                <div class="author flex items-center">
                    <div class="avatar">
                        <img src="assets/images/avatar/avatar-box-03.jpg" alt="Image">
                    </div>
                    <div class="info">
                        <h6><a href="author-2.html">{{ $d->city }}</a> </h6>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="meta-info flex items-center justify-between items-center">
                    <div>
                        <span class="text-bid">Current Bid</span>
                        <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                    </div>
                    <div class="button-place-bid">
                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place
                                Bid</span></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
