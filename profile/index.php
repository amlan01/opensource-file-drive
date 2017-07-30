<?php
include("../functions/session.php");
if(!isset($_SESSION["id"]))
{
  header("Location: ../index.html");
}


if (isset($_POST['submit'])) 
{
  $uname1 = $_POST['uname'];
  $uemail1 = $_POST['uemail'];
  $user1 = $_POST['user'];
  $uphone1 = $_POST['uphone'];
  $urole1 = $_POST['urole'];
  

  $sql = "UPDATE userlogin SET fullname='$uname1',
                                email='$uemail1',
                                name='$user1',
                                contact='$uphone1',
                                role='$urole1' WHERE id='$uid'";

  if(mysqli_query($dbcon, $sql)){
    header('Location: ../index.php?'.$user1);
    }
  else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbcon);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>SiriuX - datahub to living organisms who eat &amp; code</title>
		<meta name="generator" content="SSIPL" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../../web/favico.ico">
     <!-- Fine Uploader Gallery CSS file
    ====================================================================== -->
    <link href="../css/dropzone.css" rel="stylesheet">

    <!-- Fine Uploader JS file
    ====================================================================== -->
    <script src="../js/dropzone.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
    <link href="../css/myui.css" rel="stylesheet">
	<body>

<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
              	<ul class="nav">
          			<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            	</ul>
               
                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-list-alt"></i> Calendar</a></li>
                    
                    <!--<li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Refresh</a></li>-->
                </ul>
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      
                      <a href="http://www.simplisticsolutions.in"><h3>Simplistic</h3> @ssipl</a>
                    </li>
                </ul>
              
              	<!-- tiny only nav-->
                <ul class="nav visible-xs" id="xs-menu">
                  	<li><a href="#" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              
            </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="http://www.simplisticsolutions.in"><i><img src="../../web/logo1.png" alt="log3" width="24px" height="24px"/></i></a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="../index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      <li>
                        <a href="#" data-toggle="modal" data-target="#myModal2" role="button"><i class="glyphicon glyphicon-plus"></i> New file</a>
                      </li>
                      
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Profile</a></li>
                          <li><a href="../logout/">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  	</nav>
                </div>
                <!-- /top nav -->
              
                <!--main content area-->
                <div class="padding">
                    <div class="full col-sm-9">
                      
                      <div class="jumbotron">
                        
                          <h2>Hello, <?php echo $name; if ($name == null) {
                            echo "friend";
                          } ?></h2>
                          <p>This is just another portal, filecloud to SSIPL data and files. Please feel free to upload and share all your work centric and not so irrelevant workfiles out here.</p>
                          
                      </div>

                      <div class="col-md-12">
                      <form name="myform" action="" method="POST">
                        <div class="col-md-6">
                          <div class="group">
                            <input type="text" name="uname" value="<?php echo $fullname; ?>" required><span class="highlight"></span><span class="bar"></span>
                            <label>Full Name</label>
                          </div>
                          <div class="group">
                            <input type="email" name="uemail" value="<?php echo $email; ?>" required autofocus><span class="highlight"><br/></span><span class="bar"></span>
                            <label>Email</label>
                          </div>
                          <div class="group">
                            <input type="text" name="user" value="<?php echo $name; ?>" required><span class="highlight"></span><span class="bar"></span>
                            <label>Username</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="group">
                            <input type="text" name="uphone" value="<?php echo $phone; ?>" required><span class="highlight"></span><span class="bar"></span>
                            <label>Contact</label>
                          </div>
                          <div class="group">
                            <input type="text" name="urole" value="<?php echo $role; ?>" required><span class="highlight"></span><span class="bar"></span>
                            <label>Role</label>
                          </div>
                          <div class="col-md-6">
                            <div class="group">
                              <input type="password" name="pass1"><span class="highlight"></span><span class="bar"></span>
                              <label>Old password</label>
                            </div>  
                          </div>
                          <div class="col-md-6">
                            <div class="group">
                              <input type="password" name="pass2"><span class="highlight"></span><span class="bar"></span>
                              <label>New password</label>
                            </div>  
                          </div>
                        </div>

                        <button type="submit" name="submit" class="button buttonBlue">Update
                          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                        </button>
                      </form>
                      </div>
                                              
                      
                      <!--footer-->
                        <hr>
                        <div class="row" id="footer">    
                          
                          <div class="col-sm-12">
                            
                            <div class="col-sm-6">
                              <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">LinkedIn</a>
                            </div>

                            <p class="pull-right">©Copyright 2017. 
                              
                            <a href="http://simplisticsolutions.in">Simplistic Solutions (India) Pvt. Ltd.</a>
                              
                            </p>
                          </div>
                          
                        </div>
                        <hr>
                      <!--footer-->  
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>


  <!-- Modal for calendar-->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title section-heading text-center" id="myModalLabel" style="color: #34495e; text-transform: uppercase; font-family: 'Righteous', cursive; font-style: bold;">SCHEDULE</h4>
          </div>
            <div data-tockify-component="calendar" data-tockify-calendar="amlan"></div>
            <script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!--modal for calendar-->


  <!-- Modal for add new file-->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title section-heading text-center" id="myModalLabel" style="color: #34495e; text-transform: uppercase; font-style: bold;">ADD FILES</h4>
          </div>
            <div style="padding: 12px;">
              <form action="../webup.php" enctype="multipart/form-data" class="dropzone"><div class="fallback">
                            <input name="file" type="file" multiple />
                          </div></form>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!--modal for add new file-->


	<!-- script references -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>