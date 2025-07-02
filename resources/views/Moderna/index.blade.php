@include('../Moderna/includes/header')
<main class="main">

    <!-- Hero Section -->
    <section style="">
        <div class="slider-container">
            <div class="slider" id="slider">
                <img src="{{ asset('front/images/addmer.jpg') }}" alt="Mercato" />
                <img src="{{ asset('front/images/office_2.jpeg') }}" alt="Office picture 2" />
                <img src="{{ asset('front/images/office_3.jpeg') }}" alt="Office picture 3" />
            </div>

            <button class="nav prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="nav next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </section><!-- /Hero Section -->

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

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <img src="{{ asset('front/images/DSR.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Retail Execution</h3>
                        </a>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <img src="{{ asset('front/images/Sales_Team.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Outsourced Sales Team</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <img src="{{ asset('front/images/Sales_Strategy.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Sales Strategy Consulting</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <img src="{{ asset('front/images/Training.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Sales Training Programs</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <img src="{{ asset('front/images/Call_Center.png') }}" style="height: 100px; width: 90px" />
                        <a href="service-details.html" class="stretched-link">
                            <h3>Tele Sales & Lead Generation</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
            </div>

        </div>

    </section><!-- /Featured Services Section -->
    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Services</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('front/Gif/sales_excution.gif') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Sales Execution</h3>
                    <p class="fst-italic">
                    We deliver frontline sales execution of your products through executing door to door sales visit,
                    pitching a product, generate orders, closing sales and installing consistent movement across
                    traditional & modern trade channels.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('front/Gif/retail.gif') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Retail Executions</h3>
                    <p class="fst-italic">
                    We ensure flawless in-store execution by placing trained sales reps and merchandisers to drive visibility,
                    availability, and compliance. Our team monitors retail shelves, planogram adherence, and competitor
                    activities in real-time.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('front/Gif/outsource.gif') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Outsourced Sales Team</h3>
                    <p>
                        We hire, train & deploy competitive field sales team that can lead by your team, to manage territories,
                        building retailer relationships, and driving in-store sales performance with measurable results.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('front/Gif/sales_startegy.gif') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>
                        Sales Strategy Consulting
                    </h3>
                    <p class="fst-italic">
                    We help brands develop practical, data-backed sales strategies—covering route-to-market, pricing, channel segmentation, and retail execution models.
                    </p>
                </div>
            </div><!-- Features Item -->

           <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('front/Gif/sales_training.gif') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Sales Training Programs</h3>
                    <p>
                    We offer tailored training to equip FMCG sales teams with skills in retail selling, outlet coverage, merchandising standards, and trade engagement techniques.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('front/Gif/lead.gif') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>
                        Tele Sales & Lead Generation
                    </h3>
                    <p class="fst-italic">
                     Our telesales specialists generate leads, take reorders, and re-engage retailers—ensuring your brand maintains
                     consistent outreach and demand generation in key markets.
                    </p>
                </div>
            </div><!-- Features Item -->


        </div>

    </section><!-- /Features Section -->

</main>
@include('../Moderna//includes/footer')
