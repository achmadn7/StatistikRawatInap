<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Indikator Pelayanan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>template/assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>template/assets/dataTables.responsive.css" rel="stylesheet">

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

    <script>
      function showRuang(str) {
          if (str == "") {
              document.getElementById("txtHint").innerHTML = "";
              return;
          } else {
              if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp = new XMLHttpRequest();
              } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("txtHint").innerHTML = this.responseText;
                  }
              };
              xmlhttp.open("GET","perawat/pasienmasuk/seleksi/"+str,true);
              xmlhttp.send();
          }
      }
    </script>
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
                                <a href="<?php echo base_url()?>perawat/pasiendipindahkan">Pasien Dipindahkan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/pasienkeluar">Pasien Keluar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>perawat/resume"><i class="fa fa-spinner" aria-hidden="true"></i> Resume Harian</a>
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
                            <small><i class="fa fa-fw fa-arrows-v"></i>Resume Harian</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-lg-12">
                    <!-- <div class="form-group">
                      <form>
                        <select name="ruang" class="form-control" onchange="showRuang(this.value)">
                        <option value="0">--- Pilih Bulan---</option>
                        <option value='1'>Januari</option>
                        <option value='2'>Februari</option>
                        <option value='3'>Maret</option>
                        <option value='4'>April</option>
                        <option value='5'>Mei</option>
                        <option value='6'>Juni</option>
                        <option value='7'>Juli</option>
                        <option value='8'>Agustus</option>
                        <option value='9'>September</option>
                        <option value='10'>Oktober</option>
                        <option value='11'>November</option>
                        <option value='12'>Desember</option>
                      </select>
                      </form>
                    </div> -->
                  </div>
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <?php
                                echo anchor('perawat/resume/hitung','Refersh',array('class'=>'btn btn-success btn-sm'));
                              ?>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>Resume</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>VVIP 2</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>VVIP 1</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>VIP</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>III</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>II</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>I</label>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="form-group">
                                  <label>Jumlah</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>1. Pasien Awal</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>2. Pasien Masuk</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>3. Pasien Pindahan</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>4. Jumlah pasien dirawat (1+2+3)</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>5. Pasien Pulang</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>6. Pasien Dirujuk</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>7. Pasien Pindah ke RS lain</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>8. Pulang Paksa (APS)</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>9. Pasien Melarikan Diri</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>10. Total Pasien Keluar Hidup</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>11. Pasien Dipindahkan</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>12. Mati < 48 Jam</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>13. Mati >= 48 Jam</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>14. Total Pasien Keluar (10+11+12+13)</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>15. Jumlah pasien yg masih dirawat (4-14)</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>16. Pasien M+K pada hari yg sama</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <hr>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>Jumlah</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <input class="form-control" value="" name="" type="text" required>
                                </div>
                              </div>
                            </div>
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
