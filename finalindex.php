<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>finalindex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .dropdown:hover .dropdown-menu 
    {
      display: block;
      margin-top: 0;
    }
    .center
    {
      text-align: center;
      background-color: #17a2b8;
    }
    .center p
    {
      color: white;
    }
    .cat-links a
    {
      color: black;

    }
    p.text-subcat
    {
      color: #777272;
      margin-bottom: 0px;
    }
    span.text-subcat
    {
      color: #777272;
      text-decoration: line-through;
    }
    span.offer
    {
      color:#17a2b8;
    }
    .card
    {
      border:0px;
    }
    .card img
    {
      width: 100%;
      height: 500px;
      margin-top: 10px;
    }
    span.bl
    {
      color: #777272;
      font-size: 13px;
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
<br/>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="center">
        <p>- Price are inclusive of all taxes -</p>
      </div>
    </div>
    <div class="col-md-12">
      <p class="cat-links">
        <a href="">Home / </a>
        <a href="">Men Clothing / </a>
        <a href="">Jeans /</a>
        <a href=""><b>HIGHLANDER jeans</b></a><!-- this will be reterived from the database -->
      </p>
    </div>
  </div> <!-- row -->
</div><!-- container fluid -->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8"><!-- for images -->
      <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="images/subjeans1_1.jpg">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="images/subjeans1_2.jpg">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="images/subjeans1_3.jpg">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="images/subjeans1_4.jpg">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="images/subjeans1_5.jpg">
        </div>
      </div>
    </div>
    </div><!-- col md 8 -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h4 id="gototop">HIGHLANDER</h4>
          <p style="color: #777272;">Men Blue Slim Fit Mid-Rise Clean Look Stretchable Jeans</p>
          <h5><b>Rs. 584 &nbsp;&nbsp;</b><span class="text-subcat">Rs. 1299 </span><span class="offer"> &nbsp;&nbsp;(55% OFF)</span></h5>
          <p style="color: #17a2b8;">inclusive of all texes</p>
          <a class="btn btn-info" href="" style="width: 100%;">ADD TO CART</a>
          <a class="btn btn-info" href="" style="width: 100%; margin-top: 10px;">BUY NOW</a><hr/>
          <h6>PRODUCT DETAILS</h6>
          <p>Blue medium wash 5-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops</p>
          <h6>Size & Fit</h6>
          <p>Slim Fit<br/>Stretchable<br/>The model (height 6') is wearing a size 32</p>
          <h6>Material & Care</h6>
          <p>97% Cotton 2.5% Polyester 0.5% Elastane<br/>Machine-wash</p>
          <h6>Specification</h6>
          <div class="row">
            <div class="col-md-6">
              <span class="bl">Distress</span>
              <p>Clean Look</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Waist Rise</span>
              <p>Low Rise</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Fade</span>
              <p>Heavy Fade</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Shade</span>
              <p>Medium</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Fit</span>
              <p>Slim Fit</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Length</span>
              <p>Regular</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Waistband</span>
              <p>With Belt Loops</p><hr/>
            </div>
            <div class="col-md-6">
              <span class="bl">Stretch</span>
              <p>Stretchable</p><hr/>
            </div>
        </div><!-- row -->
        <p><a href="#gototop" style="color: #17a2b8;">Go to Top</a></p><hr/>
        <p>DELIVERY OPTIONS <i class='fa fa-truck' style='font-size:24px'></i></p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter Pincode" aria-label="Recipient's username" aria-describedby="basic-addon2" id="checkpin" name="checkpin">
          <div class="input-group-append">
            <button class="btn btn-outline-info" type="submit" id="buttonsubmit">Check</button>
          </div>
        </div>
        <script type="text/JavaScript">
          $(function () 
            {
                $("#buttonsubmit").click(function () 
                {
                    var checkpin = $("#checkpin").val(); 
                    var confirmcheckpin = "500046";
                    if (checkpin != confirmcheckpin) 
                    {
                        alert("!! 😑 DELIVERY NOT AVAIlABLE AT THIS PINCODE !!");
                        return false;
                    }
                    else
                    {
                      alert("!! 😊 DELIVERY AVAIlABLE ")
                    }
                    return true;
                });
            });
        </script>
        <p><span class="bl">Please enter PIN code to check delivery time & Cash/Card on Delivery Availability</span></p>
        <p>100% Original Products<br/>
          Free Delivery on order above Rs. 1199<br/>
          Cash on delivery might be available<br/>
          Easy 30 days returns and exchanges<br/>
          Try & Buy might be available
        </p>
        <p>PRODUCT CODE : <span><strong>0000-001</strong></span></p>
        </div>
      </div>
    </div>
  </div>
</div>


  </body>
</html>