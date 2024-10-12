
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
			<div class="page-title">
              <div class="title_left">
                <h3>Tambah Rekam Medis</h3>
              </div>

              <div class="title_right">

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master <small>Rekam Medis</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<?php
if($this->session->flashdata('cek')) { 
?>
				  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <center>
                    <h2>
                    <strong><?php echo $this->session->flashdata('cek'); ?></strong>
                    </h2>
                    <h4> 
                    <?php echo $this->session->flashdata('cek2'); ?>
                    </h4>
                    </center>
                  </div>

<?php
} 
?>
                    <form class="form-horizontal form-label-left" action="<?=base_url("R_medis/action_input");?>" method="POST" novalidate>

                      <span class="section">Info Rekam Medis</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rm">No Rekam Medis <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="no_rm" value="<?php echo $no ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="no_rm" placeholder="No Rekam Medis" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namadokter">Nama Dokter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php echo form_dropdown('namadokter', $kode_dtr, '', "class='form-control' id='namadokter'");?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nip" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nip" placeholder="NIP" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namapasien">Nama Pasien <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="namapasien" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="namapasien" placeholder="Nama Pasien" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosa">Diagnosa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="diagnosa" required="required" name="diagnosa" class="form-control col-md-7 col-xs-12" placeholder="Diagnosa"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keluhan">Keluhan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="keluhan" required="required" name="keluhan" class="form-control col-md-7 col-xs-12" placeholder="Keluhan"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaobat">Nama Obat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php echo form_dropdown('namaobat', $kode_obt, '', "class='form-control' id='namaobat'");?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resep">Resep <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="resep" required="required" name="resep" class="form-control col-md-7 col-xs-12" placeholder="Resep"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="keterangan" required="required" name="keterangan" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_pemeriksaan">Tanggal Pemeriksaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class='input-group date' id='myDatepicker2'>
	                            <input type='text' class="form-control" name="tgl_pemeriksaan" placeholder="Tanggal Pemeriksaan" required="required"/>
	                            <span class="input-group-addon">
                               	<span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        	<button type="reset" class="btn btn-info">Hapus</button>
                          	<button type="submit" class="btn btn-primary">Simpan</button>
                          	<a href="<?=base_url('R_medis/list_medis')?>"><input type="button" name="" class="btn btn-default pull-right" value="Kembali"></a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

<?php $this->load->view('tamplate/footer');?>