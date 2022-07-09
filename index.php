<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <link rel="shortcut icon" href="imgs/lg2light.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


        <link rel="stylesheet" type="text/css" href="styles.css">  

        <?php
        $keyword = "";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }
        ?>




    </head>
    <body class="repo bg-dark" >
        <?php
        include './hedder.php';
        ?>




        <!--


        <div class="sb1-dvi row">
            <a href='1.html'>
                <button class='sb1 Gpic'></button>
            </a>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            <a href='2.html'>
                <button class='sb1 Mpic'></button>
            </a>
            <br><br><br>
            <a href='3.html'>
                <button class='sb1 Mupic'></button>
            </a>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            <a href='4.html'>
                <button class='sb1 Spic'></button></a>
        </div>
        
        -->



    <!--<center>

        <div class="container-fluid row">
            
         

     
            <div class="col-12 col-sm-6 col-md-3 ">
                <a href='games.php' class="img-fluid">
                    <button class='sb1 Gpic '></button>
                </a>
                
               
            </div>
            <div class="col-12 col-sm-6 col-md-3  ">
                <a href='movies.php' class="img-fluid">
                    <button class='sb1 Mpic '></button>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-3 ">
                <a href='3.html' class="img-fluid">
                    <button class='sb1 Mupic '></button>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-3 ">
                <a href='4.html' class="img-fluid">
                    <button class='sb1 Spic '></button>
                </a>
           </div>
        </div>

    </center> -->

























        <!-- carousal -->









        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"></li>


            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="carro/carro1.png" class="d-block w-100 img-fluid" alt="1">
                </div>



                <div class="carousel-item">
                    <img src="carro/carro2.jpg" class="d-block w-100 img-fluid" alt="2">
                </div>


                <div class="carousel-item">
                    <img src="carro/carro3.jpg" class="d-block w-100 img-fluid " alt="3">
                </div>



                <div class="carousel-item">
                    <img src="carro/carro4.jpg" class="d-block w-100 img-fluid" alt="4">
                </div>


                <div class="carousel-item ">
                    <img src="carro/carro5.jpg" class="d-block w-100 img-fluid" alt="5">
                </div> 


                <div class="carousel-item">
                    <img src="carro/carro7.jpg" class="d-block w-100 img-fluid" alt="6">
                </div>


                <div class="carousel-item">
                    <img src="carro/carro75.jpg" class="d-block w-100 img-fluid" alt="7">
                </div> 



                <div class="carousel-item">
                    <img src="carro/carrol.jpg" class="d-block w-100 img-fluid" alt="8">
                </div>




                <div class="carousel-item">
                    <img src="carro/curro.jpg" class="d-block w-100 img-fluid" alt="9">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>


        <!--
        
            <center>
        
                <br/><br/>
        
                <div class="container-fluid row">
        
        
        
        
                    <div class="col-12 col-sm-6 col-md-6 ">
                        <a href='games.php' class="img-fluid">
                            <button class='sb1 Gpic '></button>
                        </a>
        
        
                    </div>
                    <div class="col-12 col-sm-6 col-md-6  ">
                        <a href='movies.php' class="img-fluid">
                            <button class='sb1 Mpic '></button>
                        </a>
                    </div>
        
                </div>
        
            </center>-->


        <br><br/>

        <section>
            <div class="container" style=" background-position: center;">
                <div class="row">

                    <div class="col-md-6">
                        <center>

                            <div class="box " style="width: 200px;">
                                <a href="games.php">
                                    <img src="pics/pics3.jpg"> 
                                </a>
                            </div>

                        </center>
                    </div>
                    <div class="col-md-6">

                        <div class="box " style="width: 200px;">
                            <a href="movies.php"><img src="pics/pics5.jpg"></a>
                            
                        </div>

                    </div>

                </div>

            </div>

        </section>




        <!-- footer -->


        <!--
              <footer id="footer" class="bg-dark text-white py-5">
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
              </div>
      
              
              
              
              
                 <br><br>
      
        -->  

        <?php
        include './footer.php';
        ?>


    </body>
</html>
