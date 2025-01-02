   <!-- ==============================
         Our Branches Area
     ============================== -->
     <section class=" space-top space-extra-bottom bg-white">
        <div class="container">
            <div class="title-area text-center">
                <!--              <span class="sec-subtitle">Great Team Members</span>-->
                <h2 class="sec-title3 h1">Our Counter list</h2>
            </div>

            <div class="nav contact-tab-menu" id="nav-contactTab" role="tablist">
                @foreach($branches as $branch)
                <button class="nav-link cssg" id="nav-{{ $branch->name }}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{ $branch->name }}" type="button" role="tab" aria-controls="nav-{{ $branch->name }}" aria-selected="false">
                    <span class="btn-title">{{ $branch->name }}</span>
                    <span class="btn-text">{{ $branch->address }}</span>
                    <br>
                    <span class="btn-text ps-2"><i class="fal fa-phone-alt"></i> <a href="tel:{{ $branch->phone }}">{{ $branch->phone }}</a></span>
                    @if($branch->email)
                    <span class="btn-text ps-2"><i class="fal fa-envelope"></i> <a href="mailto:{{ $branch->email }}">{{ $branch->email }}</a></span>
                    @endif
                </button>
                @endforeach
            </div>



        </div>
    </section>
