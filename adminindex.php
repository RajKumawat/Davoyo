
<!DOCTYPE html>
<html>
<head>
	<title>admin index</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body style="background-color: #9fd0d8;">

	<!-- <link rel="stylesheet" type="text/css" href="../css/adminindex.css"> -->

	  <nav class="navbar navbar-inverse fixed-top" style=" background-color: #17a2b8; border:0px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:#17a2b8;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style=" font-size: 25px;color: white;">Admin Davoyo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="border-color: #3c5984; width: 100%;">
          <ul class="nav navbar-nav" style="width: auto; float: right; ">
            <li style="float:right;"><a href="#"  style="color: white; font-size: 20px;"> Hello Seraj Khan 😊</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row" style=" margin-top: -20px;">
      	<div class="col-md-3" style="margin-top: 35px;">
      		<div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" style="height: 60px;"><h4><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Dashboard</h4></a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Setting</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;Page Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-adjust"></span>&nbsp;&nbsp;Matadata</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-magnet"></span>&nbsp;&nbsp;Introduction</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Items</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Slider Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Team Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Service Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Portfolio Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Enquary Management</a>  
          </div>
      	</div>

      	<div class="col-md-9">
          <div class="col-md-12" style="margin-top:35px;">
            <p style="font-size: xx-large; color: #264865;">Manage Davoyo</p>
          </div>
      		<div class="row">
            <div class="col-md-4">
              <div class="thumbnail tk">
                <img src="images/a1.jpg" style="width: 100%; height: 300px;">
              </div>
              <h2>Admin</h2>        
            </div><!-- end of col-md-4 -->

            <div class="col-md-4">
              <div class="thumbnail tk">
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="background-color: white; height: 300px;  text-align: center;">
                  <img src="images/a2.png" style="width: 100%; height: 300px;">
                </button>
              </div>
              <h2>Upload</h2>
            </div><!-- end of col-md-4 -->

            <div class="col-md-4" onclick="location.href='demo.php'">
              <div class="thumbnail tk">
                <img src="images/a3.png"style="width: 100%; height: 300px;">
              </div>
              <h2>Users</h2>
            </div><!-- end of col-md-4 -->

            <div class="col-md-6">
              <div class="card">
          	   <img src="images/a5.png" style="width: 100%; height: 300px;">
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
          	   <img src="images/a6.png" style="width: 100%; height: 300px;">
              </div>
            </div>

        </div> <!-- row col md 9 -->
      </div><!-- col md 9 -->
    </div><!--end of row--><br><br>
  </div><!-- container fluid -->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <p class="modal-title" style="font-size: 33px; color: #215d88;">Cloths Upload Form</p>
          <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="functionality/clothupload.php" method="POST">
            <div class="form-group">
              <label for="exampleInput">Name of Brand</label>
              <input type="text" class="form-control"  placeholder="Enter brand name" name="name">
            </div>

            <div class="form-group">
              <label for="sel1">Type For</label>
              <select class="form-control" id="typefor" name="typefor">
                <option>Men</option>
                <option>Women</option>
                <option>Kids</option>
              </select>
            </div>

            <div class="form-group">
              <label for="sel1">Brand Catogery</label>
              <input type="text" class="form-control" placeholder="Enter brand catogery" name="brandcatogery">
            </div>

            <div class="form-group">
              <label for="sel1">Price</label>
              <input type="number" class="form-control"  placeholder="Price" name="price">
            </div>

            <div class="form-group">
              <label for="sel1">Actual Price</label>
              <input type="number" class="form-control" placeholder="Actual price" name="actualprice">
            </div>


          <div class="form-group">
            <label for="sel1"> OFF</label>
            <input type="number" class="form-control" placeholder="Off %" name="off">
          </div>


          <div class="form-group">
            <label for="exampleFormControlFile1">Image Input</label>
            <input type="file" class="form-control-file" id="imageinput[]" name="imageinput">
          </div>


          <button type="submit" name="submit" class="btn btn-primary" style="float: left;">Upload</button><br><br>

          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>