<?php
include("connection.php");
$err = '';
$email = $_SESSION['email'];
$p = mysqli_query($conn, "select * from users where email='$email'");
$arr = mysqli_fetch_assoc($p);
if (isset($_POST['changepassword'])) {
    $old = $_POST['oldpass'];
    $new = $_POST['newpass'];
    $conpass = $_POST['conpass'];
    if(!empty($old) && !empty($new) && !empty($conpass))
    {
      if ($arr['password'] == $old) {
        if ($new == $conpass) {
            if (mysqli_query($conn, "update users set password='$new' where email='$email'")) {
                $errMsg="Password Successfully Change.";
            } else {
                $errMsg="Somthing Went wrong.";
            }
        } else {
            $errMsg = "Confirm Password should match with New password.";
        }
      } 
      else {
        $errMsg = "Old password Incorrect";
      }
    }
    else{
        $errMsg= "Please fill the blank fields.";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>changepass</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="change">
        <div class="row">
            <div class="col-lg-5 m-auto">
              <div class="card mt-5 bg-dark">
                  <div class="card-title text-center mt-3">
                  <img src="https://img.icons8.com/ios-glyphs/80/000000/lock--v2.png"/>                  
                  </div>
                  <?php
                    if(!empty($errMsg)){
                    ?>
                    <div class="alert alert-danger m-1"><?php echo $errMsg; ?></div>
                    <?php
                    }
                  ?>
                  <div class="card-body">
                    <form method="post"enctype="multipart/form-data">
                        <div class="input-group-mb-3">
                           <div class="form-group">
                            <div class="input-group-prepend">
                              <input type="text" name="oldpass" class="form-control pb-3" id="email" aria-describedby="emailHelp" placeholder="Enter Old Password">               
                            </div>
                           </div>
                        </div>
                        <br>
                        <div class="input-group-mb-3">
                           <div class="form-group">
                            <div class="input-group-prepend">
                              <input type="text" name="newpass" class="form-control pb-3" id="password" placeholder="Enter New Password">
                            </div>
                           </div>
                        </div>
                        <br>
                        <div class="input-group-mb-3">
                           <div class="form-group">
                            <div class="input-group-prepend">
                              <input type="text" name="conpass" class="form-control pb-3" id="password" placeholder="Enter Confirm Password">
                            </div>
                           </div>
                        </div>
                        <br>
                        <button type="submit" value="change PASSWORD" name="changepassword" class="btn btn-success">Change Password</button>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>