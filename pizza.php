
<!DOCTYPE html>
<html>
<head>
    <title>Order Pizza</title>
    <link href="return.css" type="text/css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="container">
      
        <div class="item1">
            <p>BEST<br />PIZZA<br />IN<br />CR</p>
        </div><!--item1-->
      
        <div class="item2">
        
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="order.html">Order</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">About</a></li>
            </ul><!--close nav-->
        
            <h1>Thank you for your order!</h1>

    <div class="set">
      <?php
      
        // size
        
        if (isset($_POST['size'])) {
        
          $size = $_POST['size'];
          echo "<h1>You have selected a $size pizza. Enjoy!</h1>";
          }
            
        else {
          $size = NULL;
          echo "<h1>You must select a pizza size.</h1>";
        }
        
        //toppings
        
        if (isset($_POST['toppings'])) {
        
          $toppings = $_POST['toppings'];
            
            echo "<div class=\"return\">
                    <h1>You have selected the following toppings:</h1>
                  </div><!--return-->";
            
              foreach ($toppings as $key => $value) {
            
                echo "<div class=\"return\">
                        <h1>$value</h1>
                      </div><!--return-->";
              }
        }
        
        else {
            echo "You must select at least one topping.";
        }
        
      ?>  
    </div><!--set-->
  
  </div><!--item2-->
</div><!--container-->

</body>
</html>

 
