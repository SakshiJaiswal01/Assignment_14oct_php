<?php 
include("connection.php");
$email=$_SESSION['email'];
$p=mysqli_query($conn,"select * from users where email='$email'");
$arr=mysqli_fetch_assoc($p);
$IMAGESHOW=$arr['imagepath'];

if(isset($_POST['IMAGECHANGE']))
{
    //New Image INFO
    $tmp=$_FILES['image']['tmp_name'];
    $fname=$_FILES['image']['name']; 
    $imgpath="upload/$email/$fname";
    //New Image INFO
    if(!empty($tmp))
    {
     unlink($arr['imagepath']);//delete old image  
     if(mysqli_query($conn,"update users set imagepath='$imgpath' where email='$email'"))
     {
      move_uploaded_file($tmp,"upload/$email/$fname");//upload the Image       
     }
     else
     {
       $errMsg="FAIL IMAGE";
     }
    }
    else
    {
      $errMsg="Please Attach Image.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Change Image</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  if(!empty($errMsg)){
    ?>
    <div class="alert alert-danger m-2"><?php echo $errMsg; ?></div>
    <?php
  }
?>
    <section class="changep">
        <div class="row">
            <div class="col-lg-5 m-auto">
              <div class="card mt-5 bg-dark">
                  <div class="card-title text-center mt-3">
                    <img src="<?php echo $IMAGESHOW;?>" alt="" width="120px" height="120px">   
                  </div>
                  <div class="card-body">
                    <form method="post"enctype="multipart/form-data">
                    <div class="input-group-mb-3">
                        <div class="form-group">
                            <div class="input-group-prepend">
                              <input type="file" name="image" class="form-control pb-3">               
                            </div>
                           </div>
                        </div>
                        <br>                         
                        <button type="submit"value="change image" name='IMAGECHANGE' class="btn btn-success">Change Image</button>
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