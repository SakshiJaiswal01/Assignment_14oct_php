<!doctype html>
<html lang="en">
  <head> 
    <title>product Page</title>
    <style>
     body{
        background-image: url("bgproduct.jpg");
        background-size: cover;
        background-repeat: no-repeat;
      }
      /* .container{
        margin-top: 4px;
      } */
    </style>
  </head>
  <body>
    <section class="container mt-5">
      <div class="row">
        <?php
         $product=[
           ["id"=>1, "pname"=>"Watch", "price"=>"Rs. 399",'quantity'=>1, "image"=>"beg1.jpg"],
           ["id"=>2, "pname"=>"Lipstick", "price"=>"Rs. 496",'quantity'=>4, "image"=>"lips2.jpg"],
           ["id"=>3, "pname"=>"Hat & Purse", "price"=>"Rs. 999",'quantity'=>2, "image"=>"purse3.jpg"],
        //    ["id"=>4, "pname"=>"Formal", "price"=>"Rs. 599",'quantity'=>1, "image"=>"formal4.jpg"],
           
         ];

          foreach($product as $product){
            echo "<div class='col-4'>
              <div class='card shadow-sm'>
                <img class='bd-placeholder-img card-img-top' src='".$product["image"]."' width='100%' height='225'/> 
                <div class='card-body'>
                 <h5 class='card-title'>".$product["pname"]."</h5>
                 <p class='card-text'>Price : ".$product["price"]."</p>
                 <p class='card-text'>Quantity : ".$product["quantity"]."</p>
                 <a href='#' class='btn btn-primary'>Go somewhere</a>
                </div>
              </div>  
            </div>";
          }
        ?>
      </div>
    </section>
    
  </body>
</html>