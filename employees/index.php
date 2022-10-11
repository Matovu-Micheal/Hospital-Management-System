<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MUNI CLINIC</title>

  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/mycss.css">
  <link rel="stylesheet" href="../../css/ad_css.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="../../IMAGES/muni clinic.svg" />
  <!-- ICON LINKS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
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
            <div >
              <!-- <p class="text-primary h4">MUNI UNIVERSITY CLINIC</p> -->
                              
            </div>
            
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../images/icons8-user-60.png" alt="profile"/>
              <span class="nav-profile-name">Employee</span>
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
    <div  class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
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
                  
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div>
              </div>
            </div>
          </div>

          <!-- First section -->
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">PATIENTS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">INVENTORY</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">EMPLOYEES</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/appointments_records.php" style="text-decoration:none ;" class="link" href="#"><small class="mb-1  hover text-muted">APPOINTMENTS</small></a>
                            
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img src="../../images/patient.png" alt="patient" >
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/search_patient.php" style="text-decoration:none ;" class="link" href="#"><small class="mb-1  hover text-muted">PATIENTS</small></a>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img src="../../images/icons8-treatment-40.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/medical_records#.php" style="text-decoration:none ;" class="link" href="#"><small class="mb-1  hover text-muted">MEDICAL RECORDS</small></a>
                
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em;" src="../../images/prescription.png" alt="prescription">
                          <div  class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/prescription#.php" style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted"> PRESCRIPTIONS</small></a>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img src="../../images/icons8-laboratory-32.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/labresullts#.php" style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">LABARATORY RESULTS</small></a>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <!-- <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i> -->
                          <img style="width: 2.4em; margin-right:0.5em;" src="../../images/icons8-medicine-64.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">AVAILABE DRUGS</small></a>

                          </div>
                          
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em; margin-right:0.5em;" src="../../images/icons8-medicine-64 (1).png">
                          <div class="d-flex flex-column justify-content-around">
                            <a style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">USED DRUGS</small></a>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em; margin-right:0.5em;" src="../../images/icons8-no-drugs-64.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">EXPIRED DRUGS</small></a>

                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em; margin-right:0.5em;" src="../../images/icons8-overstock-sale-64.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">NEW STOCK</small></a>

                          </div>
                        </div>
                        <!-- <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="me-2 mb-0">3497843</h5>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em; margin-right:0.5em;" src="../../images/icons8-employees-64.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/search_employee.php" style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">EMPLOYEES</small></a>

                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em; margin-right:0.5em;"  src="../../ images/icons8-employees.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/add_employee.php" style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">ADD EMPLOYEE</small></a>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <img style="width: 2.4em; margin-right:0.5em;" src="../../images/icons8-user-60.png">
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/next_of_kin.php" style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">NEXT OF KIN</small></a>

                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <a href="../../pages/admin/appointments.php" style="text-decoration:none ;"  href="#"><small class="mb-1  hover text-muted">APPOINTMENTS</small></a>

                          </div>
                        </div>
                        <!-- <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="me-2 mb-0">3497843</h5>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">CHART</p>
                  <p class="mb-4">CHART WILL BE HERE</p>
                  <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                  <!-- <canvas id="cash-deposits-chart"></canvas> -->
                </div>
              </div>
            </div>  
            <div class="col-md-5 grid-margin stretch-card ">
              <div class="card" >
                <div align="center" class="card-body">                  
                  <img class="" style="width: 50%;" src="../../images/muni.jpg">
                                    
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">NEW PATIENTS</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr class="">
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Weight</th>
                            <th>Emergency contact</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <!-- endinjec../../t -->
  <!-- Plugin j../../s for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plug../../in js for this page-->
  <!-- inject:j../../s -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinjec../../t -->
  <!-- Custom j../../s for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/data-table.js"></script>
  <script src="../../js/jquery.dataTables.js"></script>
  <script src="../../js/dataTables.bootstrap4.js"></script>
  <!-- End cust../../om js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

