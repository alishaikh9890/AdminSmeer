  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/Prelaunch LLP Social MEdia.png"
                  alt="" style="max-width: 75%;
                height: auto;
                margin-bottom: 30px;"></a>

              <!-- <h3>Gp<span>.</span></h3> -->
              <p>
                Office No. 10, B3, Cerebrum, Kalyani Nagar, Pune, India, Maharashtra <br>
                <strong>Phone:</strong> +91 97654 64333<br>
                <strong>Email:</strong> sales@prelaunchprops.com<br>
              </p>
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="admin-panel.html">Admin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy-policy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Listing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Transaction Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Property Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Market Reasearch</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Need help getting started?</h4>
            <p>Schedule a call with our investment advisor today</p>
            <a class="btn propshare-button" href="tel:+919765464333">
            <i class="bi bi-phone"></i> <span>Schedule Call</span>
                        </a>

                        <div class="social-links mt-5">
                <a href="https://x.com/prelaunch_props" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/PrelaunchProps" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/prelaunch_propsofficial/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/@PrelaunchProps" class="google-plus"><i class="bx bxl-youtube"></i></a> 
                <a href="https://www.linkedin.com/company/prelaunch-props-advisory-llp/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PrelaunchProps</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://pulsefy.ai/" target = "blank">Pulsefy Technologies</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <script src="https://cdn.jsdelivr.net/boxicons/2.1.0/boxicons.min.js"></script>


  <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"
      integrity="sha384-xxxx"
      crossorigin="anonymous"
    ></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Popper.js -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
  crossorigin="anonymous"
></script>

<!-- Include Bootstrap JS -->
<!-- Bootstrap JS -->
<!-- Bootstrap JS -->

<!-- Include Bootstrap JS -->
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"
  integrity="sha384-xxxx"
  crossorigin="anonymous"
></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Boxicons -->
<script src="https://cdn.jsdelivr.net/boxicons/2.1.0/boxicons.min.js"></script>


  <!-- Template Main JS File -->
  <script>


    document.addEventListener("DOMContentLoaded", function() {
      // Get reference to form and property card container
      var searchForm = document.querySelector('#searchForm');
      var propertyCardsContainer = document.querySelector('#propertyCards');
  
      // Function to fetch default data
      function fetchDefaultData() {
        var requestBody = {
          area: "",
          bhk: "",
          budget: ""
        };
        fetch('http://localhost:5000/properties/getfilterdata',{
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(requestBody)
        })
          .then(response => response.json())
          .then(data => {
            propertyCardsContainer.innerHTML = '';
            data.filterdata.forEach(property => {
              var card = `
                <div class="card" style="width: 18rem; margin: 10px;">
                  <img class="card-img-top mt-3" src="http://localhost:5000/${property.image}" alt="Property Image">
                  <div class="card-body">
                    <h5 class="card-title">${property.projectName}</h5>
                    <p class="card-text">${property.propertydescription}</p>
                    <a href="property.html?id=${property._id}" class="btn btn-primary">View Details</a>
                  </div>
                </div>
              `;
              
              propertyCardsContainer.insertAdjacentHTML('beforeend', card);
            });
          })
          .catch(error => console.error('Error:', error));
      }
  
      // Fetch default data when the page loads
      fetchDefaultData();
  
      // Event listener for form submission
      searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission behavior
  
        // Get selected values from form
        var area = this.elements['areas'].value;
        var bhk = this.elements['config'].value;
        var budget = this.elements['price'].value;
  
        // Construct request body
        var requestBody = {
          area: area,
          bhk: bhk,
          budget: budget
        };
        // Fetch filtered data from API
        fetch('http://localhost:5000/properties/getfilterdata', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(requestBody)
        })
        .then(response => response.json())
        .then(data => {
          console.log(data);
          propertyCardsContainer.innerHTML = '';
          data.filterdata.forEach(property => {
            var card = `
              <div class="card" style="width: 18rem; margin-right: 10px;">
                <img class="card-img-top mt-3" src="http://localhost:5000/${property.image}" alt="Property Image">
                <div class="card-body">
                  <h5 class="card-title">${property.projectName}</h5>
                  <p class="card-text">${property.propertydescription}</p>
                  <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
            `;
            propertyCardsContainer.insertAdjacentHTML('beforeend', card);
          });
        })
        .catch(error => console.error('Error:', error));
      });
    });
    var resetButton = document.querySelector('#reset-btn');
    resetButton.addEventListener('click', function () {
  fetchDefaultData();
});
  </script>
  <script src="assets/js/main.js"></script>


  <script>
      $(document).ready(function () {
        // Your custom script here
        $("#propertyTabs a").click(function (e) {
          e.preventDefault();
          $(this).tab("show");
        });
      });
    </script>