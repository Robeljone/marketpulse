  <footer id="footer" class="footer dark-background">
      <div class="container footer-top">
          <div class="row gy-4">
              <div class="col-lg-4 col-md-6 footer-about">
                  <a href="index.html" class="d-flex align-items-center">
                      <span class="sitename">Market pulse</span>
                  </a>
                  <div class="footer-contact pt-3">
                      <p>Addis Ababa, Ethiopia</p>
                      <p class="mt-3">
                    <span>
                        <a href="tel: +251 911268595"><i class="bi bi-telephone"></i>
                        </a>+251 911268595 <a href="tel: +251 922793008"><i class="bi bi-telephone"></i>
                        </a>+251 922793008</span></p>
                      <p><a href="mailto:info@marketpulse.com"><i class="bi-envelope"></i>
                        </a><span>info@marketpulseteam.com
                    </span></p>
                  </div>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><a href="index">Home</a></li>
                      <li><a href="about">About</a></li>
                      <li><a href="services">Services</a></li>
                      <li><a href="portfolio">Carrer</a></li>
                      <li><a href="contact">Contact</a></li>
                  </ul>
              </div>

              <div class="col-lg-2 col-md-3 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                      <li><a href="#">Sales Execution</a></i>
                      <li><a href="#">Retail Executions</a></i>
                      <li><a href="#">Outsourced Sales Team</a></i>
                      <li><a href="#">Sales Strategy Consulting</a></i>
                      <li><a href="#">Sales Training Programs</a></i>
                      <li><a href="#">Tele Sales & Lead Generation</a></i>
                  </ul>
              </div>

              <div class="col-lg-4 col-md-12">
                  <h4>Follow Us</h4>
                  <div class="social-links d-flex">
                      <a href="https://www.linkedin.com/company/market-pulse-team/?viewAsMember=true" target="_blank"><i
                              class="bi bi-linkedin"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                  </div>
              </div>

          </div>
      </div>

      <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong>Market Pulse</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you've purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
              Designed by <a href="#" style="color: rgb(246, 248, 250)">Market Pulse Team</a>
          </div>
      </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <script>
      let currentIndex = 0;

      function moveSlide(step) {
          const slider = document.getElementById("slider");
          const totalSlides = slider.children.length;

          currentIndex += step;

          if (currentIndex < 0) currentIndex = totalSlides - 1;
          if (currentIndex >= totalSlides) currentIndex = 0;

          slider.style.transform = `translateX(-${currentIndex * 100}vw)`;
      }
  </script>


  <!-- Vendor JS Files -->
  <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('front/assets/js/main.js') }}"></script>

  </body>

  </html>
