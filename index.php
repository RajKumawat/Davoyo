<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Davoyo</title>
    <style>

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #3db8e0;
}

.card:hover .overlay {
  opacity: 0.9;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.col-3 a
{
  color: black;
}
.col-md-3:hover
{
  transition-duration: 0.5s;
  transform: scale(1.1);
}
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
 }
</style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--========================Header code starts here=========================-->

    <?php
      include ('header.php');
    ?>

    <!--====================Header code ends here=========================-->


<div class="container" style="margin-top: 50px;">  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/s4.jpg" alt="First slide" style="width: 100%; height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/s2.jpg" alt="Second slide" style="width: 100%; height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/s1.png" alt="Third slide" style="width: 100%; height: 400px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div><br/><br/><br/>




<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" >
        <img src="./images/1.jpg" class="card-img-top" alt="..."style="width:100%; height:250px;border-radius: 0px;">
        <div class="overlay">
          <div class="text">
            <h3>HOT DEALS</h3><hr style="border-top: 1px solid #ffffff;"><br/><h4>Under &#8377;799 Store</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="./images/12.jpg" class="card-img-top" alt="..."style="width:100%; height:250px;border-radius: 0px;">
        <div class="overlay">
          <div class="text">
            <h3>TOP DEALS</h3><hr style="border-top: 1px solid #ffffff;"><br/><h4>Flat 30% OFF on all Style!</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="./images/13.jpg" class="card-img-top" alt="..."style="width:100%; height:250px; border-radius: 0px;">
        <div class="overlay">
          <div class="text">
            <h3>HOT DEALS</h3><hr style="border-top: 1px solid #ffffff;"><br/><h4>Under &#8377;599 Store</h4> 
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="./images/14.jpg" class="card-img-top" alt="..."style="width:100%; height:250px;border-radius: 0px;">
        <div class="overlay">
          <div class="text">
            <h3>HOT DEALS</h3><hr style="border-top: 1px solid #ffffff;"><br/><h4>Extra &#8377;500 OFF & Free Delivery</h4>
          </div>
        </div>
      </div>
    </div>
  </div><!-- row -->
</div><!-- for container fluid -->



  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-12">
        <h3>Fresh recommendations for Men's</h3>
      </div><br/><br/>
      <div class="col-md-3">
        <a href="middleindex.php" target="_blank">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/2.jpg" style="width: 100%; height: 300px;">
          </div>
        </div></a>
      </div>
      <div class="col-md-3">
        <a href="middleindex.php" target="_blank">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/3.jpg" style="width: 100%; height: 300px;">
          </div>
        </div></a>
      </div>
      <div class="col-md-3">
        <a href="middleindex.php" target="_blank">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/4.jpg" style="width: 100%; height: 300px;">
          </div>
        </div></a>
      </div>
      <div class="col-md-3">
        <a href="middleindex.php" target="_blank">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/5.jpg" style="width: 100%; height: 300px;">
          </div>
        </div></a>
      </div>  
    </div>
  </div>



  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-12">
        <h3>Fresh recommendations for Women</h3>
      </div><br/><br/>
      <div class="col-md-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/10.jpg" style="width: 100%; height: 300px;">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/11.jpg" style="width: 100%; height: 300px;">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/10.jpg" style="width: 100%; height: 300px;">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="./images/11.jpg" style="width: 100%; height: 300px;">
          </div>
        </div>
      </div>  
    </div>
  </div>


<!--========================Header code starts here=========================-->

    <?php
      include ('footer.php');
    ?>

    <!--====================Header code ends here=========================-->


  </body>
</html>