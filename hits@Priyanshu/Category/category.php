<?php
  // Create database connection
  include "conn.php";	
  $result_Sub = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='SubCategory'");
  $category=$_GET['category'];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeeRock</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    
    
   
    <script type="text/javascript" src="js/Jquery.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    


     

</head>
<body>
     <!-- <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="hits intern.html" class="pull-left"><div><h2 id="logo"><strong>HEEROCK</strong></h2></div></a>
        </div>
        <ul id="nav-list"class="nav navbar-nav navbar-left">
          <li class="nav-item"><a class="nav-link" id="link1" href="#">New Arrivals</a></li>
          <li class="nav-item"><a class="nav-link" id="link1" href="#"> Best Deals</a></li>
          <li class="nav-item"><a class="nav-link" id="link1" href="#"> Our Story</a></li>
          <li class="nav-item"><a class="nav-link" href="#categories" id="link1">Category</a></li>
          <li class="nav-item"><a href="./heerockbags/contact_front.html" class="nav-link" id="link1"> Contact Us</a></li>
        </ul>
        <ul id="nav-list2" class="nav navbar-nav navbar-right">
          <li id="nav2item"><a href="#"><span onclick="popup4()"class="glyphicon glyphicon-search"></span></a></li>
          <li id="nav2item"><a href="#"><span onclick="popup1()"class="glyphicon glyphicon-log-in"></span></a></li>
          <li id="nav2item"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          <li id="nav2item"><a href="#"><span onclick="popup2()"class="glyphicon glyphicon-user"></span></a></li>
          <li  id="nav2item"><a href="#"><span id="nav-btn" onclick="myMove()" class="glyphicon glyphicon-th-list"></span></a></li>
        </ul>
      </div>
      <div id="search">
        <div class="indiv">
          <form>
            <input type="text" name="" class="search-txt" placeholder="Type To Search"/>
            <span id="srch-btn"class="glyphicon glyphicon-search"></span>
          </form>
        </div>
      </div> 
    </nav> 
  </header>-->
  <section>
    <div class="head">
    <h2 style="text-align: center;">Navbar</h2>
    <hr>
    </div>

    <div class="container">

        <div class="row row-content">
          <div class="col">
            <div id="mycarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid"
                      src="image/men1.jpeg" alt="1">
                    <div class="carousel-caption d-none d-md-block">
                      <h2><a href="#"><span class="badge badge-danger"></span></span></a></h2>
                    </div>
                  </div>
                <div class="carousel-item">
                   <img class="d-block img-fluid" src="image/men2.jpeg" alt="2">
                      <div class="carousel-caption d-none d-md-block">
                         <h2> <a href="#"><span class="badge badge-danger"></span></span></a></h2>                . . .
                      </div>
                </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="image/men3.jpeg" alt="3">
                    <div class="carousel-caption d-none d-md-block">
                        <h2><a href="#"><span class="badge badge-danger"></span></span></a></h2>              . . .
                    </div>
                </div>
            </div>
          <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
          </ol>

         </div>
        </div>
    </div>  
    </div>
    
    </section>
    
    

