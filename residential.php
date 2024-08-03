<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Prelaunch</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <?php
include('header.php');

    ?>
    <!-- ======= Hero Section ======= -->

    <main id="main">
      <section>
        <div class = "container-fluid">
          <div class = "row">
            <div class = "col-md-12 px-0 mx-0">
              <img src = "assets/img/residential-bg.jpg" class = "img-fluid">
            </div>

          </div>

        </div>
      </section>
      <section id="property" class="portfolio py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <!-- <h2>Property</h2> -->
            <p >Residential</p>
          </div>
          <ul class="nav nav-tabs" id="propertyTabs">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="warehouse-tab"
                data-toggle="tab"
                href="#warehouse"
                >Ready Possesion</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="openland-tab"
                data-toggle="tab"
                href="#openland"
                >Under Construction</a
              >
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" id="industrialshed-tab" data-toggle="tab" href="#industrialshed">Industrial Shed</a>
          </li> -->
          </ul>

          <!-- Tab Content -->
          <div class="tab-content pt-3">
            <!-- Warehouse Tab Content -->
            <div class="tab-pane fade show active" id="warehouse">
              <div class="row">
                <!-- Warehouse Ready to Move Card -->
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <img
                      src="assets/img/resi-rtm.jpg"
                      class="card-img-top"
                      alt="Warehouse - Ready to Move"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Apartment - Ready to Move</h5>
                      <p class="card-text">Location: Your Location</p>
                      <p class="card-text">Size: 1000 sq. ft.</p>
                      <p class="card-text">
                        Description: Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Warehouse Built to Suit Card -->
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <img
                      src="assets/img/resi-rtm2.jpg"
                      class="card-img-top"
                      alt="Warehouse - Built to Suit"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Apartment - Ready to Move</h5>
                      <p class="card-text">Location: Your Location</p>
                      <p class="card-text">Size: 2000 sq. ft.</p>
                      <p class="card-text">
                        Description: Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Open Land Tab Content -->
            <div class="tab-pane fade" id="openland">
              <div class="row">
                <!-- Open Land Card 1 -->
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <img
                      src="assets/img/uc-res5.jpg"
                      class="card-img-top"
                      alt="Open Land - Option 1"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Apartment - Under Construction</h5>
                      <p class="card-text">Location: Your Location</p>
                      <p class="card-text">Size: 1000 sqft</p>
                      <p class="card-text">
                        Description: Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Open Land Card 2 -->
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <img
                      src="assets/img/uc-res3.jpg"
                      class="card-img-top"
                      alt="Open Land - Option 2"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Apartment - Under Construction</h5>
                      <p class="card-text">Location: Your Location</p>
                      <p class="card-text">Size: 1000 sqft</p>
                      <p class="card-text">
                        Description: Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

    
    </main>
    <!-- End #main -->

<?php
include('footer.php');
?>
    
  </body>
</html>
