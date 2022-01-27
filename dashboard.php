<?php
session_start();
$uid=$_SESSION['uid'];
if(empty($uid)){
    header("location:index.php");
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
    <title>Dashboard Page</title>
</head>
<body>
    <main>
      <header>
          <?php include("nav.php"); ?>
      </header>
      <section class="row container">
        <div class="col-sm-4">
         <!-- <img src="<?php echo $image; ?>" height="200" width="200" style="border-radius : 50%;" class="ml-5;"> -->
         <aside ><?php include("sidebar.php"); ?> 
        </div>
          <aside class="col-sm-8">
          <?php
               switch(@$_GET['con']){
                   case 'showdetail' : include("showdetail.php");
                   break;
                   case 'editprofile' : include("editprofile.php");
                   break;
                   case 'changepass' : include("changepass.php");
                   break;
                   case 'category' : include("category.php");
                   break;
                   case 'product' : include("product.php");
                   break;
                   case 'order' : include("order.php");
                   break;
                   case 'feedback' : include("feedback.php");
                   break;
                   case 'logout' : include("logout.php");
                   break;
               }
              ?>
          </aside>
      </section>
      
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>