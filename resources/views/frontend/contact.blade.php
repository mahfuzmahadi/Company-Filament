
@include('frontend.includes.header')


<!--==============================
    Breadcumb
============================== -->
<div data-bg-src="assets/img/breadcumb/contact.png">
    <div class="breadcumb-wrapper">
        <div class="container z-index-common">
            <div class=" container breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class=" breadcumb-menu">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



	<!--==============================
    Appointment Area
    ==============================-->
    <section data-bg-src="assets/img/bg/process-bg-2-1.jpg">
        <div class="container py-3 pt-5">
            <div class="row gx-60">
                <div class="col-xl-6 align-self-center space  wow fadeInUp" data-wow-delay="0.2s">
                    <span class="sec-subtitle text-primary">Make An Appointment</span>
                    <h2 class="sec-title3 h1">We Provide Best ERP Solution</h2>
                    <hr class="hr-style1">
                    <p>
                        starlinegroup BANGLADESH Software solution to enhance our client overall operation process efficiency
                        & accountability. In view of the overall analysis starlinegroup has envisioned the following modular
                        Institute Management level solution pack to streamline their operational activities Development
                        of a Cloud based aspects of operations. Compact financial accounting, warehouse, administration,
                        human resource, payroll and each section with single synchronized cloud based CES system. Training
                        and support for all kinds of requirement of the CES software.

                    </p>

                    <p>
                        If you thinking about ERP, have any question or inquery you can talk to one of our experts.
                        starlinegroup provide 24/7 support for your business. Feel free to consult with our experts.
                    </p>

                    <div class="row gy-30">
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-phone-alt"></i></div>
                                <div class="media-body">
                                    <span class="contact-media__info  text-primary">24/7 Call Available</span>
                                    <p class="contact-media__info " style="font-weight:600"><a href="tel:+880 1815224424">+880 1815224424</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-envelope"></i></div>
                                <div class="media-body">
                                    <span class="contact-media__info  text-primary">Write a Quick mail</span>
                                    <p class="contact-media__info " style="font-weight:600"><a href="mailto:ceo@starlinegroup">ceo@starlinegroup</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <span class="contact-media__info  text-primary">Visit Head Office</span>
                                    <p class="contact-media__info " style="font-weight:600">Plot-985, Road-16, Avenue-02, Mirpur DOHS, Dhaka-1216</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <span class="contact-media__info  text-primary">Visit Farmgate Office</span>
                                    <p class="contact-media__info " style="font-weight:600">Sazan point(level 5th) 2, indira road, farmgate, Dhaka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="col-xl-6 form-wrap1 pt-5">
                    <form action="{{ route('contact.store') }}" method="post" class="form-style2" enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title h4">Make An Appointment</h2>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <textarea name="client_message" placeholder="Write a short message..." required></textarea>
                        </div>
                        <div class="form-btn">
                            <button class="vs-btn style5" type="submit" name="submit" id="submit">SUBMIT REQUEST<i class="far fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </section>






@include('frontend.layouts.branch', ['branches' => $branches])



<style>
    .col-lg-3 .input-group .input-group-text{
        font-weight: 900;
        color: white;
        background-color: #01133ca6;
    }
    .demo-bg{
        border-radius: 10px;
        background: #01133cd9;
        /*background: #01133c;*/
    }
    .demo-bg-button button{
        width: 100%;
        height: 50px;
    }
</style>


@include('frontend.includes.ending')
