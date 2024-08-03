<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prelaunch </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<?php
include('header.php');
?>
 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Welcome to Prelaunchprops</h1>
          <h2>Your Gateway to Pune's Prime Property Investments</h2>
        </div>
      </div>

    
      <div class="row mt-5">
        <div class="col-sm-9 offset-sm-2 rounded" data-aos="fade-up"
          >
          <div class="row row-og2 ml-0" >
          <div class="row">
        <div class="col-sm-12 col-md-7" id="coloog">
            <div class="row rowog-5">
                <div class="col-6 col-sm-3">
                    <a href="#" class="btn btn-category" data-category="residential">
                        Residential
                    </a>
                </div>
                <div class="col-6 col-sm-3">
                    <a href="#" class="btn btn-category" data-category="commercial">
                        Commercial
                    </a>
                </div>
                <div class="col-6 col-sm-3">
                    <a href="#" class="btn btn-category" data-category="industrial">
                        Industrial
                    </a>
                </div>
                <div class="col-6 col-sm-3">
                    <a href="#" class="btn btn-category" data-category="preleased">
                        Preleased
                    </a>
                </div>
            </div>
        </div>
    </div>
          <div class="row row-og mt-3" id="row-og" style="margin-bottom: 1rem;">
            <div style="padding-left:0px;">
              <div class="row text-center">
                <div class="col-sm-12" style="padding: 4px 0 0 0;text-align:right;">
                  <div class="search-box-holder" >
                    <form autocomplete="off" action="#" method="get" id="searchForm">
                      <!-- <input type="hidden" name="_token" value="3u0PcSTFl43FZioKkEMFKNF2DKCzReo0aq3ScgE2"> -->
                      <div class="row">
                        <div class="col m-0 ml-3 mr-1  mx-auto">
                          <select name="areas" class="form-control select-search" data-placeholder="Choose areas..."
                            id="">
                            <option value="" disabled="" selected="" hidden="">Select Area</option>
                            <option value="Kharadi">Kharadi
                            </option>
                            <option value="Upper Koregaon Park">Upper Koregaon Park
                            </option>

                          </select>
                        </div>
                        <div class="col m-0 mr-1 p-0 mx-auto">
                          <select class="form-control select-search" name="config">
                            <option value="" disabled="" selected="" hidden="">Select
                            </option>
                            <!-- <option value="1BHK">1BHK</option> -->
                            <option value="2">2BHK</option>
                            <option value="2.5">2.5BHK</option>
                            <option value="3">3BHK</option>
                            <option value="3.5">3.5BHK</option>
                            <option value="4">4BHK</option>
                            <option value="4.5">4.5BHK</option>
                          </select>
                        </div>
                        <div class="col m-0 mr-1  mx-auto">
                          <select name="price" class="form-control select-search" id="">
                            <option value="" disabled="" selected="" hidden="">Select Budget</option>
                            <option value="80 - 90">80L - 90L</option>
                            <option value="90 - 1">90L - 1Cr</option>
                            <option value="1 - 3">1Cr - 3Cr</option>
                            <option value="3 - 5">3Cr - 5Cr</option>
                            <option value="5">5Cr and above</option>
                          </select>
                        </div>

                        <div class="col m-0 mr-3 p-0 mx-auto">
                          <div class="row">
                            <div class="col d-flex">
                              <button type="submit" class="btn-primary btn-block" style="height: 40px; background-color: #FA5F2E; margin-right: 1rem;    border-radius: 9px;" onmouseover="this.style.backgroundColor='#1A1F71';" onmouseout="this.style.backgroundColor='#FA5F2E';">
                                <i class="bx bx-search" style="color:#ffffff; font-size: 22px;" title="Search"></i>
                              </button>
                              <button type="button" class="btn-primary btn-block" id="reset-btn" style="height: 40px; background-color: #FA5F2E; width: 36%; border-radius: 9px;" onmouseover="this.style.backgroundColor='#1A1F71';" onmouseout="this.style.backgroundColor='#FA5F2E';">
                                <i class="bx bx-reset" style="color:#ffffff; font-size: 22px;" title="Reset"></i>
                              </button>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->


  <section id="cardinfo">
    <div class="container">
      <div class="section-title">
        <h2>Properties</h2>
        <p>Check our Properties</p>
      </div>
      <div class="row" id="propertyCards" style="margin-left: 38px;">
      </div>
    </div>
  </section>
  

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 mt-5 ml-5 content" data-aos="fade-right" data-aos-delay="100">
            <h3>About Us</h3>
            <p style="font-size: 1.3rem;" class="mt-4">
              At prelaunch props, we stand as the epitome of excellence in the dynamic realm of Pune's real estate.
              As the premier property investment platform, we specialize in the prelaunch of residential properties
              along with expertise in industrial and commercial properties. At prelaunch props, we offer dedicated
              services that go beyond transactions — it's about building lasting partnerships.
            </p>

            <p>

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right">
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Financial Advice</h4>
              <p style="text-align: justify; ">Our financial advice service offers personalized guidance and strategic insights to help clients achieve their financial goals, whether it's wealth management, retirement planning, investment strategies, or financial risk mitigation.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Legal Assistance</h4>
              <p style="text-align: justify; ">Our legal assistance service provides comprehensive support and guidance, ensuring clients navigate legal complexities with confidence. From contract reviews and legal documentation to dispute resolution and compliance, we offer tailored solutions to safeguard your interests and ensure legal peace of mind.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class='bx bxs-user'></i>
              <h4>Customer Satisfaction</h4>
              <p style="text-align: justify; ">Customer satisfaction is at the heart of everything we do. We prioritize understanding and exceeding our clients' needs and expectations. With a commitment to exceptional service, continuous improvement, and open communication, we strive to foster lasting relationships built on trust and satisfaction.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class='bx bx-rupee'></i>
              <h4>Loan Assistance</h4>
              <p style="text-align: justify; ">Our loan assistance service is designed to simplify the borrowing process and empower clients with the knowledge and resources needed to secure favorable loan options. From assessing financial needs to navigating loan applications and negotiating terms, we provide expert guidance every step of the way, helping you make informed decisions and achieve your financial objectives.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-notepad'></i></div>
              <h4><a href="">Property Consultation & Advisory</a></h4>
              <p style="text-align: justify; ">Our expert team at prelaunch props offers personalized consultations and advisory services.
                Whether you're a business looking to expand, an investor seeking opportunities, or a property
                seeker navigating the market, we provide in-depth insights and strategic guidance to help you make
                informed decisions.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-business'></i></div>
              <h4><a href="">Property Listing & Marketing</a></h4>
              <p style="text-align: justify; margin-top: 50px;">For property owners looking to sell or lease, we provide comprehensive listing and marketing services.
                Through targeted strategies and a wide network, we ensure maximum exposure for your property,
                attracting potential buyers or tenants.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Investment Analysis</a></h4>
              <p style="text-align: justify; margin-top: 50px;">Navigating the complex world of real estate investments requires careful analysis. Prelaunchprops
                offers detailed investment analysis services, helping investors identify lucrative opportunities and
                make sound investment decisions.

              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-credit-card'></i></div>
              <h4><a href="">Transaction Management</a></h4>
              <p style="text-align: justify; margin-top: 50px;">From negotiation to finalizing deals, prelaunch props manages the entire transaction process.
                Our team ensures smooth and transparent transactions, handling the paperwork, legalities,
                and coordination to streamline the process for our clients.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-group'></i></div>
              <h4><a href="">Property Management</a></h4>
              <p style="text-align: justify; margin-top: 50px;">
                For property owners, our property management services ensure that your investment
                is well-maintained. From tenant relations to routine maintenance, we take care of the
                day-to-day responsibilities, allowing you to focus on your core business.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-bar-chart-alt-2'></i></div>
              <h4><a href="">Market Research & Insights</a></h4>
              <p style="text-align: justify; margin-top: 50px;">Staying ahead in the dynamic real estate market requires up-to-date information.
                Prelaunch props provides market research and insights, keeping our clients informed
                about trends, opportunities, and potential challenges in Pune's residential, industrial
                and commercial sectors.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="property" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Property</h2>
          <p>Check our Properties</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100" >
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Mahindra Lifespace</li>
              <li data-filter=".filter-app">Lodha Giardino</li>
              <li data-filter=".filter-card">Supreme Tower</li>
              <!-- <li data-filter=".filter-web">Mantra Mirari</li>
              <li data-filter=".filter-web">Avanta</li>
              <li data-filter=".filter-web">Evolus</li>-->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/new/mumbai-city-skyline-aerial-panorama (1).jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 1</h4>
                <!-- <p>App</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/mumbai-city-skyline-aerial-panorama (1).jpg"" data-gallery=" portfolioGallery"
                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/new/homebg5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 2</h4>
                <!-- <p>Web</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/homebg5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/new/homgbg4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/new/homgbg4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/new/japan-urban-landscape-night-time (1).jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 4</h4>
                <!-- <p>Card</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/japan-urban-landscape-night-time (1).jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/new/resident-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 5</h4>
                <!-- <p>Web</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/resident-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/new/rtm-res3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 6</h4>
                <!-- <p>App</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/rtm-res3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/new/rtm-res2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 7</h4>
                <!-- <p>Card</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/rtm-res2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/new/rtm-res1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 8</h4>
                <!-- <p>Card</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/rtm-res1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/new/rtm-res6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Property 9</h4>
                <!-- <p>Web</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/new/rtm-res6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="property-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
            data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
            data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3 style="margin: auto;">Why Choose Us</h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
              <div class="row">
                <div class="col-lg-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <!-- <i class="bi bi-emoji-smile"></i> -->
                    <!-- <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span> -->
                    <p><strong>Client Satisfaction Guaranteed :
                      </strong> Your satisfaction is our success. We prioritize your needs, preferences, and goals,
                      working tirelessly to deliver results that exceed expectations. Whether you're looking to expand
                      your business, make a strategic investment, or find the perfect property, Realty Works is your
                      trusted partner.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <!-- <i class="bi bi-journal-richtext"></i> -->
                    <!-- <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span> -->
                    <p><strong>Transparency as a Foundation :
                      </strong>Transparency is at the heart of our operations. We believe in clear communication, honest
                      dealings, and providing our clients with the information they need to make informed decisions. Our
                      commitment to transparency has earned us the trust of businesses and investors alike.

                    </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <!-- <i class="bi bi-clock"></i> -->
                    <!-- <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span> -->
                    <p><strong>Expertise in prelaunch properties :</strong> With a keen focus on the prelaunch of
                      residential properties, prelaunch props brings a wealth of specialized knowledge to the table. We
                      understand the nuances of these sectors, allowing us to guide businesses, investors, and property
                      seekers toward lucrative opportunities.

                    </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <!-- <i class="bi bi-award"></i> -->
                    <!-- <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span> -->
                    <p><strong>Commitment to Excellence :</strong> Excellence is not just a goal; it's our standard.
                      From property selection to transaction execution, we maintain the highest standards to ensure that
                      every client's experience with prelaunch props is nothing short of exceptional. We make sure every
                      query of are client is answered.

                    </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <!-- <h4>Ceo &amp; Founder</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "We've been partnering with PrelaunchProps for several years, and their commitment to excellence is evident in every interaction. Their expertise in real estate and personalized service make them a trusted partner in our business."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <!-- <h4>Designer</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "We've been partnering with PrelaunchProps for several years, and their commitment to excellence is evident in every interaction. Their expertise in real estate and personalized service make them a trusted partner in our business."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <!-- <h4>Store Owner</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "We've been partnering with PrelaunchProps for several years, and their commitment to excellence is evident in every interaction. Their expertise in real estate and personalized service make them a trusted partner in our business."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <!-- <h4>Freelancer</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "We've been partnering with PrelaunchProps for several years, and their commitment to excellence is evident in every interaction. Their expertise in real estate and personalized service make them a trusted partner in our business."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <!-- <h4>Entrepreneur</h4> -->
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <section id="clients" class="clients">
      <div class="container mt-5" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/new/WhatsApp Image 2024-02-21 at 18.12.14.jpeg"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/new/WhatsApp Image 2024-02-21 at 18.13.24.jpeg"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/new/WhatsApp Image 2024-02-21 at 18.17.33.jpeg"
                class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/new/WhatsApp Image 2024-02-21 at 18.23.53.jpeg"
                class="img-fluid" alt=""></div>
            <!-- <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div> -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.643253323356!2d73.90796592501374!3d18.545016632553274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c10d3fa8540f%3A0x4a7974e90b67294!2sCerebrum%20IT%20Park%20-%20B3!5e0!3m2!1sen!2sin!4v1708500992022!5m2!1sen!2sin"
            frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Office No. 10, B3, Cerebrum, Kalyani Nagar, Pune, India, Maharashtra</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sales@prelaunchprops.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 97654 64333</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form  class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php
include('footer.php');
?>
</body>

</html>