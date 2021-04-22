<?php require_once('../resources/config.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ridiculous Rides</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Rent</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                     <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Ridiculous Rides</p>
                <div class="list-group">
                    <a href="category.html" class="list-group-item">Available Cars</a>
                    <a href="#" class="list-group-item">Contact</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="https://media.ed.edmunds-media.com/bentley/continental/2020/oem/2020_bentley_continental_coupe_gt-v8_fq_oem_2_815.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://www.supercars.net/blog/wp-content/uploads/2019/11/f8fb3299-mclaren-p1-gtr-5.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://media.ed.edmunds-media.com/rolls-royce/phantom/2018/oem/2018_rolls-royce_phantom_sedan_base_fq_oem_2_1600.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <?php 
                    $query = "SELECT * FROM car LIMIT 6";
                    $all_cars = mysqli_query($connection,$query);
                    if(!$all_cars) {
                        die("Query Failed" . mysqli_error($connection));
                    }
                    while($row = mysqli_fetch_assoc($all_cars)) {
                        $car_id = $row['car_id'];
                        $make = $row['make'];
                        $model = $row['model'];
                        $image = $row['image'];
                        $horsepower = $row['horsepower'];
                        $zero_sixty = $row['0-60Time'];
                        $price = $row['price'];
                        $year = $row['year'];
                        ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img class = 'img-fluid' style='height:auto;' src="<?php echo $image ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $price?></h4>
                                <h4><a href="#"><?php echo $make . " " . $model ?></a>
                                </h4>
                                <p>0 - 60: <?php echo " ".$zero_sixty?> seconds</p>
                                <p>Horsepower: <?php echo " ".$horsepower?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Ridiculous Rides 2021</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
