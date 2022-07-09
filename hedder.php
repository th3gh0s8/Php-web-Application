<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './dbconn.php';
include './error_handlling.php';
?>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link rel="shortcut icon" href="imgs/lg2light.png">





        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.rtl.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.rtl.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-utilities.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-utilities.rtl.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


        <link rel="stylesheet" type="text/css" href="styles.css">

        <?php
        $keywords = "";
        if (isset($_GET['keywords'])) {
            $keywords = $_GET['keywords'];
        }
        ?>

    </head>
    <body >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      

       

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" alt="logo" src="imgs/lg2light.png"></a>
                <a class="navbar-brand" href="#" ><img alt="logo-name" src="imgs/bnameLight.png"  class="bname"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="d-flex" method="get" action="mySerch.php">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keywords">
                        <button class="btn btn-outline-success"  name="" type="submit" ><img class="logo0" alt="sicon" src="imgs/sicon1.png"></button>
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="menu" alt="menu" src="imgs/puzzle.png">

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                
                                <li><a class="dropdown-item" href="movies.php">Movies</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="games.php">Games</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.php">logins</a></li>
                            </ul>
                        </li>
                       
                      </ul>
                       
                </div>
            </div>
        </nav>
      



<!--

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Sri-Trava</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
        </nav>
-->

        <!--<footer id="footer" class="bg-dark text-white py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-12">
                        <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                        <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
                      </div>
                      <div class="col-lg-4 col-12">
                        <h4 class="font-rubik font-size-20">Newslatter</h4>
                        <form class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Email *">
                          </div>
                          <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-2 col-12">
                        <h4 class="font-rubik font-size-20">Information</h4>
                        <div class="d-flex flex-column flex-wrap">
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                        </div>
                      </div>
                      <div class="col-lg-2 col-12">
                        <h4 class="font-rubik font-size-20">Account</h4>
                        <div class="d-flex flex-column flex-wrap">
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                          <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </footer>
                <div class="copyright text-center bg-dark text-white py-2">
                  <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p>
                </div>-->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
