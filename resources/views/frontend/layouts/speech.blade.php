<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/testi-bg-4-1.jpg">
    <div class="container  wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get the best ERP Solution</span>
                    <h2 class="sec-title3 h1">Inspiring Speech of Management</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns2">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn popup-video">Watch Video<i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-9">
                @foreach($speeches as $speech)
                    <div class="container-fluid">
                        <div class="testi-style2">
                            <div class="testi-body">
                                <div class="author-img">
                                    <img src="{{ asset('storage/' . $speech->image) }}" alt="Testimonial">
                                    {{-- <img src="{{ asset('storage/speech-images/' . $speech->image) }}" alt="Testimonial"> --}}

                                </div>
                                <div class="media-body">
                                    <p style="text-align: justify">
                                        {{ $speech->speech }}
                                    </p>
                                </div>
                            </div>
                            <h3 class="testi-name">{{ $speech->name }}</h3>
                            <div class="testi-degi">{{ $speech->designation }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-3">
                <div class="bg-white p-0 pt-3 pb-3">
                    <h4 class="p-3 text-center border-5">
                        Meet Our Teams Member
                    </h4>
                    <p class="p-3">
                        we have expert team to give you proper solve your all kind of problem.
                    </p>

                    <div class="container demo-bg-button">
                        <a href="team-2.html">
                            <div class="input-group">
                                <button class="vs-btn" type="submit">Teams Member</button>
                            </div>
                        </a>
                    </div>

                </div>

            </div>


        </div>


    </div>
</section>
