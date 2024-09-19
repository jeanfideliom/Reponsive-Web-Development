<!DOCTYPE html>
<html>

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
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
        <div class="col-md-12">
            <div class="thumbnail">
                <img src="images/LebronXXI.png" style="width: 50%; height:auto; ">
                <div class="caption">
                    <h4 class="pull-right">PHP: 10,895</h4>
                    <h4><a href="product.php">Shoes</a></h4>
                    <div>
                        <button class="btn btn-primary" data-target="#buy_me" data-toggle="modal"
                            style="margin-left:10px; margin-bottom: 10px;">
                            Buy This Shoes
                        </button>
                    </div>

                    <div class="modal fade" id="buy_me">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Buy Shoes</h2>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg"
                                                placeholder="Enter Your Name">
                                        </div>
                                    </form>

                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg"
                                                placeholder="Enter Your Email">
                                        </div>
                                    </form>

                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5"
                                                style="font-size:20px; color:gray;">Address...</textarea>
                                        </div>
                                    </form>

                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="Contact No.">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Submit Order</button>
                                </div>
                            </div>
                        </div>
                    </div>

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
    </header>

    <div class="col-md-8 col-md-offset-4">
        <div class="col-md-12">
            <div class="well">
                <div class="text-right">
                    <button class="btn btn-danger">Leave Comments</button>
                </div>
            </div>

            <div class="well">
                <span class="lead">JFEM</span>
                <span class="pull-right">13 minutes ago</span>
                <p>This shoes is very nice and comfy.</p>
            </div>

            <div class="well">
                <span class="lead">Juan</span>
                <span class="pull-right">15 minutes ago</span>
                <p>This shoes is very nice and comfy.</p>
            </div>

            <div class="well">
                <span class="lead">Pedro</span>
                <span class="pull-right">13 minutes ago</span>
                <p>This shoes is very nice and comfy.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-header">
            <h3 class="text-center">Related Products</h3>
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