<?php
include "connection.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>


</head>
    <style>
        .card-body{
            text-align: center;
        }
        .card-women , .card-men , .card-kids{
            background-color: rgba(0,0,0,0.1);
            padding-left:20px;
            padding-right: 20px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .card{
            border: 1px solid rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }
        
        .card-img-top{
            width: 100%;
            height: 200px;
            
        }
       
        .s-tag{
            width:40px;
            height:40px;
            position:absolute;
            top:-10px;
            left:-10px;
        }

        .des{
            display:flex;
            justify-content:space-between;
            align-items:center;
            
            
        }
        .price{
            float:left;
            font-weight:700;
        }
        .cart{
            float:right;
        }
        .btn-outline-secondary:hover{
            background-color:rgba(0,0,0,0.1);
        }

    </style>
<body>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Heerock</a></li>
          <li class="breadcrumb-item active" aria-current="page">New Arrivals</li>
        </ol>
      </nav>

<div class="card-women">New Arrivals For Women<small class="text-muted" style="float:right"></small></div>
<div class="container-fluid">
<div class="row">
    
    <?php

    $query="select * from newArrivals where p_category='Women'";
    $queryResult=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($queryResult))
    {
        echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row['p_img'] ).'"/>';
        echo '<img class="s-tag" src="new.png">';
        echo '<div class="card-body">';
        echo '<h6 class="card-title">'.$row["p_name"].'</h6>';

        echo '<div class="des">';

        echo '<div class="price">Rs 9000</div>';
        echo '<div class="cart"><a href="#" class="btn btn-outline-secondary"><img src="fast-cart.png"/></a></div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
    }
    ?>
                 
</div>
</div>

<hr>
<br>


<div class="card-men">New Arrivals For Men<small class="text-muted" style="float:right"></small></div>

<div class="container-fluid">
<div class="row">
    
    <?php

    $query="select * from newArrivals where p_category='Men'";
    $queryResult=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($queryResult))
    {
        echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row['p_img'] ).'"/>';
        echo '<img class="s-tag" src="new.png">';
        echo '<div class="card-body">';
        echo '<h6 class="card-title">'.$row["p_name"].'</h6>';

        echo '<div class="des">';

        echo '<div class="price">Rs 9000</div>';
        echo '<div class="cart"><a href="#" class="btn btn-outline-secondary"><img src="shop-cart.svg"></a></div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
                 
</div>
</div>




<hr>
<br>


<div class="card-kids">New Arrivals For Kids<small class="text-muted" style="float:right"></small></div>

<div class="container-fluid">
<div class="row">
        
    <?php

    $query="select * from newArrivals where p_category='Kids'";
    $queryResult=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($queryResult))
    {
        echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3">';
        echo '<div class="card">';
        echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row['p_img'] ).'"/>';
        echo '<img class="s-tag" src="new.png">';
        echo '<div class="card-body">';
        echo '<h6 class="card-title">'.$row["p_name"].'</h6>';

        echo '<div class="des">';

        echo '<div class="price">Rs 9000</div>';
        echo '<div class="cart"><a href="#" class="btn btn-outline-secondary"><img src="shop-cart.svg"></a></div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
                 
</div>
</div>


<br>
<hr>
<br>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  


</body>
</html>