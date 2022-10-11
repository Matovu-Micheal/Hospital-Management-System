<?php
require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db


$sql = "SELECT * FROM appointments ";

$result = $conn->query($sql) or die(mysqli_error($conn)); 
// $fetch = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APPOINTMENTS</title>
  <!-- BOOTSTRAP CDN -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/mycss.css">
  <link rel="stylesheet" href="../../css/ad_css.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/hospital-box.png" />
  <!-- ICON LINKS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
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
        <!-- <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
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
      <nav  class="sidebar  sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
           
            <a class="nav-link" href="">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- PATIENT -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icon" src="../../images/profile.png">
              <span class="menu-title">PATIENT</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="../../pages/employees/add_patient.php">ADD PATIENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/search_patient.php">CHECK PATIENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/medical_records.php">MEDICAL RECORD</a></li>
              </ul>
            </div>
          </li>

          <!-- EMPLOYEE -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
               <i class="mdi mdi-account-multiple-outline menu-icon"></i> -->
              <!-- <img src="../../images/icons8-name-tag-32.png">
              <span class="menu-title">EMPLOYEES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu list-unstyled">
               <li  class="nav-item list-unstyled "><div class="d-flex"><a class="nav-link" href="pages/admin/add_employee.php">ADD EMPLOYEE</a></div</li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/admin/search_employee.php">CHECK EMPLOYEE</a></li>
              </ul>
            </div>
          </li> -->

          <!-- APPOINTMENTS -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icon" src="../../images/icons8-today-48.png">
              <span class="menu-title">APPOINTMENTS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/appointments.php">CREATE APPOINTMENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/appointments_records.php">CHECK APPOINTMENT LIST</a></li>
              </ul>
            </div>
          </li> 

          <!-- USERS -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icon" src="../../images/icons8-member-skin-type-7-48.png">
              <span class="menu-title">USERS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/user_accounts.php">CREATE USER ACCOUNT</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/account_edit.php">EDIT USER ACCOUNT</a></li>
              </ul>
            </div>
          </li>


          <!-- DOCTOR -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icon" src="../../images/icons8-heart-health-64.png">
              <span class="menu-title">DOCTOR</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="../../pages/employees/diagnosis.php">DIAGNOSIS</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/prescription.php">PRESCRIPTION</a></li>
              </ul>
            </div>
          </li>

          <!-- PHARMARCY -->
          
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icon" src="../../images/icons8-pills-48.png">
              <span class="menu-title">PHARMARCY</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="../../pages/employees/add_drugs.php">ADD NEW DRUGS</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/employees/search_drugs.php">AVAILABE DRUGS</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">USED DRUGS</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">EXPIRED DRUGS</a></li>
              </ul>
            </div>
          </li>

          <!-- LAB -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icon" src="../../images/icons8-wear-laboratory-coat-48.png">
              <span class="menu-title">LABARATORY</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="../../pages/employees/labresults.php">LAB RESULTS</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="#">#</a></li> -->
              </ul>
            </div>
          </li>
         
          
          <!-- NEXT OF KIN -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <img class="icons" src="../../images/icons8-joining-queue-32.png">
              <span class="menu-title">NEXT OF KIN</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="../../pages/admin/next_of_kin.php">EMPLOYEE NEXT OF KIN </a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/admin/patient_next_of_kin.php">PATIENT NEXT OF KIN </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/admin/next_of_kin_record.php">NEXT OF KIN RECORDS</a></li>
              

              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            

            

            <!-- MY NEW USER ACCOUNT FORM ENDS HERE -->




            
            <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body m-4">
                  <h4>PATIENT APPOINTMENTS</h4>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="data table  table-bordered">
                      <thead class="table-primary">
                        <tr>
                            
                            <th>ID</th>
                            <th>APPOINTMENT DATE</th>
                            <th>DOCTOR/NURSE</th>
                            <th>REASON</th>
                            <th>ACTION</th>
                           
                            
                        </tr>
                      </thead>
                      <tbody>
                      <tr>  

                      <!-- PHP CODE -->
                      <?php
                       

                      if (mysqli_num_rows($result) > 0){
                        $html="";
                        while ($fetch = mysqli_fetch_array($result))
                          {
                            $html .= "<tr>";
                           
                            $html .= "<td>" . $fetch['p_uid'] . "</td>";
                            
                            $html .= "<td>" . $fetch['Appointment_date']  . "</td>";  
                            $html .= "<td>" . $fetch['healthworker'] . "</td>";
                            $html .= "<td>" . $fetch['Note'] . "</td>";
                            
                            
                            
                            $html .="<td>
                            <a href='nk-record.php?record=".$fetch['p_uid']."' class='' 
                             
                             title='Download'><img src='../../images/icons8-view-32.png'></a></td>";
                            
                            $html .= "</tr>";

                          }
                          
                          echo $html;
                          }                          
                           

                      ?>
                     
                         
                         
                      </tr>  
                     
                      
                      </tbody>
                    </table>

                   

                    

                    <div class="container py-5">
  
                  </div>

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


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script>
 



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
