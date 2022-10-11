<?php
include 'D:\APPLICATIONS\xammp\htdocs\MUNI CLINIC\php\connection.php'; //connecting to db');

$id =(int) $_GET['select'] ?? null;

// $sql="SELECT 
// employee.*,
// next_of_kin.*,
// FROM
// employee
// INNER JOIN
// next_of_kin ON next_of_kin.e_nkid=employee.e_id
// WHERE employee.e_id = $id
// ";



$sql = "SELECT * FROM employee WHERE `e_id`='$id'";

$result = mysqli_query($conn,$sql) or die (mysqli_error($sql));

if (!mysqli_num_rows($result) < 1){
  
}
while ($row=mysqli_fetch_array($result)){
    $user = $row;
}
$sql2 = "SELECT * FROM next_of_kin WHERE `e_nkid`='$id'";
  
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
  <title>EMPLOYEE PROFILE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/mycss.css">
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
            <div style="width:90%;" class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="p-2 align-items-end flex-wrap">
                                      
                     <div class="logo"><img style="width:6em;"  src="../../images/muni clinic.svg" alt="logo"></div>

                  <div class="d-flex mt-4">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Clinic Dashboard&nbsp;</p>
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  
                  <a href='search_employee.php' class="btn btn-primary mt-2 mt-xl-0">SEARCH EMPLOYEE</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row"> 

          
            
            <div style="width:90%;" class="col-12 grid-margin stretch-card">
              <div class="card ">
                
                <div  class="card-body">
                  <div class="card-title ms-5"><h4>EMPLOYEE INFORMATION</h4></div>
                  <!-- <p class=""><?php echo  empty($errors) ? '' : $errors;  ?></p> -->
                  <div class="m-5 d-flex">
                  <div class="image col col-sm-2"> 
                    <?php 
                    if (empty($user['picture'])){
                      echo "<img style='width: 180px; border-radius: 10px;' class='rounded img-fluid' src='../../profiles/default2.png'>";
                    }else{
                      echo "<img class='rounded-0 img-fluid img-thumbnail' src='../../profiles/".$user['picture']."'>";
                    }
                  
                    ?>

                    
                    
                  </div>
                  
                  <div class='col ms-4'>
                    <h5>PERSONAL DETAILS</h5>
                    <ul style="font-size:1rem;" class="list-style-none list-unstyled">
                      <li><span >ID:</span><span class="text-primary ms-2"><?php echo $user['e_id']; ?></span></li>
                      <li><span>Name:</span><span class="text-primary ms-2"><?php echo $user['name']; ?></span></li>
                      <li><span>Role:</span><span class="text-primary ms-2"><?php echo $user['role']; ?></span></li>
                      <li><span>Gender:</span><span class="text-primary ms-2 "><?php echo $user['gender']; ?></span></li>
                      <span>Age:</span><span class="text-primary ms-2"><?php echo $user['age']; ?></span></li>
                      <li><span>Contact:</span><span class="text-primary ms-2"><?php echo $user['contact']; ?></span></li>
                    </ul>
                    <h5 class='btn btn-primary'>NEXT OF KIN</h5>
                    <ul style="font-size:1rem;" class="list-style-none list-unstyled">
                      <li><span >Name:</span><span class="text-primary ms-2"><?php echo  isset($kin['fname'],$kin['lname']) ? $kin['fname'].$kin['lname'] : "NO INFORMATION";  ?></span></li>
                      <li><span>Age:</span><span class="text-primary ms-2"><?php echo $kin['age']; ?></span></li>
                      <li><span>Gender:</span><span class="text-primary ms-2 "><?php echo $kin['gender']; ?></span></li>
                      <span>Contact:</span><span class="text-primary ms-2"><?php echo $kin['contact']; ?></span></li>
                      <li><span>Address:</span><span class="text-primary ms-2"><?php echo $kin['address']; ?></span></li>
                      <li><span>Relationship:</span><span class="text-primary ms-2"><?php echo $kin['relationship']; ?></span></li>
                    </ul>
                  </div>
                  </div>
                   
              </div>
                
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
