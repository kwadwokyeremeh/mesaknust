<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 07/10/2016
 * Time: 07:07
 */?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 02/10/2016
 * Time: 19:59
 */
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--[if IE]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<div class="container">
    <header>
        <!--Navigation-->
        <div class="row">
            <div class="row">
                <nav class="navbar navbar-primary navbar-brand navbar-fixed-top navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img alt="mesa" src="images/logo.jpg" class="pull-left" />Mechanical Engineering Students' Association
                            <p><small>Nothing moves without mechanical engineering</small></p>
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-right nav-tabs-justified" id="collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="academics.php">Academics</a></li>
                            <li><a href="community.php">Community</a></li>
                            <li><a href="clubs.php">Clubs</a></li>
                            <li class="active"><a href="gallery.php">Gallery</a></li>
                            <li><a href="about.php">About</a></li>
                        </ul>
                    </div>
                </nav><!--End of Navigation-->
            </div>
        </div>
    </header><!-- End of header-->
    <!--Page carousel-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/3.jpg" alt="...">
                <div class="carousel-caption">
                    Image 1
                </div>
            </div>
            <div class="item">
                <img src="images/11.PNG" alt="...">
                <div class="carousel-caption">
                    Image 2
                </div>
            </div>
            <div class="item">
                <img src="images/22.PNG" alt="...">
                <div class="carousel-caption">
                    Image 2
                </div>
            </div>
            <div class="item">
                <img src="images/4.jpg" alt="...">
                <div class="carousel-caption">
                    Image 2
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
