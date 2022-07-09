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

<?php
//include './hedder.php';

 $keywords = "";
  if (isset($_GET['keywords'])) {
  $keywords = $_GET['keywords'];
  } 
?>




<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="imgs/lg2light.png">


        <title>Movies</title>

        <!--
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
                <link rel="stylesheet" type="text/css" href="styles.css">
               
            -->    
                
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        
        
 

    </head>
    <body class="" style=" background-image: url('pics/pics4.jpg');height: auto; width: 100%; background-size: cover">
        
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <?php
        //include './hedder.php';
        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" alt="logo" src="imgs/lg2light.png"></a>
                <a class="navbar-brand" href="#"><img alt="logo-name" src="imgs/bnameLight.png"  class="bname"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    
                    
                    
                    <form class="d-flex" method="get" action="movies.php">
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
      


        <br><br>

        <!--        <div class="container-fluid row">
                    
        
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 game1 r3 ">
                        <a href="vids/gvids/Official Call of Duty® Black Ops III - Story Trailer.mp4">
                        <img alt="game1.jpg" src="gimgs/game1.jpg" class="r3 img-fluid " style="">
                        </a>
                        </div>
                  
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 game1 r3">
                        <a href="vids/gvids/Mass Effect 1 Trailer.mp4">
                        <img alt="game2.jpg" src="gimgs/game2.jpg" class="r3 img-fluid">
                        </a>
                        </div>
                       
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 game1 r3">
                        <a href="vids/gvids/halo.mp4">
                        <img alt="game3.jpg" src="gimgs/game3.jpg" class="r3 img-fluid">
                        </a>
                        </div>
                    
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 game1 r3">
                        <a href="vids/gvids/Battlefield 1 Official Reveal Trailer.mp4">
                        <img alt="game4.jpg"  src="gimgs/game4.jpg" class="r3 img-fluid">
                        </a>
                        </div>
                    
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 game1 r3">
                        <a href="vids/gvids/Cyberpunk 2077 — Official Gameplay Trailer.mp4">
                        <img alt="game5.jpg"  src="gimgs/game5.jpg" class="r3 img-fluid">
                       </a>
                        </div> 
                    
                    
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 game1 r3">
                        <a href="vids/gvids/farcry.mp4">
                        <img alt="game6.jpg"  src="gimgs/game6.jpg" class="r3 img-fluid">
                        </a>
                        </div>
                    
                </div>
        
        -->

        <div class="container-fluid row row-col-12 row-col-sm-6 row-col-md-4 row-col-lg-2">
            <?php
            $movie = "movie";

            $query = "SELECT * FROM product WHERE name  LIKE '%" . $keywords . "%' AND cat LIKE '%" . $movie . "%' ";
            $result = $connection->query($query);

            while ($row = $result->fetch_assoc()) {
                ?>


                
                    <div class="game1 r3  mb-4 box128">
                        <a href="<?php echo $row["url"]; ?>">
                            <img alt="game1.jpg" src="<?php echo $row["img"];?>" class="r3 img-fluid " style="">
                            
                       

                        </a>

                
            </div>

            <?php
        }
        ?>
    </div>

</body>
</html>
