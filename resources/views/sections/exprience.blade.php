<!--====================================================
                           AWARDS
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="row my-auto">
            <div class="col-12">
              <h2 class="  text-center">Experience</h2>
              <div class="mb-5 heading-border"></div>
            </div>
            <div class="main-award" id="award-box">
                @foreach ($experiences as $experiences)
                <div class="award">
                    <div class="award-icon"></div>
                    <div class="award-content">
                        <span class="date">{{ $experiences->time }}</span>
                        <h5 class="title">{{ $experiences->title }}</h5>
                        <p class="description">
                          {{ $experiences->text }}
                        </p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
