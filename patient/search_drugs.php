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
  <link rel="stylesheet" href="../../css/mycss.css">
  <!-- endinject -->
 
  <!-- ICONS -->
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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class=""><img style="width:2em;" src="../../images/search-people.png"> SEARCH</h4>
                  <p class="card-description">
                   Search Drugs.
                  </p>

                  <!-- search field -->
                  <ul class="navbar-nav mr-lg-4 w-100">
                    <li class="nav-item nav-search d-none d-lg-block w-100">
                      <div class="input-group">
                        <div class="input-group-prepend">
                         
                        </div >
                        <form method="post" style="width:100%;display: flex;">
                          <input name="drug" type="text" class="form-control" placeholder="Enter name of the Drug" aria-label="search" aria-describedby="search">                       
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
                <h4 class="">Drug search Results</h4>

                <div class="php">
                <?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db

                  if(isset($_POST['search'])) {
                  $drug=$_POST['drug'];
                  // $age=$_POST['age'];
                  // $address=$_POST['address'];

                  $sql = "SELECT * FROM pharmarcy WHERE `drug` = '$drug'";
                  echo "<p class='text-primary'><u>Drugs found</u></p>";
                  
                }else {
                  
                  $sql = "SELECT * FROM pharmarcy";
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
                          Date added
                        </th>
                        <th>
                          Drug
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Purchase Date
                        </th>
                        <th>
                          Expiry Date
                        </th>
                        <th>
                          View
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
                              $html .= "<td>" . $fetch['id'] . "</td>";
                              $html .= "<td>" . $fetch['date'] . "</td>";
                              $html .= "<td>" . $fetch['drug'] . "</td>";
                              $html .= "<td>" . $fetch['quantity'] . "</td>";
                              $html .= "<td>" . $fetch['purchase_date'] . "</td>";
                              $html .= "<td>" . $fetch['expiry_date'] . "</td>";
                              
                              $html .="<td>
                              <a href='edit-patient.php?select=". $fetch['id']." 'class='select btn btn-sm rounded-0' 
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
