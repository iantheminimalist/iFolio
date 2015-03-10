<!-- Author: Michael Milstead / Mode87.com
	 for Untame.net
	 Twitter Bootstrap Tutorial
	 Parallax Demo, 2013
-->
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Twitter Bootstrap Parallax Tutorial</title>
	<meta name="description" content="Twitter Bootstrap Parallax Tutorial with HTML5 / CSS3 / JavaScript">
	<meta name="author" content="Untame.net">

        <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.1-dist/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.1-dist/dist/css/custom/cover.css" rel="stylesheet">

    
    
	<script src="bootstrap-3.3.1-dist/dist/js/custom/jquery-1.6.1.min.js"></script>
	<script src="bootstrap-3.3.1-dist/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-3.3.1-dist/dist/js/custom/init.js"></script>
<!--
    Parallax Images
    -->
	<style type="text/css">
		#intro { 
			background: url(img/custom/intro.png) 50% 0 fixed; 
			height: auto;  
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;
		}
		#home { 
			background: url(img/custom/home.jpg) 50% 0 fixed; 
			height: auto;  
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 200px 0;
		}
		#about { 
			background: url(img/custom/about.png) 50% 0 fixed; 
			height: auto;
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;
		    color: #fff;
		}

		/* Non-essential demo stuff */
		.hero-unit {
			background-color: #fff;
		    box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}
		.media-object { width: 64px; height: 64px; padding-bottom: 30px }
	</style>

</head>

<body>
    <div class="mainCenter">
	<div class="site-wrapper">
        <div class="site-wrapper-inner">
      
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">ptnrNote</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="main.php">Main</a></li>
                  <li class="active"><a href="intro.php">Intro</a></li>
                  <li><a href="about.php">about</a></li>
                </ul>
              </nav>
            </div>
          </div>
                      <div class="inner cover">
            <h1 class="cover-heading" >ptnrNote</h1>
       
              <p class="lead">
                  <img src="pics/icons/pntrLogo.png">
              </p>
                            <p class="lead">
- Maya Angelou
              </p>

          </div>
            </br>
                        <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>
            
          </div>
        
        
    </div>
    </div>
</div>
	<!-- Section #2 -->
	<section id="about" data-speed="2" data-type="background">
		<div class="container">
			<div class="row-fluid">
		        <div class="col-md-4 text-center">
		          <h2>Heading</h2>
                                 <img src="pics/icons/badge1.png">
		          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque cursus nisl consectetur et.</p>
		          <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
		        </div><!-- /.span4 -->
		        <div class="col-md-4 text-center">
		          <h2>Heading</h2>
                                 <img src="pics/icons/badge1.png">
		          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		          <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
		        </div><!-- /.span4 -->
		        <div class="col-md-4 text-center">
		          <h2>Heading</h2>
                                 <img src="pics/icons/badge1.png">
		          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum odio, dapibus ac in, massa justo sit amet.</p>
		          <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
		        </div><!-- /.span4 -->
	    	</div>
	    </div>
	</section>

	<!-- Section #3 -->
	<section id="home" data-speed="4" data-type="background">
		<div class="container">
			<div class="page-header">
				<h1>Sign Up today <small>and have a thrill with your special Someone</small></h1>
			</div>
			<div class="row-fluid left">
		        <!--
                <div class="col-xs-4">
		          <h2>More Details</h2>
		              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo                            risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque cursus nisl consectetur et.</p>
		              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo                            risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque cursus nisl consectetur et.</p>
		              <p><a class="btn btn-success">View details &raquo;</a></p>
		        </div><!-- /.span4 -->
                
		        <div class="col-xs-6 text-left">
		          <h2>Log In</h2>
		          <form class="form-horizontal ">
					  <div class="form-group">
					    <label class="control-label" for="inputEmail">Email</label>
					    <div class="controls">
					      <input type="text" id="inputEmail" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label" for="inputPassword">Password</label>
					    <div class="controls">
					      <input type="password" id="inputPassword" placeholder="Password">
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox"> Remember me <br><br>
					      </label>
					      <button type="submit" class="btn btn-success">Sign in</button>
					    </div>
					  </div>
					</form>
		        </div><!-- col-xs-6 -->
                
		        <div class="col-xs-6">
		          <h2>Sign-up</h2>
		          <form class="form-horizontal">
                      
					  <div class="form-group">
					    <label class="control-label" for="inputEmail">Email</label>
					    <div class="controls">
					      <input type="text" id="inputEmail" placeholder="Email">
					    </div>
					  </div>
                      <div class="form-group">
					    <label class="control-label" for="Username">Username</label>
					    <div class="controls">
					      <input type="text" id="Username" placeholder="Username">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label" for="inputPassword">Password</label>
					    <div class="controls">
					      <input type="password" id="inputPassword" placeholder="Password">
					    </div>
					  </div>
                       <div class="form-group">
					    <label class="control-label" for="Fullname">Fullname</label>
					    <div class="controls">
					      <input type="text" id="Fullname" placeholder="Fullname">
					    </div>
					  </div>
                      
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox"> Remember me <br><br>
					      </label>
					      <button type="submit" class="btn btn-success">Sign in</button>
					    </div>
					  </div>
					</form>
		        </div><!--col-xs-6-->
	    	</div>
	    </div>
	</section>

</body>

</html>