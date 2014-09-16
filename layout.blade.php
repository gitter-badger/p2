<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jose Andrade - DWA15</title>

    <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/customstyle.css') }}

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
      @yield('content')
    </div> <!-- /container -->
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
  </body>
</html>
