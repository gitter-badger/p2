<?php

include('logic.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jose Andrade - DWA15</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/customstyle.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   
  </head>
  <body>

  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">DWA15</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($_SERVER['SERVER_NAME'] == "p1.jandrade.me"){ echo "class=\"active\""; } ?>><a href="http://p1.jandrade.me">Project 1</a></li>
            <li <?php if($_SERVER['SERVER_NAME'] == "p2.jandrade.me"){ echo "class=\"active\""; } ?>><a href="http://p2.jandrade.me">Project 2</a></li>
            <li <?php if($_SERVER['SERVER_NAME'] == "p3.jandrade.me"){ echo "class=\"active\""; } ?>><a href="http://p3.jandrade.me">Project 3</a></li>
            <li <?php if($_SERVER['SERVER_NAME'] == "p4.jandrade.me"){ echo "class=\"active\""; } ?>><a href="http://p4.jandrade.me">Project 4</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      
		<div class="row">
		  	<div class="col-xs-12 text-center">
		 	  	<h1>xkcd style password </h1>
		  	</div>

		  	<div class="col-xs-12 text-center">
		 	  	<p>This application will provide a set of random words you may use instead of a regular password.</p>
		  	</div>
		</div>

		<div class="row">
			
		  	<div class="col-md-12 col-xs-12">
		  		
		 		<div class="jumbotron answer text-center">
		  			<?php echo $answer; ?>
		  		</div>
		  		
		  	</div>

		</div>

		<form name="form" action="index.php" method="post">

			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
					
					<h3>How many words?</h3>
					<select name="numberOfWords">
					    <option value="1" <?php if($numberOfWords == 1){ echo "selected"; } ?> >1</option>
					    <option value="2" <?php if($numberOfWords == 2){ echo "selected"; } ?> >2</option>
					    <option value="3" <?php if($numberOfWords == 3){ echo "selected"; } ?> >3</option>
					    <option value="4" <?php if($numberOfWords == 4){ echo "selected"; } ?> >4</option>
					    <option value="5" <?php if($numberOfWords == 5){ echo "selected"; } ?> >5</option>
					    <option value="6" <?php if($numberOfWords == 6){ echo "selected"; } ?> >6</option>
					    <option value="7" <?php if($numberOfWords == 7){ echo "selected"; } ?> >7</option>
					    <option value="8" <?php if($numberOfWords == 8){ echo "selected"; } ?> >8</option>
					    <option value="9" <?php if($numberOfWords == 9){ echo "selected"; } ?> >9</option>
					</select>
					
				</div>
			  	<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
					
					<h3>How many numbers?</h3>
					<select name="numberOfNumbers">
						<option value="0" <?php if($numberOfNumbers == 0){ echo "selected"; } ?> >0</option>
					    <option value="1" <?php if($numberOfNumbers == 1){ echo "selected"; } ?> >1</option>
					    <option value="2" <?php if($numberOfNumbers == 2){ echo "selected"; } ?> >2</option>
					    <option value="3" <?php if($numberOfNumbers == 3){ echo "selected"; } ?> >3</option>
					    <option value="4" <?php if($numberOfNumbers == 4){ echo "selected"; } ?> >4</option>
					    <option value="5" <?php if($numberOfNumbers == 5){ echo "selected"; } ?> >5</option>
					    <option value="6" <?php if($numberOfNumbers == 6){ echo "selected"; } ?> >6</option>
					    <option value="7" <?php if($numberOfNumbers == 7){ echo "selected"; } ?> >7</option>
					    <option value="8" <?php if($numberOfNumbers == 8){ echo "selected"; } ?> >8</option>
					    <option value="9" <?php if($numberOfNumbers == 9){ echo "selected"; } ?> >9</option>
					</select>
					
			  	</div>

			  	<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
					
					<h3>How many special characters?</h3>
					<select name="numberOfCharacters">
						<option value="0" <?php if($numberOfCharacters == 0){ echo "selected"; } ?> >0</option>
					    <option value="1" <?php if($numberOfCharacters == 1){ echo "selected"; } ?> >1</option>
					    <option value="2" <?php if($numberOfCharacters == 2){ echo "selected"; } ?> >2</option>
					    <option value="3" <?php if($numberOfCharacters == 3){ echo "selected"; } ?> >3</option>
					    <option value="4" <?php if($numberOfCharacters == 4){ echo "selected"; } ?> >4</option>
					    <option value="5" <?php if($numberOfCharacters == 5){ echo "selected"; } ?> >5</option>
					    <option value="6" <?php if($numberOfCharacters == 6){ echo "selected"; } ?> >6</option>
					    <option value="7" <?php if($numberOfCharacters == 7){ echo "selected"; } ?> >7</option>
					    <option value="8" <?php if($numberOfCharacters == 8){ echo "selected"; } ?> >8</option>
					    <option value="9" <?php if($numberOfCharacters == 9){ echo "selected"; } ?> >9</option>
					</select>

			  	</div>

			  	<div class="col-lg-6 col-sm-6 col-xs-12 text-center">
					
					<h3>How will you like to separate the words?</h3>
					<input type="radio" name="separation" value="space" <?php if($separation == "space"){ echo "checked"; } ?> > Space<br>
					<input type="radio" name="separation" value="camelCase" <?php if($separation == "camelCase"){ echo "checked"; } ?> > CamelCase<br>
					<input type="radio" name="separation" value="hyphen" <?php if($separation == "hyphen"){ echo "checked"; } ?> > Hyphen<br>

			  	</div>

			  	<div class="col-lg-6 col-sm-12 col-xs-12 text-center">
					
					<h3>Select items to include in the password:</h3>

						
					<input type="hidden" name="animalsCheck" value="no"><!-- //State to be evaluated when form is loaded. Hidden input provides a variable value of "no" to use when unchecked. -->
					<input type="checkbox" name="animalsCheck" value="yes" <?php if(!isset($_POST['animalsCheck']) || $_POST['animalsCheck'] == "yes"){ echo "checked"; } ?> />
					 Animals
					<br />

			    	<input type="hidden" name="clothesCheck" value="no">
			    	<input type="checkbox" name="clothesCheck" value="yes" <?php if(!isset($_POST['clothesCheck']) || $_POST['clothesCheck'] == "yes"){ echo "checked"; } ?> />
			    	 Clothes
			    	<br />

			    	<input type="hidden" name="fruitsCheck" value="no">
			    	<input type="checkbox" name="fruitsCheck" value="yes" <?php if(!isset($_POST['fruitsCheck']) || $_POST['fruitsCheck'] == "yes"){ echo "checked"; } ?> />
			    	 Fruits
			    	<br />

			    	<input type="hidden" name="toolsCheck" value="no">
			    	<input type="checkbox" name="toolsCheck" value="yes" <?php if(!isset($_POST['toolsCheck']) || $_POST['toolsCheck'] == "yes"){ echo "checked"; } ?> />
			    	 Tools
			    	<br />
			    
			  	</div>

			  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			  		<p>
			  			<input type="submit" class="btn btn-primary btn-lg" value="Gimme a new pass!" />
			  		</p>
			  	</div>

			  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  		<br>
			  		<br>
			  		<a href="http://xkcd.com/936/">
			  			<img src="img/password_strength.png" class="img-responsive center-block" alt="xkcd comic strip" >
			  		</a>
			  	</div>
			</div> <!-- row -->
		</form>
    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>






