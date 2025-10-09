<div class="tf-section-1 featured-item">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured pt-10 swiper-container carousel"
                    data-swiper='{
                                "loop":false,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "spaceBetween": 30,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".slider-next",
                                    "prevEl": ".slider-prev"
                                },
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "768": {
                                        "slidesPerView": 2,
                                        "spaceBetween": 30
                                    },
                                    "1024": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 30
                                    },
                                    "1300": {
                                        "slidesPerView": 4,
                                        "spaceBetween": 30
                                    }
                                }
                            }'>

                    @include('sewa-lapangan.component.list_lapangan', [
                        'venue' => $venue,
                    ])

                    <div class="col-12">
                        <div class="widget-pagination">
                            {{ $venue->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
