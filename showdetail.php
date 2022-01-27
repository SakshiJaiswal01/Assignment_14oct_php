<?php 
include("connection.php");
$email=$_SESSION['email'];
$p=mysqli_query($conn,"select * from users where email='$email'");
$arr=mysqli_fetch_assoc($p);// All Data come in form of associative array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table th{       
                background-color: lightgray;
            }
         table td{
                background: lightcyan;  
                font-size: large;      
            }
        .table{
                padding: 180px;
                table-layout: auto;
                text-align: center;
                border: 3px;
                margin-top: -50px;
            }
            #detail{
                width:150px ;
                height:150px;
                border-radius: 50%;
                margin-left: 110%;
            }
    </style>
</head>
<body>
    <img id="detail" src="<?php echo $arr['imagepath']; ?>" alt=""> 
    <table class="table">
        <tr><th colspan="2">USER DETAILS</th></tr>
        <tr><td>EMAIL:</td><td><?php echo $arr['email']; ?></td></tr>
        <tr><td>USER NAME:</td><td><?php echo $arr['uname']; ?></td></tr>
        <tr><td>PASSWORD: </td><td><?php echo $arr['password']; ?></td></tr>
        <tr><td>NAME:</td><td><?php echo $arr['name']; ?></td></tr>
        <tr><td>AGE:</td><td><?php echo $arr['age']; ?></td></tr>
        <tr><td>CITY:</td><td><?php echo $arr['city']; ?></td></tr>
        <tr><td>IMAGE:</td><td><?php echo $arr['imagepath']; ?></td></tr>
    </table>
</body>
</html>