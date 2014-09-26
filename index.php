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
			<div class="col-md-4 col-xs-3">&nbsp;</div>
		  	<div class="col-md-4 col-xs-6">
		 	  	<h1 class="text-center">xkcd style password </h1>
		  	</div>
		  	<div class="col-md-4 col-xs-3">&nbsp;</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-xs-1">&nbsp;</div>
		  	<div class="col-md-6 col-xs-10">
		 	  	<div class="text-center">This application will provide a set of random words you may use instead of a regular password.</div>
		  	</div>
		  	<div class="col-md-3 col-xs-1">&nbsp;</div>
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
			<div class="col-md-2 col-xs-2">&nbsp;</div>
		  	<div class="col-md-8 col-xs-8">
		 	  	<div class="text-center">
				
					<h3>Select the number of words to display:</h3>
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
		  	</div>
		  	<div class="col-md-2 col-xs-2">&nbsp;</div>
		</div>

		<div class="row">
			<div class="col-md-2 col-xs-2">&nbsp;</div>
		  	<div class="col-md-8 col-xs-8">
		 	  	<div class="text-center">
				
					<h3>How will you like to separate the words?</h3>
					<input type="radio" name="separation" value="space" <?php if(!isset($_POST['separation']) || $_POST['separation'] == "space"){ echo "checked"; } ?> > Space<br>
					<input type="radio" name="separation" value="camelCase" <?php if($_POST['separation'] == "camelCase"){ echo "checked"; } ?> > CamelCase<br>
					<input type="radio" name="separation" value="hyphen" <?php if($_POST['separation'] == "hyphen"){ echo "checked"; } ?> > Hyphen<br>
				</div>
		  	</div>
		  	<div class="col-md-2 col-xs-2">&nbsp;</div>
		</div>

		<div class="row">
			<div class="col-md-2 col-xs-2">&nbsp;</div>
		  	<div class="col-md-8 col-xs-8">
		 	  	<div class="text-center">
				
					<h3>Select the items to include in the password</h3>
					<h4>(words from all selected items will be displayed at random):</h4>
					<!-- //State to be evaluated when form is loaded. Hidden input provides a variable value of "no" to check for state when unchecked. -->
				  	<input type="hidden" name="animalsCheck" value="no"><input type="checkbox" name="animalsCheck" value="yes" <?php if(!isset($_POST['animalsCheck']) || $_POST['animalsCheck'] == "yes"){ echo "checked"; } ?> /> Animals<br />
		    		<input type="hidden" name="clothesCheck" value="no"><input type="checkbox" name="clothesCheck" value="yes" <?php if(!isset($_POST['clothesCheck']) || $_POST['clothesCheck'] == "yes"){ echo "checked"; } ?> /> Clothes<br />
		    		<input type="hidden" name="fruitsCheck" value="no"><input type="checkbox" name="fruitsCheck" value="yes" <?php if(!isset($_POST['fruitsCheck']) || $_POST['fruitsCheck'] == "yes"){ echo "checked"; } ?> /> Fruits<br />
		    		<input type="hidden" name="toolsCheck" value="no"><input type="checkbox" name="toolsCheck" value="yes" <?php if(!isset($_POST['toolsCheck']) || $_POST['toolsCheck'] == "yes"){ echo "checked"; } ?> /> Tools<br />
		    		<br>
		    		<input type="submit" value="SUBMIT" />
		
				</div>
		  	</div>
		  	<div class="col-md-2 col-xs-2">&nbsp;</div>
		</div>

		</form>
		<br><br>
		<div class="row">
			<div class="col-md-3 col-xs-1">&nbsp;</div>
		  	<div class="col-md-6 col-xs-10">
		  		<a href="http://xkcd.com/936/"><img src="img/password_strength.png" class="img-responsive center-block"></a>
		  	</div>
		  	<div class="col-md-3 col-xs-1">&nbsp;</div>
		</div>
		
    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>






