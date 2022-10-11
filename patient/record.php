<?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db
session_start();
$id = $_SESSION['id'];

$sql="SELECT 
-- DIAGNOSIS TABLE
-- diagnosis.*,
diagnosis.Symptoms,
diagnosis.Doctors_deduction,
diagnosis.date,
diagnosis.id,
diagnosis.Tests,

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
p.weight,
p.address,
P.tel,

-- APPOITMENT TABLE
appointments.Appointment_date,
appointments.healthworker,
appointments.Note
FROM
diagnosis
LEFT JOIN
lab_results l ON l.p_uid = diagnosis.p_uid
LEFT JOIN
prescription pre ON pre.p_uid = diagnosis.p_uid
LEFT JOIN 
patient p ON  p.p_uid  = diagnosis.p_uid
LEFT JOIN
appointments ON appointments.p_uid = diagnosis.p_uid
WHERE p.p_uid='$id'
";

$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));


// if (mysqli_num_rows($result) < 1){
//   echo 'No result';
//   exit;
// }
while ($row=mysqli_fetch_array($result)){
    $record = $row;
}

mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MEDICAL RECORD</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/mycss.css">
  <!-- endinject -->
  <!-- JS CODE FOR DOWNLODING HTML CONTENT AS PDF -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="shortcut icon" href="../../IMAGES/muni clinic.svg" />
  <link rel="stylesheet" href="../../css/patient_css.css">

 
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
        
        <!-- DOWNLOAD BUTTON -->
        <div  class="row">
            <div class="col-md-12 grid-margin">
                <div align=right class="">
                  <button id='download' class="btn btn-primary mt-2 mt-xl-0">DOWNLOAD PDF</button>
                </div> 
             
            </div>
          </div>

          <div class="row">
            
            <!-- MY FORM -->
            <div  class="col-12 grid-margin stretch-card">
              <div class="card">
               
                

                <div  class="card-body mb-4">
                
                  <div class='record ms-4' id='record'>
            
                    <div  class=' justify-content-center'>
                    
                      <div>
                      <div align='center' class='mb-4'>
                      <img  class="mb-3" style='width:5em;' class='' src="../../IMAGES/muni clinic.png" />
                      
                      <p>MEDICAL REPORT</p>
                      <h4>MUNI UNIVERSITY CLINIC</h4>
                      <p>P.O Box 725, Arua Uganda</p>
                      </div>
                     
                      <div class='justify-content-center'>
                      <div class='col mb-3 '>
                        <p><b>Date of issue:</b> <?php echo isset($record['date']) ? $record['date']: "NO INFORMATION" ?></p>
                        </div>
                        <hr>
                      <h6 class='text-primary mb-3'>PATIENT'S DETAILS</h6>
                      
                      <div class='d-flex mt-2'>
                        <div class='col'>
                        <p><b>Name:</b> </p><p class=''> <?php echo isset($record['name']) ? $record['name'] : "NO INFORMATION" ?></p>
                        </div>
                        <div class='col'>
                        <p><b>Date of Birth:</b> </p>
                        </div>

                        
                      </div>
                      <div class='d-flex mt-2'>
                        <div class='col d-flex'>
                        <p><b>Age:</b> <?php echo isset($record['age']) ? $record['age'] : "NO INFORMATION" ?></p>
                        </div>
                        <div class='col'>
                        <p><b>Sex:</b> <?php echo isset($record['gender']) ? $record['gender']: "NO INFORMATION" ?></p>
                        </div>
                        <div class='col'>
                        <p><b>Weight: </b>  <?php echo isset($record['weight']) ? $record['weight']."Kgs": "NO INFORMATION" ?></p>
                        </div>

                      </div>

                      <div class='mt-2'>
                        <div class='col'>
                        <p><b>Address:</b> <?php echo isset($record['address']) ? $record['address'] :"NO INFORMATION" ?></p>
                        </div>
                        <div class='col mt-2''>
                        <p><b>Contact:</b> <?php echo isset($record['tel']) ? $record['tel'] : "NO INFORMATION" ?></p>
                        </div>
                        </div>
                      </div>

                      <div class='foot'>
                      
                      </div>

                      <div class='d-flex'>
                      <div class='col'>
                      <h6 class='text-primary mt-4'>PATIENT'S DIAGNOSIS</h6>
                      <div>
                        <p class='mt-2'><b>Symptoms:</b><br> <?php echo isset($record['Symptoms']) ? $record['Symptoms'] : "NO INFORMATION" ?></p>
                        <p class='mt-2'><b>Tests:</b><br> <?php echo isset($record['Tests']) ? $record['Tests'] : "NO INFORMATION" ?></p>
                        <p class='mt-2'><b>Confirmed sickness:</b><br><?php echo isset($record['Doctors_deduction']) ? $record['Doctors_deduction'] : "NO INFORMATION" ?></p>
                      </div>
                      </div>

                      <div class='col'>
                      <h6 class='text-primary mt-4'>LABARATORY RESULTS </h6>
                        <div class='col'>
                          <p><b>Samples Taken:</b></p><p class=''><?php echo isset($record['samples_taken']) ? $record['samples_taken'] : "NO INFORMATION" ?></p>
                        </div>
                        <div class='col mt-2''>
                          <p><b>Tests Conducted:</b></p><p class=''><?php echo isset($record['tests']) ? $record['tests'] : "NO INFORMATION" ?></p>
                        </div>
                        <div class='col mt-2''>
                          <p><b>Results from the Tests Conducted:</b></p><p class=''><?php echo isset($record['results']) ? $record['results'] : "NO INFORMATION" ?></p>
                        </div>
                        </div>
                        </div>

                          </div>
                        </div>

                        <div class='d-flex'>
                        <div class='col'>
                        <h6 class='text-primary mt-4'>PRESCRIPTION </h6>
                        <div class='col'>
                          <p><b>Prescribed Drugs:</b></p><p class=''></p>
                        </div>
                        <div class='col mt-2''>
                          <p><b>Prescribed Dosage:</b></p><p class=''><?php echo isset($record['dosage']) ? $record['dosage'] : "NO INFORMATION"  ?></p>
                        </div>
                        </div>
                        <div class='col'>
                        <h6 class='text-primary mt-4'>PATIENT'S APPOINTMENT</h6>
                        <div class='col'>
                          <p><b>Appoitmnet Date:</b></p><p class=''><?php echo isset($record['Apointment_date']) ? $record['Apointment_date'] : "NO information"; ?></p>
                        </div>
                        <div class='col mt-2''>
                          <p><b>Doctor/Nurse:</b></p><p class=''><?php echo isset($record['healthworker']) ? $record['healthworker'] : "NO information"; ?></p>
                          
                        </div>
                        <div class='col mt-2''>
                          <p><b>Note/Reason:</b></p><p class=''><?php echo isset($record['Note']) ? $record['Note'] : "NO information"; ?></p>
                          
                        </div>
                        </div>
                        </div>
                        <div align="right">
                        <img  class="mb-3" style='width:10em;' class='' src="../../IMAGES/stamp.jfif" />
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

  <script type="text/javascript">
    window.onload=function(){
      document.getElementById("download")
      .addEventListener("click",()=>{
        const record = this.document.getElementById("record");
        console.log(record);
        var opt = {
            margin:       0.5,
            filename:     'patient record.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
          };
        html2pdf().from(record).set(opt).save();
      })

    }
  
  </script>
  
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  
 

</html>
