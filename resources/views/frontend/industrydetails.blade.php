@include('frontend.includes.header')

<section class="industry-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Check if an image is set, and display it -->
                @if($concern->image)
                    <div class="mb-3 pb-3">
                        <img src="{{ asset('storage/' . $concern->image) }}" alt="Industry image">
                    </div>
                @endif

                <!-- Display title -->
                <h2 class="h4">{{ $concern->title }}</h2>

                <!-- Display full details without <p> tags -->
                {!! $concern->full_details !!}
            </div>

            <div class="col-lg-4 mt-30 mt-lg-0">
                <aside class="service-sidebar">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Components at a glance</h3>
                        <ul>
                            @foreach($allConcerns as $concernItem)
                            <li>
                                <a href="{{ route('industry.details', $concernItem->id) }}">{{ $concernItem->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>


@include('frontend.includes.ending')
