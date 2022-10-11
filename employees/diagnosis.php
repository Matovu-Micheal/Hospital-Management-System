<?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db
//include_once 'db.php';
if(isset($_POST['submit']))
{    

    $info="";
    $p_uid=$_POST['patient_id'];
    
    //$p_id = $_POST['id'];   REMOVED
    $symptoms = $_POST['symptoms'];
    $tests = $_POST['tests'];
    $deduction = $_POST['deduction'];

    $sql = "INSERT INTO diagnosis(`p_uid`,`Symptoms`,`tests`,`Doctors_deduction`)
    VALUES ('$p_uid','$symptoms','$tests','$deduction')";
    $result = $conn->query($sql) or die(mysqli_error($conn)); 

    if ($result) {
      $info = "<p class='text-success'>Patient's diagnosis has been added successfully</p>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        $info = "<p class='text-danger'>An error has occured !</p>";


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
  <title>DIAGNOSIS</title>
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
  <link rel="shortcut icon" href="../../IMAGES/muni clinic.svg" />
  <!-- Datatable plugin CSS file -->
	<link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

	<!-- jQuery library file -->
	<script type="text/javascript"
	src="https://code.jquery.com/jquery-3.5.1.js">
	</script>

	<!-- Datatable plugin JS library file -->
	<script type="text/javascript" src=
"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
	</script>

  

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

          
        
          
          <div style="width:90%;" class="row">
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
                  
                  <button class="btn btn-primary mt-2 mt-xl-0">CHECK LAB RESULTS </button>
                </div>
              </div>
            </div>
          </div>

          <div style="width:90%;" class="row">
            
            <!-- MY FORM -->
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  

                <div>
               
          
            
           
                </div>

                <div style="margin-left:2em" class="diagnosis_form mt-2 mb-5" >
                <!-- <div class=""  onclick="toggle('diagnosis_form');"> -->
                
                <h4 class="mb-2">Patient'S Diagnosis</h4>
                
                  <form id="diagnosis_form" method="POST"  class="forms-sample">
                  
                  <p class=""><?php echo  empty($info) ? '' : $info;  ?></p>
                
                <div class="form-group mb-3">
                    <label for="" class="form-label">PATIENT</label>
                    <select name="patient_id" id="" class="form-select">
                      <option >--select--</option>
                      <?php 
                        $sql = "SELECT * FROM patient";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0):
                          while ($row = mysqli_fetch_array($result)) {
                            echo '
                              <option value="'.$row['p_uid'].'">'.$row['name'].'</option>
                            ';
                          }
                        endif;
                      ?>
                    </select>
                    <div id="help" class="form-text"></div>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Symptoms</label>
                    <input type="text" class="form-control" name="symptoms" id="symptoms"  required>
                    <div id="help" class="form-text"></div>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tests</label>
                    <input type="text" name="tests" id="tests" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="help" class="form-text"></div>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sickness</label>
                    <input type="text" name="deduction" class="form-control" id="deduction" aria-describedby="emailHelp">
                    <div id="help" class="form-text"></div>
                </div>
                    
                    <button type="submit" value="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>

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

     <!-- JS CODE FOR TABLE PAGINATION -->
     <script>

		/* Initialization of datatable */
      $(document).ready(function() {
        $('#tableID').DataTable({ });
      });
    </script>

    <!-- MY CUSTOM JAVASCRIPT -->
    <script type="text/javascript">
      
      function toggle(ID){
        var element = document.getElementById(ID);
        if(element.style.display === "none"){
            element.style.display = "block";
        }else{
            element.style.display = "none";
        }
        }
            
    </script>

   



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
