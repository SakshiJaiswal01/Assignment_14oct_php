<?php
include("connection.php");
if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    // $pass1=$password;
    session_start();
    $_SESSION['email']=$email;
    // $_SESSION['password']=$password;
    $sql = "SELECT * FROM users WHERE email = '$email' && Password = '$password' ";
    $result = mysqli_query($conn,$sql);
    if(!empty($email) && !empty($password))
    {
      if(mysqli_num_rows($result) > 0){       
        session_start();
        $_SESSION['uid']=$email;
        if(!empty($_POST['remember'])){
            setcookie('email',trim($email),time()+3600*24);
            setcookie('password',trim($password),time()+3600*24);
        }
        header("location:dashboard.php?con=showdetail");
      }
      else {
        $errMsg="Please Enter correct username/Password.";
      }
    }
    else
    {
        $errMsg="Please fill all blank fields.";
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
    <title>Admin panal</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function cook(){
            if("<?php echo $_COOKIE['email']; ?>"!=undefined){
                if(document.getElementById("email").value=="<?php echo $_COOKIE['email']; ?>"){
                    document.getElementById("password").value="<?php echo $_COOKIE['password']; ?>";
                }
                else{
                    document.getElementById("password").value="";
                }
            }
        }
    </script>   
</head>

<body id="login">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Welcome</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Login<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ragister.php">New User</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <section class="container" id="logincard">
       <div class="row">
            <div class="col-lg-5 m-auto">
              <div class="card mt-5 bg-dark">
                  <div class="card-title text-center mt-3">
                      <h4 class="text-white">My Panel</h4>
                      <img src="image/avatar1.png" width="150px" height="100px">
                  </div>
                  <div class="card-body">
                      <form method="post">
                          <h4 class="text-white">Please Login</h4>
                        <?php
                            if(!empty($errMsg)){
                            ?>
                            <div class="alert alert-danger"><?php echo $errMsg; ?></div>
                            <?php
                           }
                        ?>
                          <div class="input-group-mb-3">
                          <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male--v1.png"/>
                                </span>                 
                                  <input type="email" name="email" class="form-control pb-3" id="email" aria-describedby="emailHelp" placeholder="Enter email" onchange="cook()">               
                                </div>
                            </div>
                          </div>
                          <br>
                          <div class="input-group-mb-3">
                           <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                   <img src="https://img.icons8.com/ios-glyphs/30/000000/lock--v2.png"/>
                                </span>
                                <input type="password" name="password" class="form-control pb-3" id="password" placeholder="Password">
                            </div>
                           </div>
                          </div>
                          <br>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                            <label class="form-check-label text-white" for="exampleCheck1">Remember Me</label>
                          </div>
                          <br>
                          <button type="submit" name="login" class="btn btn-success">Login</button>
                          <a href="ragister.php">New User</a>
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