<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logodrivo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="sidebar" data-color="red">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
      <a href="" class="simple-text logo-normal">
          DRIVO
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
         
          <li>
            <a href="./Add Admins.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>ADD ADMINS</p>
            </a>
          </li>
          <li>
            <a href="./students.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Students</p>
            </a>
          </li>
          <li>
            <a href="./tutors.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Tutors</p>
            </a>
          </li>
          <li>
            <a href="./viewAdmins.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Admins</p>
            </a>
          </li>
          <li>
            <a href="./addDrivingschool.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>ADD DRIVING SCHOOL</p>
            </a>
          </li>
          <li>
                <a href="./view driving school.php">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>VIEW DRIVING SCHOOL</p>
                </a>
              </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
           
            
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
       
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
               
              <h5 class="card-category"><br></h5>
              <h5 class="card-category"><br></h5>
             
                <h5 style="text-align: center;"> Total Driving Schools</h5>
              </div>
             
              <div class="card-body">
              <h6 class="card-category"><br></h6>
              <h5 style="text-align: center;"> 
                <?php
                      include 'connection.php';
                      $data = mysqli_query($con,"select count(id)from driving_school_tb;");
                      $row = mysqli_fetch_assoc($data);
                      echo $row['count(id)'];

                      ?></h5>
                  <!-- <div class="chart-area">
                      <canvas id="barChartSimpleGradientsNumbers"></canvas>
                  </div> -->
                  <h4 class="card-category"><br></h4>
                  <h5 class="card-category"><br></h5>
               
                 
             
                </div>
              
            </div>
          </div>


          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
               
                <h5 class="card-category"><br></h5>
               
                <h4 style="text-align: center;">Total Admins</h4>
               
              </div>
              <div class="card-body">
                <h4 style="text-align: center;"> 
                <?php
                      include 'connection.php';
                      $data = mysqli_query($con,"select count(user_id) from user_tb WHERE role='Admin';");
                      $row = mysqli_fetch_assoc($data);
                      echo $row['count(user_id)'];

                      ?></h4>
                <!-- <div class="chart-area">
                    <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div> -->
                <h5 class="card-category"><br></h5>
                <h5 class="card-category"><br></h5>
              
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
               
                <h5 class="card-category"><br></h5>
               
                <h4 style="text-align: center;">Total Tutors</h4>
               
              </div>
              <div class="card-body">
                <h4 style="text-align: center;"> 
                <?php
                      include 'connection.php';
                      $data = mysqli_query($con,"select count(user_id) from user_tb WHERE role='Tutor';");
                      $row = mysqli_fetch_assoc($data);
                      echo $row['count(user_id)'];

                      ?></h4>
                <!-- <div class="chart-area">
                    <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div> -->
                <h5 class="card-category"><br></h5>
                <h5 class="card-category"><br></h5>
              
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category"><br></h5>
                    
                    <h4 style="text-align: center;">Total Students</h4>
                </div>
                <div class="card-body">
                    <h4 style="text-align: center;"> <?php
                      include 'connection.php';
                      $data = mysqli_query($con,"select count(user_id) from user_tb WHERE role='student';");
                      $row = mysqli_fetch_assoc($data);
                      echo $row['count(user_id)'];

                      ?></h4>
                    <!-- <div class="chart-area">
                        <canvas id="barChartSimpleGradientsNumbers"></canvas>
                    </div> -->
                    <h5 class="card-category"><br></h5>
                    <h5 class="card-category"><br></h5>
               
                  </div>
            </div>
        </div>
        
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>