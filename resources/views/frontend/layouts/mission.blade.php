

<section class=" space-extra-bottom">
    <div class="container">
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
            @foreach($missions as $mission)
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-top">
                            <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                            <span class="service-number">01</span>
                        </div>
                        <h3 class="service-title h5"><a href="#">Our Mission</a></h3>
                        <p class="service-text">{{ $mission->mission }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-top">
                            <div class="service-icon"><img src="assets/img/icon/sr-icon-1-2.png" alt="Features"></div>
                            <span class="service-number">02</span>
                        </div>
                        <h3 class="service-title h5"><a href="#">Our Vision</a></h3>
                        <p class="service-text">{{ $mission->vision }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-top">
                            <div class="service-icon"><img src="assets/img/icon/sr-icon-1-3.png" alt="Features"></div>
                            <span class="service-number">03</span>
                        </div>
                        <h3 class="service-title h5"><a href="#">Our Experience</a></h3>
                        <p class="service-text">{{ $mission->experience }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

