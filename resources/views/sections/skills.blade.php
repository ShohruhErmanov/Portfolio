<!--====================================================
                        SKILLS
    ======================================================-->
    <section class=" d-flex flex-column" id="skills">
        <div class="p-lg-5 p-3 skill-cover">
         <h3 class="text-center text-white">Coding Skills</h3>
         <div class="row text-center my-auto ">
            @foreach ($skills as $skill)
            <div class="col-md-3 col-sm-6">
                <div class="skill-item">
                   <i class="{{ $skill->icons }} fa-5x"></i>
                    <h2><span class="counter"> {{ $skill->degree }} </span><span>%</span></h2>
                    <p>{{ $skill->title }}</p>
                </div>
            </div>
            @endforeach

         </div>
        </div>
     </section>
