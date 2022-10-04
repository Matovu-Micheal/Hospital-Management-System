<?php require_once 'C:/xampp/htdocs/MUNI CLINIC/php/connection.php'; //connecting to db
session_start();
if (isset($_POST['submit'])) {
  $name=$_POST['username'];
  $password=$_POST['password'];

  $sql =  " SELECT * FROM `admin` WHERE `username` = '$name' AND password= '$password' ";
  $result = $conn->query($sql) or die(mysqli_error($conn)); 

  if (mysqli_query($conn, $sql)) {
    $row=mysqli_fetch_array($result);
    
    if (($row['admin_id']{0}.$row['admin_id']{1})=="SA"){
      header("Location: ../pages/admin/index.html");
      $_SESSION['id']=$row['admin_id'];
    }else{
      
    }
    
    
  }
  
  // else{  
  //   // checks for admin
  //   $sql2 = " SELECT * FROM `admin` WHERE `username` = '$name' AND password= '$password' ";
  //   echo var_dump($sql2);
  //   $result2 = $conn->query($sql2) or die(mysqli_error($conn)); 
  //   if (mysqli_query($conn, $sql2)) {
  //     $row2=mysqli_fetch_array($result2);
  //     if ($row2['admin_id']{0}=="SA"){
  //       header("Location: ../pages/admin/index.html");
  //     }
  // }
  // }
  
    

  } else {
      // echo "Error: " . $sql . ":-" . mysqli_error($conn);
      $info = "<p class='text-danger'>An error has occured !</p>";
  }
                             


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOGIN</title>
  <!-- BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
 
  <!-- MY CSS  -->
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="../css/mycss.css">
 
  <link rel="shortcut icon" href="../IMAGES/muni clinic.svg" />

  
</head>

<body>
  <div class="container-scroller mt-5">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper  d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="shadow col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="logo" align="center" class="brand-logo">
                <img src="../IMAGES/muni clinic.svg" alt="logo">
              </div>
              
              

             
              <p align="center" class="pt-3 text-black" style="font-size:1.3em;">Sign In</p>
        
              <form  method="post" class="">
                <div class="form-group">
                  <input type="text" name="username" class="form-control " id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control " id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button style="width:100%;" type="submit" name="submit" class="btn btn-block btn-primary  font-weight-medium">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
                <div class=" mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Contact Admin</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
</body>

</html>