<br>
<hr>
    <div class="head">
        <h2>Biggest Deals on trending products</h2>
        <hr>
    </div>

    <section class="slider">
      
        <ul id="autoWidth" class="cS-hidden">
            <li class="item-a">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img1.jpg" alt="1" class="bg">
                        <div class="overlay">      
                                <img src="image/dis1.jpg" alt="" class="dis">           
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 1</h1>  
                            <h2>Rs 500</h2>    	                  
                        </div>
                        <a href="#" class="buy-btn">Add to cart</a>
                    </div>
                </div>
            </li>

            <li class="item-b">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img2.jpg" alt="2" class="bg">
                        <div class="overlay">
                          
                            
                                <div class="rating">
                                    <img src="image/dis2.png" alt="" class="dis">
                                  
                                </div>    
                            
                            </div>
                        </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 2</h1>
                            <h2>Rs 1500</h2>                
                        </div>
                        <a href="#" class="buy-btn">Add to cart</a>
                    </div>
                </div>
            </li>

            <li class="item-c">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img3.jpg" alt="3" class="bg">
                        <div class="overlay">
                                <img src="image/dis3.jpg" alt=""class="dis">
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 3</h1> 
                            <h2>Rs 700</h2>                   
                        </div>
                        
                        <a href="#" class="buy-btn">Add to cart</a>
                    </div>
                </div>
            </li>

            <li class="item-d">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img4.jpg" alt="4" class="bg">
                        <div class="overlay">
                           
                            
                                <div class="rating">
                                   <img src="image/dis1.jpg" alt="" class="dis">
                                    
                                        
                                </div>   
                            </div>
                        </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 4</h1>
                            <h2>Rs 1600</h2>           
                        </div>
                        
                        <a href="#" class="buy-btn">Add to cart</a>
                    </div>
                </div>
            </li>

            <li class="item-e">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img5.jpg" alt="5" class="bg">
                        <div class="overlay">
                                <div class="rating">
                                    <img src="image/dis2.png" alt="" class="dis">         
                                </div>      
                            </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 5</h1>
                            <h2>Rs 2500</h2>         
                        </div>
                        <a href="#" class="buy-btn">Add to cart</a>
                    </div>
                </div>
            </li>

            <li class="item-f">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img6.jpg" alt="6" class="bg">
                        <div class="overlay">
                  
                                
                            <div class="rating">
                                <img src="image/dis3.jpg" alt=""class="dis">     
                            </div>     
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 6</h1>
                            <h2>Rs 420</h2>                  
                        </div>
                        <a href="#" class="buy-btn">Add to cart</a>   
                    </div>
                </div>
            </li>

            
            <li class="item-g">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img7.jpg" alt="7" class="bg">
                        <div class="overlay">
                                
                            <div class="rating">
                                <img src="image/dis1.jpg" alt=""class="dis">
                             
                                    
                            </div>     
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 7</h1>
                            <h2>Rs 4200</h2>                  
                        </div>
                        <a href="#" class="buy-btn">Add to cart</a>
                        
                    </div>
                </div>
            </li>

            
            <li class="item-i">
                <div class="box">
                    <div class="slide-image">
                        <img src="image/img8.jpg" alt="8" class="bg">
                        <div class="overlay">
                  
                           
                                
                            <div class="rating">
                                <img src="image/dis3.jpg" alt="" class="dis">
                                    
                            </div>     
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <h1>Bag 8</h1>
                            <h2>Rs 2200</h2>                  
                        </div>
                        <a href="#" class="buy-btn">Add to cart</a>
                        
                    </div>
                </div>
            </li>

        </ul>
    </div>
    </section>
    <br>
	
    
    <section>
        <div class="container">
        <hr>
          <br>
          <br>
            <div class="head">
                <h2>Categories to <?php echo $category; ?> Bag</h2>
                <hr>
            </div>
          <div class="row justify-content-md-center">
	
	
		  <?php 
		  //$row_img=null;
			while ($row = mysqli_fetch_array($result_Sub)) {
				$sub_cat_name=$row['name'];
				$result_Sub_img = mysqli_query($conn, "SELECT * FROM `product_detail`where category='$category' and subcategory='$sub_cat_name'");
				$row_img=mysqli_fetch_array($result_Sub_img);
				//echo $row_img['image'];
				if(isset($row_img['image']))
				{
				echo "<div class='col-lg-2'>";
				echo "<div class='box1'>";
				echo "<a href='#'>";
				echo "<div class='cat'> ";
				echo "<img src='images/".$row_img['image']."' alt='' class='im1'>";
				echo "</div>";
				echo "</a>";
				echo "<div class='detail'>";
				echo "<div class='type1'>";
				echo "<h1>".$row['name']."</h1>";
				echo "</div>";
				echo "</div>";
				echo "</div> "; 
				echo "</div>";
				}
			}
		  ?>
		
           </div> 
        </div>
    </section>
    <br>
    <hr>
	<br>

    <br>
    <br>
    <hr>

    <footer>
        <div class="container-fluid" style="background-color: aqua;">
            <div class="row">
                <div class="col-lg-4">
                    <h1>Footerrrrrr</h1>
                </div>

                
                <div class="col-lg-4">
                    <h1>Footerrrrrr</h1>
                </div>

                
                <div class="col-lg-4">
                    <h1>Footerrrrrr</h1>
                </div>

            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>