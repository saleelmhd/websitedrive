<?php
include 'connection.php';
if(isset($_POST['submit'])){
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
// $image = $_FILES['pic']['name'];
// if ($image != "") {
//     $filearray = pathinfo($_FILES['pic']['name']);
//     // var_dump($filearray);exit();

//     $file = rand();
//     $file_ext = $filearray["extension"];




//     $filenew = $file . "." . $file_ext;
//     // var_dump($filenew);exit();
//     move_uploaded_file($_FILES['pic']['tmp_name'], "./images/" . $filenew);
//     //var_dump($filenew);exit();
// }


 

    $data = mysqli_query($con,"insert into user_tb (name,email,generated_id,role) values('$name','$email','$password','Admin')");
    header("location:viewAdmins.php");
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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>

<body class="user-profile">
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
        
          <li class="active ">
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
      
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">

          <div class="card">
            <div class="card-header">
              <h5 class="title">ADD ADMINS</h5>
            </div>
            <div class="card-body">
            <form role="form" method="post" enctype="multipart/form-data">


                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
                  </div>
                </div>



                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email">

                  </div>
                </div>


                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                      <input id="passwordInput" name="password" type="text" class="form-control" placeholder="Password" readonly>
                      <div class="input-group-append">
                        <button type="button" onclick="generatePassword()">
                          <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
               
                <br>
                  <a href="dashboard.php">
                    <div class="col-md-6 pr-1">
                      <button name="submit" class="btn btn-primary btn-block">ADD</button>
                    </div></a>
              </form>
            </div>
          </div>


        </div>
      </div>

      <script>
        function generatePassword() {
          // Your password generation logic here
          var newPassword = generateRandomPassword();

          // Update the input field with the new password
          document.getElementById('passwordInput').value = newPassword;
        }

        function generateRandomPassword() {
          // Implement your random password generation logic here
          // Start with "Adm" followed by four numeric characters
          var numericPart = Math.floor(1000 + Math.random() * 9000); // Generates a random 4-digit number
          return 'Adm' + numericPart;
        }
      </script>

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
      <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
      <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
      <script src="../assets/demo/demo.js"></script>
</body>

</html>