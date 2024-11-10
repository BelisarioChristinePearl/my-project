<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>
<body class="starter-page-page">

    <header id="header" class="header dark-background d-flex flex-column">
      <i class="header-toggle bi bi-list"></i>
  
      <div class="profile-img">
        <img src="assets/img/profile_pic.png" alt="" class="img-fluid rounded-circle">
      </div>
  
      <a href="index.html" class="logo d-flex align-items-center justify-content-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Pandagla, Sodais E.</h1>
      </a>
  
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="starter-page.html"><i class="bi bi-person navicon"></i> Home</a></li>
          <li><a href="deposit.html"><i class="bi bi-bank navicon"></i>Deposit</a></li>
          <li><a href="withdraw.html"><i class="bi bi-box-arrow-down navicon"></i>Withdraw</a></li>
          <li><a href="tracker.html"><i class="bi bi-person navicon"></i>Balance Tracking</a></li>
          <li><a href="trans.html"><i class="bi bi-person navicon"></i>Transaction History </a></li>
          <li><a href="#overview"><i class="bi bi-person navicon"></i> Overview</a></li>
        </ul>
      </nav>
  
    </header>
  
    <main class="main">

  
      <!-- Page Title -->
      <div class="page-title dark-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-10 mb-lg-0">Transaction History</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li><a href="login.html">logout</a></li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Starter Section Section -->
      <section id="starter-section" class="starter-section section dark-background">
       
        

          <div class="container my-5">
          
              <!-- Transaction History Table -->
              <div class="card mb-4">
                  <div class="card-header bg-info text-white">Transaction History</div>
                  <div class="card-body">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Date</th>
                                  <th>Transaction ID</th>
                                  <th>Type</th>
                                  <th>Amount</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          <tbody id="transactionTable">
                              <tr>
                                  <td>2024-10-10</td>
                                  <td>TXN001</td>
                                  <td>Deposit</td>
                                  <td>$500</td>
                                  <td><span class="badge bg-success">Completed</span></td>
                              </tr>
                              <tr>
                                  <td>2024-09-28</td>
                                  <td>TXN002</td>
                                  <td>Withdrawal</td>
                                  <td>$200</td>
                                  <td><span class="badge bg-danger">Failed</span></td>
                              </tr>
                              <tr>
                                  <td>2024-09-15</td>
                                  <td>TXN003</td>
                                  <td>Deposit</td>
                                  <td>$700</td>
                                  <td><span class="badge bg-warning">Pending</span></td>
                              </tr>
                              <!-- Add more rows as needed -->
                          </tbody>
                      </table>
                  </div>
              </div>
          
              <!-- Savings Chart -->
              <div class="card">
                  <div class="card-header bg-info text-white">Savings Progress Chart</div>
                  <div class="card-body">
                      <canvas id="savingsChart" height="100"></canvas>
                  </div>
              </div>
          </div>
          
          <!-- Bootstrap 5 JavaScript and dependencies -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
              // Sample data for monthly savings
              const savingsData = {
                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                  datasets: [{
                      label: 'Monthly Savings ($)',
                      data: [1000, 1200, 1500, 1800, 2000, 2500, 2300, 2600, 3000, 3200, 3500, 3800],
                      backgroundColor: 'rgba(75, 192, 192, 0.2)',
                      borderColor: 'rgba(75, 192, 192, 1)',
                      borderWidth: 2,
                      fill: true
                  }]
              };
          
              const config = {
                  type: 'line', // Line chart for savings progress
                  data: savingsData,
                  options: {
                      responsive: true,
                      plugins: {
                          legend: {
                              position: 'top',
                          },
                          tooltip: {
                              callbacks: {
                                  label: function(context) {
                                      return `Savings: $${context.raw}`;
                                  }
                              }
                          }
                      },
                      scales: {
                          y: {
                              beginAtZero: true,
                              title: {
                                  display: true,
                                  text: 'Amount ($)'
                              }
                          },
                          x: {
                              title: {
                                  display: true,
                                  text: 'Month'
                              }
                          }
                      }
                  }
              };
          
              // Render the savings chart
              const savingsChart = new Chart(
                  document.getElementById('savingsChart'),
                  config
              );
          </script>
          
          
        

       
      </section><!-- /Starter Section Section -->
  
    </main>
  
    <footer id="footer" class="footer position-relative dark-background">
  
      <div class="container">
      </div>
  
    </footer>
  
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>