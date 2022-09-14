<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SEARCH PATIENT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
 
  <!-- ICONS -->
  <link rel="shortcut icon" href="../../IMAGES/muni clinic.svg" />

  <style>
    
    body{
        font-family:raleway,'Roboto', sans-serif;
        
    }
  </style>
  
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
      <nav style="font-family:raleway,'Roboto', sans-serif; font: weight 500px;" class="sidebar  sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
           
            <a class="nav-link" href="../../index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- PATIENT -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <img class="icons" src="../../images/icons8-patient-32.png">
              <span class="menu-title">PATIENT</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="add_patient.php">ADD PATIENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="search_patient.php">CHECK PATIENT</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="medical_records.php">MEDICAL RECORD</a></li> -->
              </ul>
            </div>
          </li>

          <!-- EMPLOYEE -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <!-- <i class="mdi mdi-account-multiple-outline menu-icon"></i> -->
              <img src="../../images/icons8-name-tag-32.png">
              <span class="menu-title">EMPLOYEES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu list-unstyled">
               <li  class="nav-item list-unstyled "><div class="d-flex"><a class="nav-link" href="add_employee.php">ADD EMPLOYEE</a></div</li>
                <li class="nav-item"> <a class="nav-link" href="search_employee.php">CHECK EMPLOYEE</a></li>
              </ul>
            </div>
          </li>

          <!-- APPOINTMENTS -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <img src="../../images/icons8-appointment-32.png">
              <span class="menu-title">APPOINTMENTS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="appointments.php">CREATE APPOINTMENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">CHECK APPOINTMENT LIST</a></li>
              </ul>
            </div>
          </li> -->

          <!-- USERS -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <img src="../../images/icons8-member-skin-type-7-32.png">
              <span class="menu-title">USERS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="user_accounts.php">CREATE USER ACCOUNT</a></li>
                <li class="nav-item"> <a class="nav-link" href="account_edit.php">EDIT USER ACCOUNT</a></li>
              </ul>
            </div>
          </li>


          <!-- DOCTOR -->

          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <img class="icons" src="../../images/hospital-box.png">
              <span class="menu-title">DOCTOR/NURSE</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="diagnosis.php">DIAGNOSIS</a></li>
                <li class="nav-item"> <a class="nav-link" href="prescription.php">PRESCRIPTION</a></li>
              </ul>
            </div>
          </li> -->

          <!-- LAB -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <img class="icons" src="../../images/icons8-lab-32.png">
              <span class="menu-title">LABARATORY</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="labresullts.php">LAB RESULTS</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">#</a></li>
              </ul>
            </div>
          </li> -->

          <!-- NEXT OF KIN -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <img class="icons" src="../../images/icons8-joining-queue-32.png">
              <span class="menu-title">NEXT OF KIN</span>
              <i class="menu-arrow  "></i>
            </a>
            <div class="collapse" id="">
              <ul class="nav flex-column sub-menu" style="list-style:none;">
                <li class="nav-item"><a class="nav-link" href="pages/forms/next_of_kin.php">EMPLOYEE NEXT OF KIN </a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/patient_next_of_kin.php">PATIENT NEXT OF KIN </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/forms/next_of_kin_record.php">NEXT OF KIN RECORDS</a></li>
              

              </ul>
            </div>
          </li> -->
         
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class=""><img style="width:2em;" src="../../images/search-people.png"> SEARCH</h4>
                  <p class="card-description">
                   Search Patient.
                  </p>

                  <!-- search field -->
                  <ul class="navbar-nav mr-lg-4 w-100">
                    <li class="nav-item nav-search d-none d-lg-block w-100">
                      <div class="input-group">
                        <div class="input-group-prepend">
                         
                        </div >
                        <form method="post" style="width:100%;display: flex;">
                          <input name="name" type="text" class="form-control" placeholder="Enter person's name" aria-label="search" aria-describedby="search">                       
                          <button  type="submit" name="search" class="btn btn-sm btn-primary"><i class="mdi mdi-magnify"></i></button>
                        </form>

                        
                            

                      </div>
                    </li>
                  </ul>

                
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Patient's search Results</h4>

                <div class="php card-title text-uppercase">
                <?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db

                  if(isset($_POST['search'])) {
                  $name=$_POST['name'];
                  // $age=$_POST['age'];
                  // $address=$_POST['address'];

                  $sql = "SELECT * FROM patient WHERE `name` = '$name'";
                  echo "<p class='text-success'>PATIENTS FOUND WITH THE NAME $name </p>";
                  
                }else {
                  // echo "<p class='text-primary'>ENTER PATIENT'S NAME FOR SEARCH</p>";
                  $sql = "SELECT * FROM patient";
                }


                ?>
              </div>
                <div class="table-responsive pt-3">
                  <table class="table table-hover">
                    <thead  >
                      <tr class="table-info">
                        <th>
                          ID
                        </th>
                        <th>
                          NAME
                        </th>
                        <th>
                          AGE
                        </th>
                        <th>
                          GENDER
                        </th>
                        <th>
                          NATIONALITY
                        </th>
                        <th>
                          CONTACT
                        </th>
                        <th>
                          ADDRESS
                        </th>
                        <th>
                          WEIGHT
                        </th>
                        <th>
                          SELECT
                        </th>
                      </tr>
                    </thead>
                    <tbody>


                    <?php
                      $result = $conn->query($sql) or die(mysqli_error($conn)); 
                      if (mysqli_num_rows($result) > 0){
                          $html="";
                          while ($fetch = mysqli_fetch_array($result))
                            {
                              $html .= "<tr>";
                              $html .= "<td>" . $fetch['p_uid'] . "</td>";
                              $html .= "<td>" . $fetch['name'] . "</td>";
                              $html .= "<td>" . $fetch['age'] . "</td>";
                              $html .= "<td>" . $fetch['gender'] . "</td>";
                              $html .= "<td>" . $fetch['nationality'] . "</td>";
                              $html .= "<td>" . $fetch['tel'] . "</td>";
                              $html .= "<td>" . $fetch['address'] . "</td>";
                              $html .= "<td>" . $fetch['weight'] . "</td>";
                              $html .="<td>
                              <a href='edit-patient.php?select=". $fetch['p_uid']." 'class='select btn btn-sm rounded-0' 
                              type='button' data-toggle='tooltip' data-placement='top'
                               title='SELECT'><img src='../../images/eye-solid.svg'></a></td> ";
                              
                              $html .= "</tr>";
                            }
                            }                          
                            echo $html;                  
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">MUNI UNIVERSITY </a>2021</span>
          
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
