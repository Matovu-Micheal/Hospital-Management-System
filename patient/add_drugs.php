<?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db

$errors = "";
$UUID='';

//include_once 'db.php';
if(isset($_POST['submit']))
{    
    // $path = "images/";
    $info="";
    $date=$A =date ("y/m/j G:i:s", time());
    $drug = $_POST['drug'];
    $qty = $_POST['qty'];
    $p_date = $_POST['p_date'];
    $e_date = $_POST['e_date'];
    $UUID= uniqid ('D_',true); // unique id generating function
    $id=$UUID;
   
    $sql = "INSERT INTO pharmarcy (id,date,drug,quantity,purchase_date,expiry_date)
    VALUES ('$id','$date','$drug','$qty','$p_date','$e_date')";

    if (mysqli_query($conn, $sql)) {
      $info = "<p class='text-success'>A new drug <u>$drug</u> has been added successfully !</p>";
     
    } else {
      $info = "Error: " . $sql . ":-" . mysqli_error($conn);
        
    }
    mysqli_close($conn);
    
    
    

    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADD EMPLOYEE</title>
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

        <div style="width:91%; display: block; margin-left: auto; margin-right: auto;" class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="p-2 align-items-end flex-wrap">
                                      
                     <div class="logo"><img style="width:6em; ;"  src="../../images/muni clinic.svg" alt="logo"></div>

                  <div class="d-flex mt-4">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Clinic Dashboard&nbsp;</p>
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  
                  <a href="search_drugs.php" class="btn btn-primary mt-2 mt-xl-0">CHECK STOCK</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

          
            
            <!-- MY FORM -->
            <div  style="width:89%; display: block; margin-left: auto; margin-right: auto;" class="col-12 grid-margin stretch-card">
              <div class="card">
                <div  class="card-body">
                  <h4 class="mt-2">ADD DRUGS</h4>
                  <p class="card-description">
                    Add new drugs to the stock.
                  </p>
                  <p class=""><?php echo  empty($info) ? '' : $info;  ?></p>
                  
                  <form id='personal' style="width:90%;" method="POST"  class="mb-4 mt-2" enctype="multipart/form-data">
                 
                  
                    <div class="form-group mb-3">
                      <label for="name" class="form-label">Name of Drug</label>
                      <input type="text" class="form-control" id="name" name="drug" placeholder="Enter name of the Drug" required>
                    </div>
                    

          
                    <div class="form-group mb-3">
                      <label for="qty" class="form-label">Quantity:</label>
                      <input type="qty" class="form-control" id="qty" placeholder="Enter Quantity of the drug" name="qty">
                     </div>
          
                    <div class="form-group mb-3">
                      <label for="roles" class="form-label">Purchase date</label>
                      <input type="date" class="form-control" id="p_date" required name="p_date">
                    </div>
                    <div class="form-group mb-3">
                      <label for="e_date" class="form-label">Expiry date</label>
                      <input type="date" class="form-control" id="e_date" name="e_date">
                    </div>

                    
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>

                  
                  
                  
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
  

<!-- MY CUSTOM JAVASCRIPT -->

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
