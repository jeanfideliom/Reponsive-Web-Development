<!DOCTYPE html>
<?php
session_start();
include ("../includes/functions.php");

?>
<html>

<head>
    <title>The Selling Board</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .cart-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .cart-items {
            border: 1px solid #ccc;
            padding: 20px;
            width: 45%;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .cart-item div {
            display: flex;
            align-items: center;
        }

        .cart-item input[type="number"] {
            width: 50px;
            margin-left: 10px;
        }

        footer {
            background-color: black;
            color: white;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .social-icons i {
            font-size: 24px;

        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" name="logo">TSB</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="electronicdevices.php">Electronic Devices</a></li>
                            <li><a href="homeliving.php">Home and Living</a></li>
                            <li><a href="fashion.php">Fashion</a></li>
                            <li><a href="sports.php">Sports</a></li>
                            <li><a href="grocery.php">Grocery</a></li>
                        </ul>
                    </li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="cart.php">My Cart<span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="cart-container">
                <div class="cart-items">
                    <h2>Shopping Cart</h2>
                    <?php fetchCart(); ?>

                    <button id="checkoutTrigger" data-toggle="modal" data-target="#checkout">Checkout</button>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="checkout">
        <form class='form-inline' action='frontcontrol.php' method='POST' enctype='multipart/form-data'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Checkout</h2>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Do you confirm your order ?</p>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-danger" name="checkoutComplete">Confirm</button>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer class="text-center">
        <a href="#home" class="btn btn-secondary"><span class="glyphicon glyphicon-circle-arrow-up"></span> Back to
            top</a>
        <p>© 2024 The Selling Board</p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/jeanfideliom/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/yourprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>

</html>