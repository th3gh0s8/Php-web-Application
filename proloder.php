<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title></title>

        <?php
        include './dbconn.php';
        include './error_handlling.php';
        ?>
    </head>
    <body>
        <?php
        $id = $_GET['id'];

        
        ?>

        <?php
        $query = "SELECT * FROM product WHERE productId  LIKE '" . $id . "'   ";
        $result = $connection->query($query);

        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col mb-4">
                <div class="card">
                    <div class="card-header">
                        <a href="<?php echo $row["url"]; ?>">
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
                </div>
            </div>
            <?php
        }
        ?> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>
