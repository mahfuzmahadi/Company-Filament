<section class="feature-wrap1 space-top space-extra-bottom" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            @foreach($concerns as $concern)
                <div class="col-xl-4 mb-4">
                    <div class="feature-style1" style="border: 1px solid #ddd; border-radius: 10px; padding: 20px; background-color: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; height: 240px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div style="flex: 1;">
                            <h3 class="feature-title h5" style="font-size: 18px; font-weight: bold; margin-bottom: 15px;">
                                <a class="text-inherit" href="{{ route('industry.details', $concern->id) }}" style="color: #333; text-decoration: none;">{{ $concern->title }}</a>
                            </h3>
                            <p class="feature-text" style="font-size: 14px; color: #666; margin-bottom: 20px;">{{ $concern->short_details }}</p>
                        </div>
                        <a href="{{ route('industry.details', $concern->id) }}" class="vs-btn style3" style="display: inline-block; padding: 10px 20px; font-size: 14px; color: #fff; background-color: #01133c; text-decoration: none; border-radius: 5px; border: 1px solid transparent; transition: background-color 0.3s ease;">
                            Read More<i class="far fa-long-arrow-right" style="margin-left: 5px;"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

