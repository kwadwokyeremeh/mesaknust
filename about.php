<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 07/10/2016
 * Time: 07:08
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
<header>
    <!--Navigation-->
    <div class="row">
        <div class="row">
            <nav class="navbar navbar-primary navbar-brand navbar-fixed-top navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
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
                        <li><a href="gallery.php">Gallery</a></li>
                        <li class="active"><a href="about.php">About</a></li>
                    </ul>
                </div>
            </nav><!--End of Navigation-->
        </div>
    </div>
</header><!-- End of header-->
<body>
<!-- Main Container -->
<div class="container">
<!--Main section-->
<div class="row">
    <div class="col-sm-9 col-sm-push-3">
        <div class="jumbotron"><!--Welcome message from the President-->
            <h4 id="prez">Welcome message from the President</h4>
            <p><img src="images/jumbotron.jpg" class="pull-left img-responsive img-rounded"> Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna. In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique.</p>
        </div>
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="#"></iframe>
        </div>
        <div class="panel">
            <h4 class="panel-heading" id="mesa_a"> About Mesa</h4>
            <div class="panel-body">
<!--Content about mesa goes here-->

            </div>
<!--Content about current patron goes here-->
            <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                <h4 id="pat_c">Patron</h4>
                <p class="tag">Bio</p>
                <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
<!--Content of past patron goes here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title" id="pat_p"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">Past Patrons</a></h4>
                </div>
                <div id="collapseOne1" class="panel-collapse collapse">
                    <div class="panel-body">
    <!--Body Content for past patrons-->
                        <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                            <h4>Patron</h4>
                            <p class="tag">Bio</p>
                            <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
<!--Content of current executive goes here-->
            <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                <h4 id="exec_c">Executive</h4>
                <p class="tag">Bio</p>
                <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                <h4>Executive</h4>
                <p class="tag">Bio</p>
                <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                <h4>Executive</h4>
                <p class="tag">Bio</p>
                <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                <h4>Executive</h4>
                <p class="tag">Bio</p>
                <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
<!--Content of past student executive goes here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 id="exec_p" class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">Past student executives</a></h4>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse">
                    <div class="panel-body">
    <!--Body Content for past student executives-->
                        <div class="thumbnail"> <a href="#"><img src="#" alt="#"  class="cards"/></a>
                            <h4>Past Executive</h4>
                            <p class="tag">Bio</p>
                            <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Left sidebar-->
    <div class="col-sm-3 col-sm-pull-9">
        <ul class="#">
            <li><a href="#prez">Welcome from the president</a></li>
            <li><a href="#">Short video about the president</a></li>
            <li><a href="#mesa_a">About Mesa</a></li>
            <li><a href="#">Introduction</a></li>
            <li><a href="#">Vision of mesa</a></li>
            <li><a href="#">Mission of mesa</a></li>
            <li><a href="#pat">Patron</a></li>
            <li><a href="#pat_c">current Patron</a></li>
            <li><a href="#pat_p">past patron</a></li>
            <li><a href="#exec">Students' Executive</a></li>
            <li><a href="#exec_c">Current executive</a></li>
            <li><a href="#exec_p">Past executive</a></li>
        </ul>
    </div>

</div>
</div>

    <!-- Main Container Ends -->
</body>
<!--javascript-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>