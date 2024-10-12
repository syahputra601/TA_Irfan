
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pengguna Aktif <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Hello, <?php echo $this->session->userdata('username'); ?>!</h1>
                      <p>Selamat datang di halaman bagian Administrator Aplikasi Klinik Pratama.</p>
                    </div>
                  </div>

                </div>
              </div>

<div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
<?php
$link=mysqli_connect("localhost","root","","skripsi");
$jmlps = mysqli_num_rows(mysqli_query($link, "SELECT * FROM pasien"));
?>
                  <div class="icon"><i class="fa fa-user-md"></i></div>
                  <div class="count"><?php echo $jmlps ?></div>
                  <h3>Pasien</h3>
                  <a href="<?php echo base_url('pasien/list_pasien')?>"><p>Click here to go page pasien.</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
<?php
$jmldt = mysqli_num_rows(mysqli_query($link, "SELECT * FROM dokter"));
?>
                  <div class="icon"><i class="fa fa-stethoscope"></i></div>
                  <div class="count"><?php echo $jmldt ?></div>
                  <h3>Dokter</h3>
                  <a href="<?php echo base_url('dokter/list_dokter')?>"><p>Click here to go page doctor.</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
<?php
$jmlu = mysqli_num_rows(mysqli_query($link, "SELECT * FROM user"));
?>
                  <div class="icon"><i class="fa fa-group"></i></div>
                  <div class="count"><?php echo $jmlu ?></div>
                  <h3>User</h3>
                  <a href="<?php echo base_url('user/list_user')?>"><p>Click here to go page users.</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
<?php
$jmlob = mysqli_num_rows(mysqli_query($link, "SELECT * FROM tbl_obat"));
?>
                  <div class="icon"><i class="fa fa-h-square"></i></div>
                  <div class="count"><?php echo $jmlob ?></div>
                  <h3>Obat</h3>
                  <a href="<?php echo base_url('obat/list_obat')?>"><p>Click here to go page drugs.</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
<?php
$jmlrm = mysqli_num_rows(mysqli_query($link, "SELECT * FROM rekam_medis"));
?>
                  <div class="icon"><i class="fa fa-medkit"></i></div>
                  <div class="count"><?php echo $jmlrm ?></div>
                  <h3>Rekam Medis</h3>
                  <a href="<?php echo base_url('R_medis/list_medis')?>"><p>Click here to go page rekam medis.</p></a>
                </div>
              </div>
            </div>