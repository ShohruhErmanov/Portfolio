  <!--====================================================
                        ABOUT
    ======================================================-->
  <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
      <div class="my-auto">

          <h1 class="mb-0">Shohruh
              <span class="text-primary">Ermanov</span>
          </h1>
          <div class="subheading mb-5">Web developer
              @foreach ($resumes as $resume)
                  <a href="/resume/{{ $resume->resume }}" download="">Download CV</a>
              @endforeach

          </div>
          <p class="mb-5" style="max-width: 500px; color: #000;">I am experienced in leveraging agile frameworks to provide a robust
              synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative
              thinking to further the overall value proposition.</p>
          <ul class="list-inline list-social-icons mb-0">
              <li class="list-inline-item">
                  <a href="https://t.me/web_developer_2006" target="_blanck">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-telegram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="https://www.instagram.com/shohruh_ermanov/" target="_blanck">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="https://www.facebook.com/profile.php?id=61551896453383" target="_blanck">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="https://twitter.com/wep_programmer" target="_blanck">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/shohruh-ermanov-78a4bb25b/" target="_blanck">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="https://github.com/ShohruhErmanov" target="_blanck">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>


          </ul>
      </div>
  </section>
