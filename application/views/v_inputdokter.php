
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah Dokter</h3>
              </div>

              <div class="title_right">

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master <small>Dokter</small></h2>
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
                    <form class="form-horizontal form-label-left" action="<?=base_url("dokter/action_input");?>" method="POST" novalidate>

                      <span class="section">Personal Info Doctor</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodedokter">Kode Dokter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kodedokter" value="<?php echo $id ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="kodedokter" placeholder="Kode Obat" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namadokter">Nama Dokter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="namadokter" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="namadokter" placeholder="Nama Dokter" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notelp">No Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="tel" id="notelp" name="notelp" placeholder="No Telephone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        	<button type="reset" class="btn btn-info">Hapus</button>
                          	<button type="submit" class="btn btn-primary">Simpan</button>
                          	<a href="<?=base_url('dokter/list_dokter');?>"><input type="button" name="" class="btn btn-default pull-right" value="Kembali"></a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

<?php $this->load->view('tamplate/footer');?>