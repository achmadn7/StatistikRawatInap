<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Informasi Statistik Rawat Inap</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>template/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>template/assets/css/login.css" rel="stylesheet">
    <link href="<?php echo base_url()?>template/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#">
                    <i class="fa fa-play-circle"></i> <span class="light">Sistem Informasi</span> Statistik Rawat Inap
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section id="login">
      <div class="container">
    	<div class="row">
          <div class="col-xs-12 col-md-8" style="margin: 100px auto; color: #fff;">
            <div class="col-md-3">
              <p><img class="img-responsive" src="assets/img/logo.png" alt=""></p>
            </div>
            <div class="col-md-8" style="padding-left: 20px; padding-top: 60px;">
              <span>
                Sistem Inforwasi Statistik Rawat Inap ialah Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </span>
            </div>
            <div class="col-md-2"></div>
          </div>
    	    <div class="col-xs-6 col-md-4">
        	    <div class="form-wrap">
                <h1>Login</h1>
                    <form role="form" action="<?php echo base_url()?>pengelola/dashboard" method="post">
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <input type="submit" class="btn btn-custom btn-lg btn-block" value="Login">
                    </form>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
    </section>

    <footer id="footer">
      <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Desain © - https://github.com/achmadn7</p>
                <br>
                <div class="col-xs-6 col-md-4"></div>
                <div class="col-xs-6 col-md-4">
                  <p style="padding-top: 5px; padding-bottom: 5px; background-color: #00000080;"><strong><a href="#" target="_blank"> Rumah Sakit Umum Pandan Arang Boyolali</a></strong> @ 2017</p>
                </div>
                <div class="col-xs-6 col-md-4"></div>
            </div>
        </div>
    </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>template/assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>template/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
