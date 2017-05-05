<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Statistik Rawat Inap</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>template/assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>template/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>admin/dashboard">Sistem Informasi Statistik Rawat Inap</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url()?>home"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url()?>pengelola/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Data Master <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>pengelola/user">User</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>pengelola/dokter">Dokter</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>pengelola/spesialis">Spesialis</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>pengelola/ruang">Ruang</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>pengelola/kelas">Kelas</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            <small><i class="fa fa-fw fa-arrows-v"></i>Data User</small>
                        </h2>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="box-title">Tambah User</h3>
                        <br>
                        <div class="thumbnail" style="background: #f9f9f9;">
                        <!-- form start -->
                        <?php
                          form_open('pengelola/user/post');
                        ?>
                        <form method="post" accept-charset="utf-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" placeholder="masukkan nama" name="nama" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="masukkan username" name="username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="masukkan password" name="password" type="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="level" class="form-control">
                                        <option value="perawat">perawat</option>
                                        <option value="rm">rekam medis</option>
                                        <option value="pimpinan">pimpinan</option>
                                    </select>
                                </div>
                              </div><!-- /.box-body -->
                              <div class="box-footer">
                                  <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                                  <?php
                                    echo anchor('pengelola/user','Kembali',array('class'=>'btn btn-success btn-sm'));
                                  ?>
                              </div>
                            </form>
                          </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>template/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>template/assets/js/bootstrap.min.js"></script>

</body>

</html>
