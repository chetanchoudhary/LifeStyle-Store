<!DOCTYPE HTML>

<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Lifestyle Store</title>
   <link rel="stylesheet" type="text/css" href="footer.css">

    </head>
    <body>
    
     <?php
        define('ROOT', './');
        include ROOT.'includes/header.php';
        
        include ROOT.'includes/check_if_added_to_cart.php'
        ?>
       
      <div class="container" style="margin-top: 100px">
          
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
      </div>
  
  
  
   
     
         <div class="container">
     <div class="row text-center">
      <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/canon_dslr.jpeg" class="img-responsive"><br>
          <div class="caption"><h3>Canon EOS</h3>
          <p>Price:Rs. 36000.00</p>
               <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(1)) { 
    
                    if(check_if_added_to_cart(1) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>  
          
          </div>
          </div>
      </div>
     
        
          <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/sony_dslr.jpeg" class="img-responsive">
          <div class="caption"><h3>Sony DSLR</h3>
          <p>Price:Rs. 40000.00</p>
          <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(2)) { 
    
                    if(check_if_added_to_cart(2) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
      
        
        <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/nikon_dslr.jpeg" class="img-responsive"><br>
          <div class="caption"><h3>Nikon DSLR</h3>
          <p>Price:Rs. 50000.00</p>
          
          <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(3)) { 
    
                    if(check_if_added_to_cart(3) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
    
        
            <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/olympus_dslr.jpg" class="img-responsive"><br>
          <div class="caption"><h3>Olympus DSLR</h3>
          <p>Price:Rs. 80000.00</p>
          <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(4)) { 
    
                    if(check_if_added_to_cart(4) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
      
      </div>
      
  </div>
  
  
     
        
     <div class="container">
         <div class="row text-center">
          <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/titan_watch.jpg" class="img-responsive">
          <div class="caption"><h3>Titan</h3>
          <p>Price:Rs. 3000.00</p>
          <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(5)) { 
    
                    if(check_if_added_to_cart(5) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
     
        
     <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/edifice_watch.jpg" class="img-responsive">
          <div class="caption"><h3>Casio Edifice</h3>
          <p>Price:Rs. 8000.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(6)) { 
    
                    if(check_if_added_to_cart(6) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
     
        
     <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/dw_watch.jpg" class="img-responsive">
          <div class="caption"><h3>Diesal</h3>
          <p>Price:Rs. 13000.00</p>
          <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(7)) { 
    
                    if(check_if_added_to_cart(7) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
     
        
     <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/dw_watch1.jpg" class="img-responsive">
          <div class="caption"><h3>DW Watch</h3>
          <p>Price:Rs. 18000.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(8)) { 
    
                    if(check_if_added_to_cart(8) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
      </div>
  </div>
      </div>
        </div>
        
        
     
        
     <div class="container" style="margin-bottom: 100px">
         <div class="row text-center">
          <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/invictus_shirt.jpg" class="img-responsive">
          <div class="caption"><h3>Invictus(blue)</h3>
          <p>Price:Rs. 800.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(9)) { 
    
                    if(check_if_added_to_cart(9) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
      
        
    <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/invictus_shirt1.jpg" class="img-responsive">
          <div class="caption"><h3>Invictus(white)</h3>
          <p>Price:Rs. 1000.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(10)) { 
    
                    if(check_if_added_to_cart(10) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
     
        
     <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/invictus_shirt2.jpg" class="img-responsive">
          <div class="caption"><h3>Invictus(pink)</h3>
          <p>Price:Rs. 1500.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(11)) { 
    
                    if(check_if_added_to_cart(11) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
          </div>
      </div>
    
        
      <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
          <img src="img/invictus_shirt3.jpg" class="img-responsive">
          <div class="caption"><h3>Invictus(black)</h3>
          <p>Price:Rs. 1300.00</p>
          <?php if (!isset($_SESSION['email'])) { ?>                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php                             } else {                                                                if (check_if_added_to_cart(12)) { 
    
                    if(check_if_added_to_cart(12) != 0)                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } 
                    else {                                     ?>                          <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                                 }                             }                             ?>
          </div>
      </div>
  </div>
     
        </div>
        </div>
  
   
       <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>