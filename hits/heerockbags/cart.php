<?php
    include "connection.php";   
    session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="bg-light">





        <div class="container-fluid">
            <div class="row px-5">
                <div class="col-md-7">
                    <div class="shopping-cart">
                        <h6>My Cart</h6>

                        <?php
                            if(isset($_SESSION['cart']))
                            {
                                $total=0;
                                $item_total=0;
                                $subtotal=0;
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $pro_id=$value['product_id'];
                                    $sql="select product_id,item,price,image1,item_code,qty from product_details where product_id =$pro_id";
                                    $res = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($res)>0)
                                    {
                                        $rowdata = mysqli_fetch_assoc($res);
                                    }
                                    $subtotal=$rowdata['price']*$rowdata['qty'];
                                    $item_total=$item_total+$rowdata['qty'];
                                    $total=$total+$subtotal;
                                    ?>
                                    
                                    <div class="border rounded">
                                        <div class="row bg-white">
                                            <div class="col-md-3">
                                                <img src=<?=$rowdata['image1']?> alt="Image1" class="img-fluid">        
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="pt-2"><?php echo $rowdata['item'] ?></h5>
                                                <small class="text-secondary">Item Code: <?php echo $rowdata['item_code'] ?></small>
                                                <h5 class="pt-2">&#x20b9; <?php echo $rowdata['price']?></h5>
                                                <form action="manage_cart.php" method="post">
                                                    <input type="hidden" name="product_id" value='<?php echo $rowdata['product_id']?>'>
                                                    <button type="submit" class="btn btn-danger mx-2" name="remove_item">Remove</button>
                                                </form>
                                            </div>
                                            <div class="col-md-3 py-5">
                                            <form action="manage_cart.php" method="post">
                                                <div style="padding:;">
                                                    <input type="submit" name="des" value="-" class="btn bg-light border rounded-circle" />
                                                    <input type="hidden" name="pro_id" value="<?php echo $rowdata['product_id'] ?>">
                                                    <input type="hidden" name="qty" value="<?php echo $rowdata['qty'] ?>">
                                                    <input type="text" value="<?php echo $rowdata['qty']?>" min="1" max="99" class="form-control w-25 d-inline">
                                                    <input type="submit" name="inc" value="+"class="btn bg-light border rounded-circle">
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                    </div>
                </div>
                        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                            <div class="pt-4">
                                <h6>Order DETAILS</h6>
                                <hr>
                                <div class="row price-details">
                                    <div class="col-md-6">
                                        <?php
                                            if (isset($_SESSION['cart'])){
                                                echo "<h6>Subtotal ($item_total items)</h6>";
                                            }
                                        ?>
                                        <hr>
                                        <h6>Tax</h6>
                                        <hr>
                                        <h6>Delivery Charges</h6>
                                        <hr>
                                        <h6>Amount Payable</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>&#x20b9;<?php echo $total; ?></h6>
                                        <hr>
                                        <h6 class="text-success">FREE</h6>
                                        <hr>
                                        <h6 class="text-success">FREE</h6>
                                        <hr>
                                        <h6>&#x20b9;<?php
                                            echo $total;
                                            ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div><?php
                            }
                            else{
                                ?>
                                <br><br>
                                <h3>The Cart is empty <a href='#'>Click Here</a> to browse items</h3>
                            <?php } ?>
            </div>
        </div>
        <br><br><br>



        <!-- map -->
  <div class="mapouter" >
      <div class="gmap_canvas row">
        <iframe height="100%" width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=98/11%20shergarhi%20shastrinagar%20meerut&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <style>
        .mapouter
        {position:relative;text-align:left;margin:10px;height:200px}
        </style>
        <style>
         .gmap_canvas 
        {overflow:hidden;background:none!important;margin:0;height:100%;width:100%}
        </style>
    </div>
</div>
    <!-- info footer -->
  <footer class="panel-footer">
    <div class="container-fluid">
      <div class="row">
        <section id="hours" class="col-sm-4">
            <span>Hours:</span><br>
            Sun-Thurs: 11:15am - 10:00pm<br>
            Fri: 11:15am - 2:30pm<br>
            Saturday Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Contact Us:</span><br>
          7105 Reisterstown Road<br>
          Baltimore, MD 21215
          <hr class="visible-xs">
        </section>
        <section id="aboutus" class="col-sm-4">
            <span>About Us:</span><br>
            We are a bag selling company and a trusted company<br>
            Bags are just not packing thing but also wishes
            <hr class="visible-xs">
          </section>
      </div>
      <div class="text-center">&copy; Copyright Heerock Bags 2021|<a style="color:white">Privacy policy</a></div>
    </div>
  </footer>
  <!-- social media handles -->
  <div class="a ">    
      <ul class="my-3">
          <li><i class="fab fa-facebook-f"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-linkedin-in"></i></li>
          <li><i class="fab fa-youtube"></i></li>
      </ul>
  </div>
</div>
<script>
    var count=0,count4=0;
    function myMove() {
    var elem=document.getElementById("nav-btn");
    var elem1=document.getElementById("nav-btn2");
    var elem2=document.getElementById("nav-list");
    elem.style.display="none";
    elem1.style.display="block";
    elem2.style.left = 0; 
    }
    function myMove2() {
    var elem=document.getElementById("nav-btn");
    var elem1=document.getElementById("nav-btn2");
    var elem2=document.getElementById("nav-list");
    elem2.style.left= -100 +'%';
    elem1.style.display="none";
    elem.style.display="block";
    }
    function popup4(){
      count4++;
      var elem=document.getElementById("search");
      if(count4%2!=0)
        elem.style.display ="block"; 
      else
        elem.style.display="none";
    }
</script>
<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
</script>



</body>
</html>