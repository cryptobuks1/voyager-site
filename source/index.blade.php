@extends('_layouts.master', ['home' => true])

@section('body')
	<div class="content-wrapper oh">

      <!-- Hero -->
      <section class="hero bg-img bg-gradient white-text" style="background-image: url(/assets/images/hero/hero_1.jpg);">

        <div class="container  hero__container container-full-height">

          <div class="row hero__outer flex-vertical-align-center">
            <div class="col-md-5">
              <h1 class="hero__title hero--boxed">The Missing Laravel Admin</h1>
              <p style="margin-right:20px;">Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations, a media manager, menu builder, and much more.</p>
              <div class="hero__btn-holder mt-30">

                <a href="https://github.com/the-control-group/voyager" target="_blank" class="btn btn--lg btn--color rounded"><span><i class="voyager-github-icon" style="position:relative; left:-5px;"></i> View on Github</span></a>
                <div class="play-btn__wrap">
                  <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="play-btn play-btn--sm play-btn--white single-video-lightbox" style="border:none;"></a>
                  <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="single-video-lightbox" style="border:none;"><span class="play-btn__text">Learn More</span></a>
                </div>
              </div>
            </div>
            <div class="col-md-7 text-right hidden-sm hidden-xs hero-img">
              <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="hero-img-link single-video-lightbox">
                <img src="/assets/images/hero/hero-app.png" class="mt-40 heroapp" alt="">
              </a>
              <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="play-btn play-btn--center icon-wave single-video-lightbox"></a>
            </a>
          </div>

        </div>
      </section> <!-- end hero -->

      <!-- Partners -->
      <section class="partners text-center bottom-divider">
        <div class="container">
          <div class="row">
            <div class="featuredonh">Featured On</div>

            <div class="col-sm-5ths col-xs-3 col-xxs-6 featuredon">
              <a href="https://laravel-news.com/voyager" target="_blank">
                <img src="/assets/images/featured-on/laravelnews.png" alt="">
              </a>
            </div>
            <div class="col-sm-5ths col-xs-3 col-xxs-6 featuredon">
              <a href="https://www.sitepoint.com/voyager-can-an-admin-interface-make-laravel-even-more-approachable/" target="_blank">
                <img src="/assets/images/featured-on/sitepoint.png" alt="">
              </a>
            </div>
            <div class="col-sm-5ths col-xs-3 col-xxs-6 featuredon">
              <a href="https://packalyst.com/packages/package/tboztuna/voyager" target="_blank">
                <img src="/assets/images/featured-on/packalyst.png" alt="">
              </a>
            </div>
            <div class="col-sm-5ths col-xs-3 col-xxs-6 featuredon">
              <a href="https://devdojo.com/blog/tutorials/working-with-voyager-on-the-front-end" target="_blank">
                <img src="/assets/images/featured-on/devdojo.png" alt="">
              </a>
            </div>

            <div class="col-sm-5ths hidden-xs featuredon">
              <a href="http://www.thecontrolgroup.com/">
                <img src="/assets/images/featured-on/thecontrolgroup.png" alt="">
              </a>
            </div>

          </div>
        </div>
      </section> <!-- end partners -->


      <!-- Intro -->
      <section class="section-wrap bottom-divider">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <span class="intro__subtitle uppercase">Ahoy Matey & Welcome aboard!</span>
              <h2 class="intro__title">
                 Voyager will take care of your administrative tasks, this way you can<br> focus on what you do best, which is building the next kick-ass app!
              </h2>
            </div>
          </div>
        </div>
      </section> <!-- end intro -->

      <!-- Promo Section -->
      <section class="section-wrap promo-section bottom-divider pb-100">
        <div class="container ">
          <div class="row flex-parent flex-vertical-align-center flex-sm-collapse">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <img src="/assets/images/voyager-promo.png" alt="" class="promo-section__img">
              <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="play-btn play-btn--center icon-wave single-video-lightbox"></a>
            </div>
            <div class="col-md-5 col-md-offset-1 col-sm-12">
              <div class="promo-section__description">
                <h2 class="promo-section__title">Voyager is awesome <img src="/assets/images/emoji-smile.png" class="emoji emoji-36"></h2>
                <p class="lead">Voyager can save you so much time and it will make building applications even more fun!</p>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end promo section -->

      <!-- Promo Section -->
      <section class="section-wrap promo-section bottom-divider pb-100">
        <div class="container ">
          <div class="row flex-parent flex-vertical-align-center flex-sm-collapse">
            <div class="col-md-5 col-sm-12">
              <div class="promo-section__description">
                <h2 class="promo-section__title">BREAD functionality is baked right in! <img src="/assets/images/emoji-bread.png" class="emoji emoji-36"></h2>
                <p class="lead">Baked right in like a fresh loaf of BREAD! Voyager's admin interface allows you to create CRUD or BREAD (Browse, Read, Edit, Add, and Delete) functionality to your posts, pages, or any other table in your database.</p>
              </div>
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-12">
              <img src="/assets/images/voyager-bread.png" alt="" class="promo-section__img">
            </div>
          </div>
        </div>
      </section> <!-- end promo section -->

       <!-- Promo Section -->
       <section class="section-wrap promo-section bottom-divider pb-100 team">
        <div class="container ">
          
          <div class="row">
            <h2 class="text-center">Who's behind this awesomeness?</h2>
            <p class="lead text-center">Follow the team to learn about new updates and features.</p>
            <div class="col-md-4">
              <div class="testimonial box-shadow text-center clearfix">
                <img src="/assets/images/team/tnylea.jpg">
                <h4>Tony Lea</h4>
                <p class="team-desc">Creator / Maintainer</p>
                <a href="https://twitter.com/tnylea" target="_blank" class="follow-btn">
                  <svg width="24px" height="20px" viewBox="0 0 24 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="iconmonstr-twitter-1" fill="#FFFFFF">
                              <path d="M24,2.557 C23.117,2.949 22.168,3.213 21.172,3.332 C22.189,2.723 22.97,1.758 23.337,0.608 C22.386,1.172 21.332,1.582 20.21,1.803 C19.313,0.846 18.032,0.248 16.616,0.248 C13.437,0.248 11.101,3.214 11.819,6.293 C7.728,6.088 4.1,4.128 1.671,1.149 C0.381,3.362 1.002,6.257 3.194,7.723 C2.388,7.697 1.628,7.476 0.965,7.107 C0.911,9.388 2.546,11.522 4.914,11.997 C4.221,12.185 3.462,12.229 2.69,12.081 C3.316,14.037 5.134,15.46 7.29,15.5 C5.22,17.123 2.612,17.848 -1.77635684e-15,17.54 C2.179,18.937 4.768,19.752 7.548,19.752 C16.69,19.752 21.855,12.031 21.543,5.106 C22.505,4.411 23.34,3.544 24,2.557 Z" id="Path"></path>
                          </g>
                      </g>
                  </svg>Follow <span>@tnylea</span></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="testimonial box-shadow text-center clearfix">
                <img src="/assets/images/team/fletch3555.png">
                <h4>Eric Fletcher</h4>
                <p class="team-desc">Lead Maintainer / Support</p>
                <a href="https://twitter.com/fletch3555" target="_blank" class="follow-btn">
                  <svg width="24px" height="20px" viewBox="0 0 24 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="iconmonstr-twitter-1" fill="#FFFFFF">
                              <path d="M24,2.557 C23.117,2.949 22.168,3.213 21.172,3.332 C22.189,2.723 22.97,1.758 23.337,0.608 C22.386,1.172 21.332,1.582 20.21,1.803 C19.313,0.846 18.032,0.248 16.616,0.248 C13.437,0.248 11.101,3.214 11.819,6.293 C7.728,6.088 4.1,4.128 1.671,1.149 C0.381,3.362 1.002,6.257 3.194,7.723 C2.388,7.697 1.628,7.476 0.965,7.107 C0.911,9.388 2.546,11.522 4.914,11.997 C4.221,12.185 3.462,12.229 2.69,12.081 C3.316,14.037 5.134,15.46 7.29,15.5 C5.22,17.123 2.612,17.848 -1.77635684e-15,17.54 C2.179,18.937 4.768,19.752 7.548,19.752 C16.69,19.752 21.855,12.031 21.543,5.106 C22.505,4.411 23.34,3.544 24,2.557 Z" id="Path"></path>
                          </g>
                      </g>
                  </svg>Follow <span>@fletch3555</span></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="testimonial box-shadow text-center clearfix">
                <img src="/assets/images/team/emptynick.jpg">
                <h4>Christoph Schweppe</h4>
                <p class="team-desc">Maintainer / Support</p>
                <a href="https://twitter.com/emptynick" target="_blank" class="follow-btn">
                  <svg width="24px" height="20px" viewBox="0 0 24 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="iconmonstr-twitter-1" fill="#FFFFFF">
                              <path d="M24,2.557 C23.117,2.949 22.168,3.213 21.172,3.332 C22.189,2.723 22.97,1.758 23.337,0.608 C22.386,1.172 21.332,1.582 20.21,1.803 C19.313,0.846 18.032,0.248 16.616,0.248 C13.437,0.248 11.101,3.214 11.819,6.293 C7.728,6.088 4.1,4.128 1.671,1.149 C0.381,3.362 1.002,6.257 3.194,7.723 C2.388,7.697 1.628,7.476 0.965,7.107 C0.911,9.388 2.546,11.522 4.914,11.997 C4.221,12.185 3.462,12.229 2.69,12.081 C3.316,14.037 5.134,15.46 7.29,15.5 C5.22,17.123 2.612,17.848 -1.77635684e-15,17.54 C2.179,18.937 4.768,19.752 7.548,19.752 C16.69,19.752 21.855,12.031 21.543,5.106 C22.505,4.411 23.34,3.544 24,2.557 Z" id="Path"></path>
                          </g>
                      </g>
                  </svg>Follow <span>@emptynick</span></a>
              </div>
            </div>

          </div>
        </div>
      </section> <!-- end promo section -->

      <!-- Newsletter -->
      <section class="section-wrap newsletter bg-img bg-overlay white-text relative stats" style="background-image: url(/assets/images/voyager-stats-bg.jpg);">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-4 col-sm-6 counter-wrap">
                <i class="voyager-download" style="line-height:110px;"></i>
                <span class="timer" id="repo_downloads_count"></span>
                <span class="count-description">Downloads</span>
            </div>
            <div class="col-md-4 col-sm-6 counter-wrap">
                <i class="voyager-star"></i>
                <span class="timer" id="repo_stars"></span>
                <span class="count-description">Stars</span>
            </div>
            <div class="col-md-4 col-sm-6 counter-wrap">
                <i class="voyager-github"></i>
                <span class="timer" id="repo_forks"></span>
                <span class="count-description">Forks</span>
            </div>
        </div>
        </div>
      </section> <!-- end Newsletter -->
@endsection
