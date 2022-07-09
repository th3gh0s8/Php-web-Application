
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
        <title></title>
                <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="login.css">



    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <?php
        // put your code here
        ?>

        <div class="container" style="width: 500px; height: 800px;">

            <form class="row g-3" action="coustReg.php" method="POST">

                <span for="validationServer01" class="form-label">ID</span>
                <span>  <input type="number" name="inid" class="form-control is-valid"  required></span>

                <span for="validationServer01" class="form-label">userName</span>
                <span>  <input type="text" name="inUsername" class="form-control is-valid" required></span>



                <span for="validationServer02" class="form-label">tpNO</span>
                <span><input type="tel" name="inTpno" class="form-control is-valid" required></span>




                <span for="validationServer01" class="form-label">Email</span>
                <span><input type="email" name="inEmail" class="form-control is-valid" required></span>


                <span for="validationServer01" class="form-label">Password</span>
                <span><input type="password" name="inPassword" class="form-control is-valid"required></span>

                <br>





                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>


        <div>
            <table class="table table-dark table-hover">
                <tr>
                    <td>id</td>
                    <td>username</td>
                    <td>tpno</td>
                    <td>email</td>
                    <td>password</td>
                    <!--<td>type</td>-->
                    <td>update</td>
                    <td>#</td>
                </tr>
                <?php
                $query = "SELECT * FROM customer";
                $result = $connection->query($query);


                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="updateUser.php" method="POST">
                        <tr>
                            <td><input type="text" name="id" id="id" value="<?php echo $row["id"]; ?>" /></td>
                            <td><input type="text" name="username" id="username" value="<?php echo $row["usename"]; ?>" /></td>
                            <td><input type="tel" name="tpno" id="tpno" value="<?php echo $row["tpno"]; ?>" /></td>
                            <td><input type="email" name="email" id="email" value="<?php echo $row["email"]; ?>" /></td>
                            <td><input type="password" name="password" id="password" value="<?php echo $row["password"]; ?>" /></td>
                            <td><input type="submit" value="Update" /></td>
                            <td><a href="deleteUser.php?id=<?php echo $row["id"]; ?>">delete</a></td>

                        </tr>
                    </form>

                    <?php
                }
                ?>
            </table>
        </div>


    </body>
</html>