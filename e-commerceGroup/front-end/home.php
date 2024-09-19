<!DOCTYPE html>
<?php
session_start();
include ("../includes/functions.php")
    ?>
<html>

<head>
    <title>The Selling Board</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        section {
            min-height: 80vh;
        }

        .carousel {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .carousel-inner img {
            width: 100%;
            /* Make sure the images fill the carousel container */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Ensures proper spacing */
            margin: auto;
            /* Centers the images horizontally */
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        footer {
            background-color: black;
            color: white;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .social-icons i {
            font-size: 24px;
        }

        .thumbnail {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            text-align: justify;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .thumbnail img {
            max-width: 100%;
            height: 300px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .caption {
            padding: 10px;
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
        <header class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="align-center">Top Categories</h1>
                    <aside>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="electronicdevices.php" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/thumbnails/electronic.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Electronic Devices</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Upgrade Now!</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/thumbnails/Fashion.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Fashion</h4>                                           
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Newest and Trendy Outfits.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                            
                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                    <img src="../images/thumbnails/grocery.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Grocery</h4>
                                        <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                    <img src="../images/thumbnails/home_and_living.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Home and Living</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                    <img src="../images/thumbnails/sports.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Sports</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </aside>

                </div>

                <div class="col-md-4">
                    <div>
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../images/homeCarousel/promo1.png">
                                    <div class="carousel-caption">
                                        <h4>Show now to avail the promo!</h4>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/homeCarousel/promo2.png">
                                    <div class="carousel-caption">
                                        <h4>Located at the 2nd Floor</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <h1 class="align-center">Trending Products</h1>
                    <aside>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="electronicdevices.php" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/thumbnails/electricity.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Electronic Devices</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Shop Now!</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/thumbnails/Fashion.png"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>Item Name</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/DunkLow.jpg" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/AirJordan.jpg" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/Tatum2.jpg" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        </header>

    </section>

    <section>
        <div class="container">
            <div class="page-header">
                <h3>All Products</h3>
            </div>

            <div class="container">
                <?php
                viewAll();
                ?>
            </div>

        </div>
        <?php
        function viewAll()
        {

            include ("includes/sqlconnection.php");
            $sql = "SELECT * FROM products ORDER BY id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                            <div class='col-md-4'>
                                <div class='thumbnail'>
                                    <img src='../images/products/$row[category]/$row[photo]' alt='$row[photo]' style='width:100%'>
                                    <div class='caption'>
                                        <h4>$row[prodName]</h4>
                                        <p>Price: ₱$row[price]</p>
                                        <p>Description: $row[caption]</p>
                                        <a href='product.php?id=$row[id]&categ=$row[category]'><button class='btn btn-success'>View Product</button></a>
                                    </div>
                                </div>
                            </div>
                        ";
                }
            } else {
                echo "
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    ";
            }
            $conn->close();
        }
        ?>
    </section>

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