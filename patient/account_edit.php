<?php    require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db 
$sucess="";
$error="";
if(isset($_REQUEST['delete_record']))
{    
    $e_id = $_REQUEST['delete_record'];
    $sql="DELETE FROM useraccount WHERE e_id='$e_id'";
    $result = mysqli_query($conn,$sql) or die (mysqli_error($sql));
  
    if (($result) > 0){
      $sucess="<p class='text-success 1rem'>User account has been deleted successfully</p>";
      echo $sucess;
    }else{
      $error="<p class='text-danger'>Delete has failed</p>";
      echo $error;
      
    }
} 
?>

                    

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>USER ACCOUNT</title>
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
                <div class="card-body m-4">
                  <h4 class="">USER ACCOUNTS</h4>
                  <div class="table-responsive">

                    
                    <table  class="data table  table-bordered">
                      <thead class="table-primary">
                        <tr>
                            <th>Id</th>
                            <th>User name</th>
                            <th>Password</th>
                            <th>Actions</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                      

                      <!-- PHP CODE -->
                      <?php
                    
                      $sql = "SELECT * FROM useraccount";

                      $result = $conn->query($sql) or die(mysqli_error($conn)); 
                      // $fetch = mysqli_fetch_array($result);

                      if (mysqli_num_rows($result) > 0){
                        $html="";
                        while ($fetch = mysqli_fetch_array($result))
                          {
                            $html .= "<tr>";
                            $html .= "<td>" . $fetch['e_id'] . "</td>"; 
                            $html .= "<td>" . $fetch['username'] . "</td>";
                            $html .= "<td>" . $fetch['password'] . "</td>";
                            $html .="<td class='d-flex'>
                            <a href='edit-user-acc.php?edit=". $fetch['e_id']."'class='edit btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Edit'><i class='fa fa-edit'></i></a>
                            
                            <input type='hidden' name='del_id' value='".$fetch['e_id']."'>
                            <a href='?delete_record=".$fetch['e_id']."' name='delete' class='delete btn btn-danger btn-sm rounded-0'><i class='fa fa-trash'></i></a>";
                            
                            
                        
                            $html .= "</tr>";
                          }
                          }                          
                      echo $html; 
                         

                      
                        
                          

                      ?>
                     
                         
                         
                       
                     
                      
                      </tbody>
                    </table>
                    
                    <!-- MY CUSTOM JAVASCRIPT -->
                      
                        
                            
                  

                   

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
                    <script>  
                    // ON CLICK EDIT JAVASCRIPT, JQUERY FUNCTION , PHP
                    $(document).on('click', '.edit', function() {  
                      // returns elements with the same parent, The siblings() method returns all sibling elements of the selected element.
                      // Sibling elements are elements that share the same parent.
                      $(this).parent().siblings('td.data').each(function() {   
                        // $(this) -> $(selector) jquery selector selects the current element in the DOM
                        // The html() method sets or returns the content (innerHTML) of the selected elements.
                        var content = $(this).html();  

                        console.log(content);

                        // Creates an Input field in the selected table td tag enters the html content for the td tag as a placeholder
                        $(this).html('<input class="form-control" value="' + content + '" />');  
                        
                        // CREATE A FORM TO SUBMIT DATA
                      });  
                      $(this).siblings('.save').show();  
                      $(this).siblings('.delete').hide();  
                      $(this).hide();  
                    });  




                    // ON CLICK SAVE JAVASCRIPT, JQUERY FUNCTION , PHP
                    $(document).on('click', '.save', function() {  
                      // $('input') -> $(selector) jquery selector selects the input elements in the DOM
                      $('input').each(function() {  
                        // The val() method returns or sets the value attribute of the selected elements.
                        var content = $(this).val();  

                        // The contents() method returns all direct children, including text and comment nodes, of the selected element.
                        $(this).html(content);  
                        
                        // The unwrap() method removes the parent element of the selected elements.
                        $(this).contents().unwrap();  

                        // MY CODE TO SUBMIT EDITTED DATA INTO DATABASE TABLE

                        // The table inputs are wrapped in a form
                        $(this).contents().wrap("<form method='post'></form>");  

                        // Form will be submitted using javascript



                      });  
                      $(this).siblings('.edit').show();  
                      $(this).siblings('.delete').show();  
                      $(this).hide();  
                    });  


                     // ON CLICK DELETE JAVASCRIPT, JQUERY FUNCTION , PHP
                    $(document).on('click', '.delete', function() {  
                      $(this).parents('tr').remove();  
                    });  

                      
                    </script>  

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
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? <a href="#" target="_blank">MUNI UNIVERSITY </a>2022</span>
    
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<script>
// TOOGLE PASSWORD VISIBILITY JAVASCRIPT
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
};
</script>

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
