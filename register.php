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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="login.css">


        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <!--
                <form action="doRegGames.php" method="post">
        
                    id<input type="number" name="id"><br><br>
                    name<input type="text" name="name"><br><br>
                    price<input type="text" name="price"><br><br>
                    img<input type="text" name="img"><br><br>
                    url<input type="text" name="url"><br><br>
                    catagory<select name="catg" >
                        <option name="catg" selected></option>
                        <option name="catg" value="games">games</option>
                        <option name="catg" value="movies">movies</option>
                        <option name="catg" value="songs">songs</option>
                        <option name="catg" value="songs">software</option>
                    </select><br><br>
                    <input type="submit" value="submit">
                </form>
        -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <?php
        // put your code here
        ?>

        <div class="container" style="width: 500px; height: 800px;">

            <form class="row g-3" action="doRegGames.php" method="POST">

                <span for="validationServer01" class="form-label">proID</span>
                <span>  <input type="number" name="id" class="form-control is-valid"  required></span>

                <span for="validationServer01" class="form-label">proName</span>
                <span>  <input type="text" name="name" class="form-control is-valid" required></span>



                <span for="validationServer02" class="form-label">price</span>
                <span><input type="text" name="price" class="form-control is-valid" required></span>




                <span for="validationServer01" class="form-label">img</span>
                <span><input type="text" name="img" class="form-control is-valid" required></span>


                <span for="validationServer01" class="form-label">url</span>
                <span><input type="text" name="url" class="form-control is-valid"required></span>

                <span for="validationServer01" class="form-label">cat</span>
                <span><input type="text" name="catg" class="form-control is-valid"required></span>

                <br>





                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>


        <div>
            <table class="table table-dark table-hover">
                <thead>
                <tr>
                    <td scope="col">proID</td>
                    <td scope="col">name</td>
               
                    <td scope="col">price</td>
                    <td scope="col">img</td>
                    <td scope="col">url</td>
                    <td scope="col">cat</td>
                    <td scope="col">update</td>
                    <td scope="col">#</td>
                </tr>
                </thead>
                
                <tbody>
                <?php
                $query = "SELECT * FROM product";
                $result = $connection->query($query);


                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="updatePro.php" method="POST">
                        <tr>
                            <td scope="col"><input type="number" name="productId" id="id" value="<?php echo $row["productId"]; ?>" /></td>
                            
                            <td scope="col"><input type="text" name="name" id="username" value="<?php echo $row["name"]; ?>" /></td>
                            
                            
                            <td scope="col"><input type="text" name="price" id="tpno" value="<?php echo $row["price"]; ?>" /></td>
                            
                            <td scope="col"><input type="text" name="img" id="img" value="<?php echo $row["img"]; ?>" /></td>
                            
                            <td scope="col"><input type="text" name="url" id="url" value="<?php echo $row["url"]; ?>" /></td>
                            
                            <td scope="col"><input type="text" name="cat" id="cat" value="<?php echo $row["cat"]; ?>" /></td>

                            <td scope="col"><input type="submit" value="Update" /></td>
                            <td scope="col"><a href="deletePro.php?productId=<?php echo $row["productId"]; ?>">delete</a></td>

                        </tr>
                    </form>

                    <?php
                }
                ?>
                <tbody>
            </table>
        </div>

    </body>
</html>
