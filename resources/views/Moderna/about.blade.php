@include('../Moderna/includes/header')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>About Us</h1>
            <p>We Sell - You Scale !</p>
            <nav class="breadcrumbs">
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('front/images/about_us.png') }}" class="img-fluid" alt="About us Picture">
                </div>
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                    {{-- <h3>Market Pulse.</h3> --}}
                    <p>
                        Market Pulse is a dedicated sales outsourcing agency founded by senior sales professionals with
                        over 15 years of experience in Ethiopia’s FMCG industry.
                        Our founders bring deep expertise from both local and multinational companies, giving us a
                        strong understanding of market dynamics.
                        We specialize in driving retail distribution, sales execution, lead generation, and
                        performance-focused field teams.
                        Our approach combines strategic insight with on-the-ground execution to deliver measurable sales
                        growth.
                        At Market Pulse, we tailor solutions to each client’s needs, ensuring agility, efficiency, and
                        market responsiveness.
                        We are committed to being a trusted partner in expanding market reach and maximizing sales
                        potential across Ethiopia.
                    </p>
                </div>
            </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Team</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container">
            <div class="container section-title" data-aos="fade-up">
                <h2>Proven Impact of our Service</h2>
                <p>&nbsp;</p>
            </div><!-- End Section Title -->
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center justify-content-center">
                    <div class="swiper-slide"><img src="{{ asset('front/images/company_1.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front/images/company_2.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front/images/company_3.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front/images/company_4.jpeg') }}" class="img-fluid"
                            alt=""></div>
                </div>
            </div>
        </div>

    </section><!-- /Clients Section -->
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front/images/dawit.png') }}" class="testimonial-img" alt="">
                            <h3>Dawit Desta</h3>
                            <h4>General Manager, HDS Trading</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>
                                    “Market pulse accelerated our retail penetration beyond expectations- they are more
                                    than outsourcing partner because they have also helped our in-house team for skill
                                    transfer...thank you alot”
                                </span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front/images/dawit.png') }}" class="testimonial-img" alt="">
                            <h3>Eyob Neguse</h3>
                            <h4>Commercial Manager, Menbler Trading PLC</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>
                                    "Market Pulse helped us boost our retail presence across key cities. Their execution
                                    is timely, professional, and result-driven."
                                </span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

</main>
@include('../Moderna/includes/footer')
