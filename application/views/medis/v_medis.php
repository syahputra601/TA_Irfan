
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
            <div class="page-title">
              <div class="title_left">
                <h3>Rekam Medis <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <span class="input-group-btn">
                        <a href="<?=base_url('R_medis/add');?>"><input type="button" name="" class="btn btn-default" value="Tambah Rekam Medis"></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar List <small>Rekam Medis</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th style="width: 10%;">No Rekam Medis</th>
                            <th>Kode Dokter</th>
                            <th>NIP</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
<?php
$no=0;
foreach($medis as $md){
    $no++;
?>

            <tr>
                <th><?php echo $no ?></th>
                <th><?php echo $md->no_rm ?></th>
                <th><?php echo $md->kode_dokter ?></th>
                <th><?php echo $md->nip ?></th>
                <th><?php echo $md->tgl_pemeriksaan ?></th>
                <th>
                  <a href="<?php echo base_url('R_medis/detail/'.$md->no_rm);?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                  <a href="<?php echo base_url('R_medis/cetakdetail/'.$md->no_rm);?>" class="btn btn-danger btn-xs"><i class="fa fa-print"></i> Print </a>
                </th>
            </tr>
<?php
}
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>


<?php $this->load->view('tamplate/footer');?>
