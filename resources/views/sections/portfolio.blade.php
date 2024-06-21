<!--====================================================
                        PORTFOLIO
    ======================================================-->
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
    <div class="row my-auto">
        <div class="col-12">
            <h2 class="  text-center">Portfolio</h2>
            <div class="mb-5 heading-border"></div>
        </div>
        <div class="col-md-12">
            <div class="port-head-cont">
                <button class="btn btn-general btn-green filter-b" data-filter="all">All</button>
                @foreach ($categories as $category)
                    <button class="btn btn-general btn-green filter-b"
                        data-filter="{{ $category->id }}">{{ $category->name }}</button>
                @endforeach

            </div>
        </div>
    </div>
    <div class="row my-auto">
        @foreach ($portfolios as $portfolio)
            <div class="col-sm-4 portfolio-item filter {{ $portfolio->category_id }}">
                <a class="portfolio-link" href="#portfolioModal{{ $portfolio->id }}" data-toggle="modal">
                    <div class="caption-port">
                        <div class="caption-port-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/images/portfolio/{{ $portfolio->image }}" alt="">
                </a>
            </div>
        @endforeach


    </div>
</section>


<!--====================================================
                    PORTFOLIO MODALS
======================================================-->

@foreach ($portfolios as $portfolio)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                                <div class="col-md-12">
                                    <h2 class="text-center">{{ $portfolio->title }} Project</h2>
                                    <div class="heading-border"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid img-centered" src="/images/portfolio/{{ $portfolio->image }}"
                                        alt="">
                                </div>
                                <div class="col-md-6">
                                    <a target="_blenk" href="{{ $portfolio->description }}">{{ $portfolio->description }}</a>
                                    <br><br>
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
