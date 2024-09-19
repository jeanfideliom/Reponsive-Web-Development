<!DOCTYPE html>
<html>

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        .carousel {
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        .navbar-inverse .navbar-brand {
            color: white;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-Commerce</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">Software</a></li>
                    <li><a href="#skills">Music</a></li>
                    <li><a href="#projects">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <aside class="col-md-4">
        <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
                <a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
                    <div class="col-md-3" style="padding: 0; margin: 0;">
                        <img src="images/LebronXXI.png" style="width: 80px; height: 100px;">
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
                <a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
                    <div class="col-md-3" style="padding: 0; margin: 0;">
                        <img src="images/AirForce1.png" style="width: 80px; height: 100px;">
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
                <a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
                    <div class="col-md-3" style="padding: 0; margin: 0;">
                        <img src="images/DunkLow.jpg" style="width: 80px; height: 100px;">
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
                <a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
                    <div class="col-md-3" style="padding: 0; margin: 0;">
                        <img src="images/AirJordan.jpg" style="width: 80px; height: 100px;">
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
                <a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
                    <div class="col-md-3" style="padding: 0; margin: 0;">
                        <img src="images/Tatum2.jpg" style="width: 80px; height: 100px;">
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

    <header class="col-md-8">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/LebronXXI.png" alt="Lebron XXI">
                    <div class="carousel-caption">
                        <h4>My Photo 1</h4>
                        <p>My Shoes 1</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/AirForce1.png" alt="Air Force 1">
                    <div class="carousel-caption">
                        <h4>My Photo 2</h4>
                        <p>My Shoes 2</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/AirJordan.jpg" alt="Air Force 1">
                    <div class="carousel-caption">
                        <h4>My Photo 3</h4>
                        <p>My Shoes 3</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/DunkLow.jpg" alt="Air Force 1">
                    <div class="carousel-caption">
                        <h4>My Photo 4</h4>
                        <p>My Shoes 4</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/Tatum2.jpg" alt="Air Force 1">
                    <div class="carousel-caption">
                        <h4>My Photo 5</h4>
                        <p>My Shoes 5</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </header>

    <div class="container">
        <div class="page-header">
            <h3>All Products</h3>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 100%;">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore is
                        even
                        better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                        low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                        Created
                        for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor attacks
                        and
                        rising towards the rim when the game's pace turns up. This rugged design encourages you to keep
                        going even when things get difficult. With its extra-durable rubber outsole, this version gives
                        you
                        traction for outdoor courts.</p>
                </div>
            </div>
        </div>


    </div>


</body>

</html>