<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <?php
        include './dbconn.php';
        include './error_handlling.php';
        ?>


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

    </head>
    <body class="bg-dark" style="color: silver; background-image: url('gimgs/carousel4.jpg'); background-repeat: no-repeat;background-size: cover;">
    
        
        
        
        
        <nav class="navbar navbar-expand-lg " style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" alt="logo" src="imgs/lg2light.png"></a>
                <a class="navbar-brand" href="#"><img alt="logo-name" src="imgs/bnameLight.png"  class="bname"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                   
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="menu" alt="menu" src="imgs/puzzle.png">

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                
                                <li><a class="dropdown-item" href="movies.php">Movies</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="games.php">Games</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">logins</a></li>
                            </ul>-->
                        </li>
                         <form class="d-flex" method="get" action="mySerch.php">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keywords">
                        <button class="btn btn-outline-success"  name="" type="submit" ><img class="logo0" alt="sicon" src="imgs/sicon1.png"></button>
                    </form>
                       
                      </ul>
                       
                </div>
            </div>
        </nav>
        
        
        
        <br><br>
         <br><br> 
      
        <div class="container-fluid row" >
            <div class="col-12 col-sm-6 col-md-4" ></div>

            <div class="col-12 col-sm-6 col-md-4"  style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
                <form >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
                <br><br/>
            </div>

            <div class="col-12 col-sm-6 col-md-4" ></div>
        </div>

        
     
    </body>
</html>
