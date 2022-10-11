<?php
include 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db');
$id = $_GET['edit'] ?? null;
$info="";

$sql = "SELECT * FROM useraccount WHERE `e_id`='$id'";
$result = mysqli_query($conn,$sql) or die (mysqli_error($sql));
if (!mysqli_num_rows($result) < 1){
  $info="No result found";
}
while ($row=mysqli_fetch_array($result)){
    $user = $row;
}
// var_dump($user);

if(isset($_POST['update']))
 {    
     $e_id = $id;
     $username = $_POST['username'];
     

     if($_POST['new_password1']==$_POST['new_password2']){
       $password = $_POST['new_password1'];
       $update = "UPDATE useraccount SET `password` = '$password' WHERE `e_id` =  '$e_id' ";
      
       $result = mysqli_query($conn, $update) or die (mysqli_error($update));

       if ($result) {
        $info ="<p class='text-success'>A Employee $username account has been updated successfully !</p>";
        
       } else {
           // echo "Error: " . $sql . ":-" . mysqli_error($conn);
           $info = ""; "<p class='text-danger'>An error has occured !</p>";
           
       }
     }else{
       echo "<p class='text-danger'>Umatching passwords!</p>";
     }
     
     
   }else{
     echo "<p class='text-danger'>Fill the form to change user's credentials</p>";
   }




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EDIT USERACCOUNT</title>
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
            <div class="php mt-3 h1 text-uppercase">
            <?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db

                //include_once 'db.php';
                if(isset($_POST['submit']))
                {    
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $tel = $_POST['contact'];
                    $address = $_POST['address'];
                    $weight = $_POST['weight'];
                    // $next_of_kin= $_POST['next_of_kin'];
                    
                    $UUID= uniqid ('P',true); // unique id generating function
                    $sql = "INSERT INTO PATIENT (name,age,gender,tel,address,weight,p_uid)
                    VALUES ('$name','$age','$gender','$tel','$address','$weight','$UUID')";

                    if (mysqli_query($conn, $sql)) {
                      echo "<p class='text-success'>A patient $name has been added successfully !</p>";
                    } else {
                        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                        echo "<p class='text-danger'>An error has occured !</p>";
                    }
                    mysqli_close($conn);
                }
            ?>
          
          </div>
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
        
        <div style="width:60em;"  class="row m-5 mt-auto mb-auto">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class=" align-items-end flex-wrap">
                                      
                     <div class="logo"><img style="width:6em;"  src="../../images/muni clinic.svg" alt="logo"></div>

                  <div class="d-flex mt-4">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Clinic Dashboard&nbsp;</p>
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  
                  <a href='account_edit.php' class="btn btn-primary mt-2 mt-xl-0">USERACCOUNTS</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
          
            
            <!-- MY FORM -->
            <div style="width:90%;" class="col-12 m-5 mt-auto grid-margin stretch-card">
              <div class="card">
                <div  class="card-body">
                  <h4 class="ms-5">EDIT USERACCOUNT</h4>
                  
                  <div class="m-5 d-flex">
                  <div class="col col-sm-2"> 
                  <img style='width: 180px; border-radius: 10px;' class='rounded img-fluid' src='../../profiles/default2.png'>
                  <?php 
                    // if (empty($user['picture'])){
                    //   echo "<img style='width: 180px; border-radius: 10px;' class='rounded img-fluid' src='../../profiles/default2.png'>";
                    // }else{
                    //   echo "<img class='rounded-0 img-fluid img-thumbnail' src='../../profiles/".$user['picture']."'>";
                    // }
                  
                    ?>

                    
                    
                  </div>
                  <div class="col col-sm   ms-2 mb-3">
                  <form  method="POST"  >
                  <p class="card-description">
                    Change users account credentials.
                  </p>
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="<?= $user['e_id'] ?>">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control"  id="name" name="username" value="<?= $user['username']  ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="gender" class="form-label">Old Password</label>
                <input type="int" class="form-control" disabled name="old_password" value="<?= $user['password']  ?>">
            </div>

            <div class="form-group mb-3">
                <label for="gender" class="form-label"> New Password</label>
                <input type="password" class="form-control" name="new_password1" >
            </div>

            <div class="form-group mb-3">
                <label for="gender" class="form-label"> Confirm Password</label>
                <input type="password" class="form-control" name="new_password2">
            </div>

            <input type="submit" class="btn btn-success" name="update" value="Update">
        </form>
        <p class=""><?php echo  empty($info) ? '' : $info;  ?></p>
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
