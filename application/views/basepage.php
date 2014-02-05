
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Siribala Priyanka Cherukumilli Website">
    <meta name="author" content="Siribala Priyanka Cherukumilli">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Siribala Priyanka Cherukumilli's Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost:8888/myfolio/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="http://localhost:8888/myfolio/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost:8888/myfolio/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">My Portfolio</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://localhost:8888/myfolio/index.php/aboutme">About me</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Food</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Art work</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact me</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase">

    <?php echo $content;?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://localhost:8888/myfolio/js/bootstrap.min.js"></script>
    <script src="http://localhost:8888/myfolio/js/holder.js"></script>
  </body>
</html>
