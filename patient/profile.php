<?php
include 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db');
session_start();
$id = $_SESSION['id'];

$sql = "SELECT * FROM patient WHERE `p_uid`='$id'";

$result = mysqli_query($conn,$sql) or die (mysqli_error($sql));
// var_dump($result);
if (!mysqli_num_rows($result) < 1){
  
}
while ($row=mysqli_fetch_array($result)){
    $user = $row;
}


// var_dump($user);

$sql2 = "SELECT * FROM next_of_kin WHERE `nk_id`='$id'";
  
$result2 = mysqli_query($conn,$sql2) or die (mysqli_error($sql2));

if (!mysqli_num_rows($result2) < 1){
  
}
while ($row=mysqli_fetch_array($result2)){
    $kin = $row;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APPOINTMENTS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/mycss.css">
  <link rel="stylesheet" href="../../css/patient_css.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="../../IMAGES/muni clinic.svg" />

  
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
        
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            
            
          
          
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src="../../images/icons8-user-60.png">
              <span class="nav-profile-name">user</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav  class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav p_nav">

          <li class="nav-item">
           
            <a class="nav-link" href="">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

           <!-- PROFILE -->
           <li class="nav-item">
            <a class="nav-link" >
              <img class="icon" src="../../images/profile.png">
              <span class="menu-title">PROFILE</span>
              </a>
            
          </li>
         
          <!-- MEDICAL RECORDS -->
          <li class="nav-item">
            <a class="nav-link " href="../../pages/patient/record.php">
              <img class="icon" src="../../images/pdf.png">
              <span class="menu-title">MEDICAL RECORDS</span>
              </a>
            
          </li>

           <!-- REQUEST FOR APPOINTMENTS -->
           <li class="nav-item">
            <a class="nav-link" href="../../pages/patient/appointments.php">
              <img class="icon" src="../../images/icons8-today-48.png">
              <span class="menu-title">REQUEST APPOINTMENT</span>
              </a>
            
          </li>

          <!-- PRESCRIPTIONS  -->
          <li class="nav-item">
            <a class="nav-link" >
              <img class="icon" src="../../images/icons8-add-list-40.png">
              <span class="menu-title">MY PRESCRIPTION</span>
              </a>
              
            
          </li>

          
          <!-- Order drugs -->
          <li class="nav-item">
            <a class="nav-link" >
              <img class="icon" src="../../images/icons8-shopping-cart-40.png">
              <span class="menu-title">ORDER DRUGS</span>
              </a>
              
            
          </li>

          <!-- REQUEST FOR APPOINTMENTS -->
          <li class="nav-item">
            <a class="nav-link" >
              <img class="icon" src="../../images/icons8-notification-48.png">
              <span class="menu-title">NOTIFICATIONS</span>
              </a>
            
          </li>
          
          <!-- FAQS -->
          <li class="nav-item">
            <a class="nav-link">
              <img class="icon" src="../../images/icons8-faq-40.png">
              <span class="menu-title">FAQS</span>
              </a>
              
            
          </li>
          <!-- FEEDBACK -->
          <li class="nav-item">
            <a class="nav-link" >
              <img class="icon" src="../../images/icons8-comments-48.png">
              <span class="menu-title">FEEDBACK</span>
              </a>
              
            
          </li>


       
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
        
        <div  class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="p-2 align-items-end flex-wrap">
                                      
                     <div class="logo"><img style="width:6em; ;"  src="../../images/muni clinic.svg" alt="logo"></div>

                  <div class="d-flex mt-4">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Clinic Dashboard&nbsp;</p>
                    
                  </div>
                </div>
                <!-- <div class="d-flex justify-content-between align-items-end flex-wrap">
                  
                  <a href="appointment_list.php"><button  class="btn btn-primary mt-2 mt-xl-0">CHECK APPOINTMENT LIST</button></a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="row container card p-4" >
            
            <div class="row">
            <div class="col-sm-3 mt-4" >
              <img style="width:8em;"  src='../../profiles/default2.png'>
            </div>
            <div class='col'>
              <p class="h5">PROFILE</p>
              <ul style="font-size:1rem;" class="list-style-none list-unstyled bg-info text-dark p-3">
                      <li><span >ID:</span><span class=" ms-2"><?php echo isset($user['p_uid']) ? $user['p_uid'] : "No Information"; ?></span></li>
                      <li><span>Name:</span><span class="ms-2"><?php echo isset($user['name']) ? $user['name'] : "No Information"; ?></span></li>
                      <li><span>Age:</span><span class=" ms-2"><?php echo isset($user['age']) ? $user['age'] : "No Information" ; ?></span></li>
                      <li><span>Gender:</span><span class="ms-2 "><?php echo isset($user['gender']) ? $user['gender'] : "No Information"; ?></span></li>
                      <span>Contact:</span><span class="ms-2"><?php echo isset($user['tel']) ? $user['tel'] : "No Information"; ?></span></li>
                      <li><span>Weight:</span><span class="ms-2"><?php echo isset($user['weight']) ? $user['weight'] : "No Information"; ?></span></li>
                    </ul>
                    <h5 class=''>NEXT OF KIN</h5>
                    <ul style="font-size:1rem;" class="list-style-none list-unstyled bg-info p-3">
                      <li><span >Name:</span><span class=" ms-2"><?php echo isset($kin['fname'],$kin['lname']) ? $kin['fname'].$kin['lname'] : "No information"; ?></span></li>
                      <li><span>Age:</span><span class="ms-2"><?php echo isset ($kin['age']) ? $kin['age'] : "No Information"; ?></span></li>
                      <li><span>Gender:</span><span class="ms-2 "><?php echo isset ($kin['gender']) ? $kin['gender']: "No Information" ; ?></span></li>
                      <span>Contact:</span><span class="ms-2"><?php echo isset ($kin['contact']) ? $kin['contact'] : "No Information"; ?></span></li>
                      <li><span>Address:</span><span class="ms-2"><?php echo isset ($kin['address']) ? $kin['address'] : "No Information"; ?></span></li>
                      <li><span>Relationship:</span><span class="ms-2"><?php echo isset ($kin['relationship']) ? $kin['relationship']: "No Information"; ?></span></li>
                    </ul>
            </div>
            </div>

            <!-- MY FORM ENDS HERE -->
            
            
            
            
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">MUNI UNIVERSITY </a>2022</span>
    
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
