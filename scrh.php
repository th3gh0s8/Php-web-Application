Hazeem, [21.01.21 00:51]
<?php
include './DB_connection1.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Products</title>
        <?php
        $keyword = "";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.css"/>
        <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.css"/>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    </head>
    <body>
        <header style="background-color: white; ">
            <div style="width: 100%;height: 30px;background-color: rgba(158,158,158,.2);">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Track my order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sell on more</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                </ul>
            </div>
            <br><br>
            <h1 style="margin-top: -15px;font-family: TESLA";">ezybooks4u</h1>





            <div align="center" style="margin-top: -40px;">

                <form method="get" action="index.php" />
                <input type="text" name="keyword" id="keyword" placeholder="Search in ezybooks4u" style="width: 420px; outline: none; height: 50px;background-color: #fff;" /> 
                <input type="submit"  class="btn btn-primary" value="SEARCH"  />

                </form>
            </div>
            <br><br>
        </header>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catogories
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="Educational_books.php">Educational books</a>
                <a class="dropdown-item" href="Children_books.php">Children books</a>
                <a class="dropdown-item" href="Literature_books.php">Literature books</a>
            </div>
        </div>
        <br><br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/images.jfif" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/booksses.jfif" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/books.png" alt="Third slide">
                </div>
            </div>
        </div>
        <br><br>

        <div style="width: 200px; height: 200px; ">

            <h3>Categories</h3>


            <a href="Educational_books.php" style="margin-left: 20px; text-decoration: none;">Educational books</a><br>
            <a href="Children_books.php" style="margin-left: 20px; text-decoration: none;">Children books</a><br>
            <a href="Literature_books.php" style="margin-left: 20px; text-decoration: none;">Literature books</a><br>

            Hazeem, [21.01.21 00:51]
            <a href="#" style="margin-left: 20px; text-decoration: none;"></a><br>
            <a href="#" style="margin-left: 20px; text-decoration: none;"></a>




        </div>

        <table style="margin-left: 200px;margin-top: -200px; border: 2px solid black;">
            <?php
            $query = "SELECT * FROM books where title like '%" . $keyword . "%'";
            $result = $connection->query($query);
            while ($row = $result->fetch_assoc()) {
                ?>

                <tr style="border: 2px solid black;">


                    <td style="border: 2px solid black;">

                        <span>
                            <a href="viewProduct.php?pid=<?php echo $row["id"]; ?>">
                                <img width="180px" height="180px" src="productImage/<?php echo $row["imageurl"]; ?>">
                            </a>
                    </td>
                    <td style="border: 2px solid black;">
                        <?php
                        echo "<h3>" . $row["title"] . "</h3>";

                        echo "<h3>Rs : " . $row["sellPrice"] . "</h3>";
                        ?>



                    <?php } ?> </span>
                </td>
            </tr>   

        </table>

        <audio controls="" style="margin-top: 100px;">
            <source src="clips/MP3_700KB.mp3">

        </audio>





        <footer style="width: 100%;height: 150px;background-color: #000066;">
            <div style="color: white;list-style-type: none;margin-left: 150px;margin-top: 100px;">
                <h3>Customer care</h3>

                <ul>
                    <li style="list-style-type: none;"><a href="#" class="an">Help center</a></li>
                    <li style="list-style-type: none;"><a href="#" class="an">How to buy</a></li>
                    <li style="list-style-type: none;"><a href="#" class="an">Track your order</a></li>
                    <li style="list-style-type: none;" >
                        <a href="#"class="an">Contact us</a></li>
                </ul>
            </div>
            <div style="color: white;list-style-type: none;margin-left: 450px;margin-top: -150px;">
                <h3>Buybooks</h3>

                <ul>
                    <li style="list-style-type: none;"><a href="#" class="an">About buylap</a></li>
                    <li style="list-style-type: none;"><a href="#" class="an">Terms & conditions</a></li>
                    <li style="list-style-type: none;"><a href="#" class="an">Privacy policy</a></li>

                </ul> 
            </div>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;  <label style="color: white;">   @buylap 2020</label>

        </footer>
    </body>
</html>