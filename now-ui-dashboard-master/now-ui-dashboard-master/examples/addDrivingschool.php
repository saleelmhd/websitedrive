<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $address = $_POST['address'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
$image = $_FILES['pic']['name'];
if ($image != "") {
    $filearray = pathinfo($_FILES['pic']['name']);
    // var_dump($filearray);exit();

    $file = rand();
    $file_ext = $filearray["extension"];




    $filenew = $file . "." . $file_ext;
    // var_dump($filenew);exit();
    move_uploaded_file($_FILES['pic']['tmp_name'], "./images/" . $filenew);
    //var_dump($filenew);exit();
}


 

    $data = mysqli_query($con,"insert into driving_school_tb (name,address,phone_no,img) values('$name','$address','$phone','$filenew')");
    header("location:view driving school.php");
}



?>

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
  <div class="wrapper ">
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
            <li>
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
            <li class="active ">
                <a href="./view driving school">
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

      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-10">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Add Driving school</h6>
                <a href="view driving school.php" class="btn btn-primary">View all Driving school</a>
              </div>
              <div class="card-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                      <div class="mb-3" >
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
                          </div>
                        <!-- <input type="text" class="form-control form-control-lg" placeholder="Brand" aria-label="Brand"> -->
                      <!-- </div> -->
                      <div class="mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Address">
                      </div>
                      <div class="mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="Phone number" aria-label="Phone number">
                      </div>
                      <div class="mb-3">
                        <input type="file" name="pic" class="form-control" placeholder="Image" aria-label="Image">
                      </div>
                    
                      <a href="dashboard.php">
                      <div class="text-center">
                        <button name="submit" class="btn btn-primary btn-block">ADD</button>
                      </div></a>
                    </form>
                  </div>
      
      <!-- End Navbar -->
      
      
   
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