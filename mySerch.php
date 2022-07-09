<!DOCTYPE html>
<?php
include './dbconn.php';
include './error_handlling.php';
//include './hedder.php';
?>

<html>

    <?php
    include './hedder.php';
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-grid.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-grid.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-grid.rtl.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-grid.rtl.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-reboot.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-reboot.rtl.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-utilities.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap-utilities.rtl.min.css">-->


        <link rel="stylesheet" type="text/css" href="styles.css">


        <?php
        //include './hedder.php';

        $keywords = "";
        if (isset($_GET['keywords'])) {
            $keywords = $_GET['keywords'];
        }
        ?>

    </head>
    <body>       
        <br><br>



        <!--<form method="get" action="mySerch.php" />
        <input type="text" name="keywords" id="keywords" placeholder="Search here" style="width: 420px; outline: none; height: 50px;background-color: #fff;" /> 
        <input type="submit"  class="btn btn-primary" value="SEARCH"  />

    </form>-->




        <?php /*
          $query = "SELECT * FROM product WHERE name  LIKE '%" . $keywords . "%' OR cat LIKE '%" . $keywords . "%' ";
          $result = $connection->query($query);

          while ($row = $result->fetch_assoc()) {
          ?>

          <div class="card p-3 mb-2 bg-light text-xxl-center" style="color:lightyellow ;max-width: 1300px; background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
          <div class="row g-0">

          <div class="col-md-3 ">
          <img src="<?php echo $row["img"];  ?>" style="max-width: 400px; max-height: 300px;">
          </div>
          <div class="col-md-2 ">
          <div class="card-body">
          <h5 class="card-title"><?php echo $row["name"];  ?></h5>
          <p class="card-text"><?php echo $row["price"];  ?></p>

          </div>

          </div>
          </div>
          </div>
          <!--
          <div class="card-group">
          <div class="card" >
          <img src="<?php echo $row["img"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title"><?php echo $row["name"]; ?></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <p class="card-text"><?php echo $row["price"]; ?></p>
          </div>
          </div>


          </div>
          </div>-->
          <?php
          } */
        ?> 


        <div class="container text-center">
            <div class="row row row-col-12 row-col-sm-6 row-col-md-4 row-col-lg-2">


                <?php
                $query = "SELECT * FROM product WHERE name  LIKE '%" . $keywords . "%' OR cat LIKE '%" . $keywords . "%' ";
                $result = $connection->query($query);

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col mb-4 box128">
                        <div class="card">
                            
                            <div class="card-header">
                                 <a href="proloder.php?id=<?php echo $row["productId"]; ?>">
                                    <img class="r3 img-fluid mb-4 " src="<?php echo $row["img"]; ?>" style="max-width: 400px; max-height: 300px;">
                               </a>
                            </div>
                            <div class="card-body">

                                <h1 class="font-weight-normal"><?php echo $row["price"]; ?>Rs</h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><?php echo $row["name"]; ?></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?> 
            </div>
        </div>


    </body>
</html>