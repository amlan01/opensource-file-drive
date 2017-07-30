 <?php
include("functions/session.php");
if(!isset($_SESSION["id"]))
{
  header("Location: index.html");
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
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../web/favico.ico">
     <!-- Fine Uploader Gallery CSS file
    ====================================================================== -->
    <link href="css/dropzone.css" rel="stylesheet">

    <!-- Fine Uploader JS file
    ====================================================================== -->
    <script src="js/dropzone.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
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
                      <a class="navbar-brand" href="http://www.simplisticsolutions.in"><i><img src="../web/logo1.png" alt="log3" width="24px" height="24px"/></i></a>
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
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      <li>
                        <a href="#" data-toggle="modal" data-target="#myModal2" role="button"><i class="glyphicon glyphicon-plus"></i> New file</a>
                      </li>
                      
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="profile/">Profile</a></li>
                          <li><a href="logout/">Logout</a></li>
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
                        <div class="row">
                          <div class="col-md-12">
                            
                            <div class="col-md-6"><h2>Xonsoy</h2></div>
                            <div class="col-md-6"><h3 class="pull-right" style="color:#3B5999;">Hello, <?php echo $name; if ($name == null) {
                            echo "friend";
                            } ?></h3></div>
                          </div>
                        </div>
                          
                          <div class="col-md-12">
                          <span style="font-size: 12px;"><?php if ($name == null) {
                            echo "Please headaway to profile page and let us know you well."; 
                          } ?></span>
                          </div>
                      </div>

                      <!--web files here-->
                      
                      <div class="row">
                      <div class="col-md-12" style="margin-top: 12px;-webkit-border-radius: 15px 15px 15px 15px;-moz-border-radius: 15px 15px 15px 15px;border-radius: 15px 15px 15px 15px; background-color: whitesmoke;">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Name</th><th class="text-center">Utility</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
  
                              if (isset($_GET['num'])) {

                                $offset = $_GET['num'];

                                $quantity = 10; //number of items to display
                              $filelist = scandir('web/');

                              //get subset of file array
                              $selectedFiles = array_slice($filelist, $offset-1, $quantity);
                              
                              //output appropriate items
                              foreach($selectedFiles as $file)
                              {
                                echo '<tr><td>'.$file.'</td><td class="text-center"><div class="dropup">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span>...</span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu2"><li><a href="web/'.$file.'" target="_blank">Open</a></li><li><a href="getfile.php?file='.$file.'">Download</a></li>
                              </ul></div> </td></tr>'; 
                                }
                              }

                              else
                              {
                                $offset = 3;

                                $quantity = 10; //number of items to display
                                $filelist = scandir('web/');

                                //get subset of file array
                                $selectedFiles = array_slice($filelist, $offset-1, $quantity);

                                //output appropriate items
                                foreach($selectedFiles as $file)
                                {
                                  echo '<tr><td>'.$file.'</td><td class="text-center"><div class="dropup">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>...</span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu2"><li><a href="web/'.$file.'" target="_blank">Open</a></li><li><a href="getfile.php?file='.$file.'">Download</a></li>
                                </ul></div> </td></tr>'; 
                                  }
                              }

                              
                            ?>
                          </tbody>
                        </table>
                      </div>

                      <ul class="pager">
                        <li><a href="index.php?num=3">Previous</a></li>
                        <li><a href="index.php?num=13">Next</a></li>
                      </ul>

                      </div>
                      <!--ends here file -->                          
                      
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
              <form action="webup.php" enctype="multipart/form-data" class="dropzone"><div class="fallback">
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
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>