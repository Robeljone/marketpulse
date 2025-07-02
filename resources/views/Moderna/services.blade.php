@include("../Moderna/includes/header")
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Our Services</h1>
        <p>
            We Sell - You Scale !
        </p>
        <nav class="breadcrumbs">

        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container">

            <div class="row gy-6">

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <img src="{{ asset('front/images/Sales_Execution.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Sales Execution</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <img src="{{ asset('front/images/Sales_Team.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Sales Team</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <img src="{{ asset('front/images/Sales_Strategy.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Sales Strategy</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <img src="{{ asset('front/images/DSR.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Retail Distribution Support</h3>
                        </a>

                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <img src="{{ asset('front/images/Training.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Training</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <img src="{{ asset('front/images/Call_Center.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Call Center</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
            </div>

        </div>

    </section>

    <!-- Services Section -->
<section id="services" class="services section">

  <div class="container" data-aos-delay="100">
    <div class="row gx-3 gy-4">
   <div class="col-lg-6 col-md-12">
        <p class="text-center fw-bold">Sectors</p>
        <div class="service-item position-relative text-center">
          <img src="{{ asset('front/images/Sectors.jpg') }}" class="img-fluid rounded" alt="Sectors">
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <p class="text-center fw-bold">Our Promise</p>
        <div class="service-item position-relative text-center">
          <img src="{{ asset('front/images/Promise.jpg') }}" class="img-fluid rounded" alt="Our Promise">
        </div>
      </div>



    </div>
  </div>

  <br>

  <div class="container" data-aos-delay="100">
    <div class="row gx-3 gy-4">

      <div class="col-lg-6 col-md-12">
        <p class="text-center fw-bold">What Set Us Apart</p>
        <div class="service-item position-relative text-center">
          <img src="{{ asset('front/images/Setus.jpg') }}" class="img-fluid rounded" alt="What Sets Us Apart">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <p class="text-center fw-bold">Proven Impact of Our Service</p>
        <div class="service-item position-relative text-center">
          <img src="{{ asset('front/images/Impact.jpg') }}" class="img-fluid rounded" alt="Impact">
        </div>
      </div>

    </div>
  </div>

</section>

</main>
@include("../Moderna/includes/footer")
