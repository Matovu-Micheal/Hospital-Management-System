<?php
require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db
// JOINS COMBINING THREE OR MORE TABLES

$sql="SELECT 
-- DIAGNOSIS TABLE
-- diagnosis.*,
diagnosis.Symptoms,
diagnosis.Doctors_deduction,
diagnosis.date,
diagnosis.id,

-- LAB RESULTS TABLE
-- l.*,
l.results,
l.tests,
l.samples_taken,

-- PRESCRIPTION TABLE
-- pre.*,
pre.drugs,
pre.dosage,

-- PATIENT TABLE
-- p.*,
p.p_uid,
p.name,
p.age,
p.gender,
p.weight

FROM
diagnosis

INNER JOIN
lab_results l ON l.p_uid = diagnosis.p_uid
INNER JOIN
prescription pre ON pre.p_uid = diagnosis.p_uid
INNER JOIN 
patient p ON  p.p_uid  = diagnosis.p_uid
";

//   $sql = "SELECT * FROM useraccount";

$result = $conn->query($sql) or die(mysqli_error($conn)); 
// $fetch = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MEDICAL RECORDS</title>
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
          <div class="row">
            
            

            

            <!-- MY NEW USER ACCOUNT FORM ENDS HERE -->




            
            <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4>MEDICAL RECORDS</h4>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="data table  table-bordered">
                      <thead class="table-primary">
                        <tr>
                            <th>DATE</th>
                            <th>PATIENT'S ID</th>
                            <th>PATIENT'S NAME</th>
                            <th>AGE</th>
                            <th>SEX</th>
                            <th>WEIGHT</th>
                            <th>SYMPTOMS</th>
                            <th>TESTS</th>
                            <th>SAMPLES</th>
                            <th>RESULTS</th>
                            <th>SICKNESS</th>
                            <th>DRUGS</th>
                            <th>DOSAGE</th>
                            <th>ACTIONS</th>
                            
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
                            // patients table
                            $html .= "<td>" . $fetch['date'] . "</td>"; 
                            $html .= "<td>" . $fetch['p_uid'] . "</td>";  
                            $html .= "<td>" . $fetch['name'] . "</td>";
                            $html .= "<td>" . $fetch['age'] . "</td>";
                            $html .= "<td>" . $fetch['gender'] . "</td>";
                            $html .= "<td>" . $fetch['weight'] . "</td>";
                            // diagnosis table
                            $html .= "<td>" . $fetch['Symptoms'] . "</td>";
                            $html .= "<td>" . $fetch['tests'] . "</td>";

                            // lab results
                            $html .= "<td>" . $fetch['samples_taken'] . "</td>";
                            $html .= "<td>" . $fetch['results'] . "</td>";
                            $html .= "<td>" . $fetch['Doctors_deduction'] . "</td>";
                            $html .= "<td>" . $fetch['drugs'] . "</td>";
                            $html .= "<td>" . $fetch['dosage'] . "</td>";
                            
                            $html .="<td>
                            <a href='record.php?record=".$fetch['p_uid']."' class='record btn btn-sm rounded-0' 
                            type='button' data-toggle='tooltip' data-placement='top'
                             title='Download'><img src='../../images/icons8-download-32.png'></a></td> ";
                            
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
