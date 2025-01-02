@include('frontend.includes.header')




<!--==============================
    Breadcumb
============================== -->
<div data-bg-src="assets/img/breadcumb/about-us.png">
    <div class="breadcumb-wrapper">
        <div class="container z-index-common">
            <div class=" container breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class=" breadcumb-menu">
                        <li><a href="index-2.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



    <!--==============================
    Service Area
    ==============================-->
    @include('frontend.layouts.mission', ['missions' => $missions])


    <!--===========================================
    About CEO and Managing Diractor
    ============================================-->

    @include('frontend.layouts.speech', ['speeches' => $speeches])



<!--Mafuzur Rahaman-->



    <!--==============================
    why we are the Best
    ==============================-->
    <section data-bg-src="assets/img/bg/about-bg-5-1.jpg">
        <div class="container">
            <div class="row flex-row-reverse align-items-center gx-70">
                <div class="col-sm-6">
                    <img src="assets/img/frame2.png" alt="about image">
                </div>
                <div class="col-sm-6">
                    <div class="about-box2">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get the best ERP Solution</span>
                        <h2 class="sec-title3 h1">We Are The Best ERP Software Company In Bangladesh.</h2>
                        <p style="text-align: justify;">
                            All types of small, medium, and enterprise-level software can be created utilizing digital technologies, development services and experience can help to develop by starlinegroup .
                            To maintain all of its daily operations, every firm, small or large, needs the appropriate tools and strategies. We understand their suffering, and in order to address their issues,
                            we have developed a number of solutions, including HRM, accounting and inventory management software, POS systems, Smart ERP, Garments ERP, and others. Our software is inexpensive,
                            extremely secure, and most importantly, it is simple to use without the need for any specialized knowledge. The system is simple to use even for non-technical people.
                            We have a reputation for being Bangladesh's best software development business. We have also won consumers' trust and are regarded as one of the greatest software companies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





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
