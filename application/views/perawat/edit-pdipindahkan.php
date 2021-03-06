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

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>template/assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>template/assets/dataTables.responsive.css" rel="stylesheet">

    <!-- DateTimePicker CSS -->
    <link href="<?php echo base_url()?>template/assets/datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">

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
                <a class="navbar-brand" href="<?php echo base_url()?>perawat/dashboard">Sistem Informasi Indikator Pelayanan</a>
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
                            <a href="<?php echo base_url()?>home/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url()?>perawat/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-file"></i> Sensus Harian <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>perawat/pasienmasuk">Pasien Masuk</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/pasienpindahan">Pasien Pindahan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/pasiendipindahkan">Pasien Dipindahkkan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/pasienkeluar">Pasien Keluar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>perawat/"><i class="fa fa-spinner" aria-hidden="true"></i> Resume Harian</a>
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
                        <h3 class="page-header">
                            <small>Sensus Harian</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <small>Pasien Dipindahkan Ruang Rawat Inap</small>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <!-- form start -->
                          <!-- <?php
                            form_open('pengelola/spesialis/post');
                          ?> -->
                          <form method="post" accept-charset="utf-8">
                              <div class="box-body">
                                <div class="col-lg-12">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>Ruang Rawat Inap</label>
                                      <select name="ruang" class="form-control">
                                        <?php
                                        foreach ($ruang as $r){
                                                echo "<option value='$r->id_ruang' ";
                                                echo $r->id_ruang==$row['id_ruang']?'selected':'';
                                                echo">$r->nama_ruang</option>";
                                        }
                                        ?>
                                      </select>
                                      <hr>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Hari</label>
                                        <select name="hari" class="form-control">
                                          <option value='Senin'>Senin</option>
                                          <option value='Selasa'>Selasa</option>
                                          <option value='Rabu'>Rabu</option>
                                          <option value='Kamis'>Kamis</option>
                                          <option value='Jumat'>Jum'at</option>
                                          <option value='Sabtu'>Sabtu</option>
                                          <option value='Minggu'>Minggu</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label>Tanggal</label>
                                      <div class="input-append date form_datetime">
                                          <input class="form-control" type="text" value="<?php echo $row['tgl_dipindahkan'];?>" name="tgl_dipindahkan" value="" readonly>
                                          <span class="add-on"><i class="icon-th"></i></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label></label>
                                      <h5>Sampai Jam 24.00</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>No.RM</label>
                                      <input class="form-control" value="<?php echo $row['no_rm'];?>" name="no_rm" type="text" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Nama Pasien</label>
                                      <input class="form-control" value="<?php echo $row['nama_pasien'];?>" name="nama_pasien" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select name="kelas" class="form-control">
                                          <?php
                                          foreach ($kelas as $k){
                                                  echo "<option value='$k->id_kelas' ";
                                                  echo $k->id_kelas==$row['id_kelas']?'selected':'';
                                                  echo">$k->nama_kelas</option>";
                                          }
                                          ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Dari Ruang</label>
                                        <select name="ke_ruang" class="form-control">
                                          <option value="">--- Pilih ---</option>
                                          <?php
                                          foreach ($ruang as $r) {
                                            echo "<option value='$r->nama_ruang' ";
                                            echo $r->nama_ruang==$row['ke_ruang']?'selected':'';
                                            echo">$r->nama_ruang</option>";
                                          }
                                          ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> Dari Kelas</label>
                                        <select name="ke_kelas" class="form-control">
                                          <option value="">--- Pilih ---</option>
                                          <?php
                                          foreach ($kelas as $k) {
                                            echo "<option value='$k->nama_kelas' ";
                                            echo $k->nama_kelas==$row['ke_kelas']?'selected':'';
                                            echo">$k->nama_kelas</option>";
                                          }
                                          ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Spesialis</label>
                                        <select name="spesialis" class="form-control">
                                          <?php
                                          foreach ($spesialis as $s){
                                                  echo "<option value='$s->id_spesialis' ";
                                                  echo $s->id_spesialis==$row['id_spesialis']?'selected':'';
                                                  echo">$s->nama_spesialis</option>";
                                          }
                                          ?>
                                          <?php
                                          foreach ($spesialis as $s) {
                                            echo "<option value='$s->id_spesialis'>$s->nama_spesialis</option>";
                                          }
                                          ?>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                                        <?php
                                          echo anchor('perawat/pasiendipindahkan','Kembali',array('class'=>'btn btn-success btn-sm'));
                                        ?>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- /.box-body -->
                          </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

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

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>template/assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>template/assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src=".<?php echo base_url()?>template/assets/datatables-responsive/dataTables.responsive.js"></script>

    <!-- DateTimePicker JavaScript -->
    <script src="<?php echo base_url()?>template/assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii"
        });
    </script>

</body>

</html>
