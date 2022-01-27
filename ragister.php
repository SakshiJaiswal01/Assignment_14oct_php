<?php
error_reporting(0);
include("connection.php");
if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $tmp = $_FILES['image']['tmp_name'];
    $fname = $_FILES['image']['name'];

    if (!empty($email) && !empty($uname) && !empty($password) && !empty($name) && !empty($age) && !empty($city) && !empty($tmp)) {
        mkdir("upload/$email");
        move_uploaded_file($tmp, "upload/$email/$fname");
        $imgpath = "upload/$email/$fname";

        if (mysqli_query($conn, "insert into users(email,uname,password,name,age,city,imagepath) values('$email','$uname',$password,'$name',$age,'$city','$imgpath')")) {
            header("location:welcome.php?uid=$email");
        } else {
            $errMsg="User Already Exist.";
        }
    } else {
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
    <link rel="stylesheet" href="style.css">
    <title>ragister panal</title>

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
    
    <section class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card mt-2 bg-light">
                    <div class="card-title text-center mt-3">
                        <h3>CREATE AN ACCOUNT</h3>
                    </div>
                    <?php
                        if(!empty($errMsg)){
                        ?>
                        <div class="alert alert-danger m-1"><?php echo $errMsg; ?></div>
                        <?php
                        }
                    ?>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="input-group-mb-3">
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-mb-3">
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <input type="text" name="uname" class="form-control" placeholder="Enter Username">
                                    </div>
                                </div>
                            </div>
                           <div class="input-group-mb-3">
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-mb-3">
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                           <div class="input-group-mb-3">
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age">
                                    </div>
                                </div>
                            </div>                 
                            <div class="input-group-mb-3">
                                <div class="form-group"> 
                                    <div class="input-group-prepend">
                                    <label for="exampleInputEmail1">Select City -</label>
                                        <select name="city" id="city">
                                            <option value="indore">Indore</option>
                                            <option value="ujjain">Ujjain</option>
                                            <option value="dewas">Dewas</option>
                                            <option value="bhopal">Bhopal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="input-group-mb-3">
                                <div class="form-group">
                                <label>Attach Image</label>
                                    <div class="input-group-prepend">
                                       
                                       <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="sub" class="btn btn-success btn-block">Ragister</button>
                            <h5 class="text-center">Have already an account?<a href="index.php">Login Here</a></h5>
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