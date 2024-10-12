
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
<?php
foreach($obat as $ob){
?>
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Obat <?php echo $ob->kode_obat ?></h3>
              </div>

              <div class="title_right">

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master <small>Edit Obat</small></h2>
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
    echo '<div class="alert alert-danger" align="center">';
    echo '<h2>';
    echo $this->session->flashdata('cek');
    echo '</h2>';
    echo '</div>';
} 
?>
                    <form class="form-horizontal form-label-left" action="<?=base_url("obat/action_update");?>" method="POST" novalidate>

                      <span class="section">Info Drug</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodeobat">Kode Obat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kodeobat" value="<?php echo $ob->kode_obat ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="kodeobat" placeholder="Kode Obat" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaobat">Nama Obat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="namaobat" value="<?php echo $ob->nama_obat ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="namaobat" placeholder="Nama Obat" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipeobat">Tipe Obat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tipeobat" value="<?php echo $ob->tipe_obat ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="tipeobat" placeholder="Tipe Obat" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah">Jumlah <span class="required">*</span>
                        </label>
                        <div class="col-md-1 col-sm-6 col-xs-12">
                          <input id="jumlah" value="<?php echo $ob->jumlah ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="jumlah" placeholder="Jumlah" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          	<button type="submit" class="btn btn-primary">Simpan</button>
                          	<a href="<?=base_url('obat/list_obat');?>"><input type="button" name="" class="btn btn-default pull-right" value="Kembali"></a>
                        </div>
                      </div>
                    </form>
<?php
}
?>
                  </div>
                </div>
              </div>
            </div>

<?php $this->load->view('tamplate/footer');?>