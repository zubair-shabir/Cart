<?php
include("header.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="Manage_cart.php" method="post">
                <div class="card" >
                    <img src="./images/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Redmi note 7</h5>
                        <p class="card-text">Price: 15000</p>
                        <button type="submit" name="Add_to_cart"  class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Redmi Note 7">
                        <input type="hidden" name="Price" value="15000">


                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-3">
            <form action="Manage_cart.php" method="post">
                <div class="card" >
                    <img src="./images/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samasung galaxy 10</h5>
                        <p class="card-text">Price: 20000</p>
                        <button type="submit" name="Add_to_cart"  class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Samasung galaxy 10">
                        <input type="hidden" name="Price" value="20000">


                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-3">
            <form action="Manage_cart.php" method="post">
                <div class="card" >
                    <img src="./images/14.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 4</h5>
                        <p class="card-text">Price: 25000</p>
                        <button type="submit" name="Add_to_cart"  class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Iphone 4">
                        <input type="hidden" name="Price" value="25000">


                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-3">
            <form action="Manage_cart.php" method="post">
                <div class="card" >
                    <img src="./images/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Redmi Note 4</h5>
                        <p class="card-text">Price: 12000</p>
                        <button type="submit" name="Add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Redmi Note 4">
                        <input type="hidden" name="Price" value="12000">


                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>