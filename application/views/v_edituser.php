
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
<?php
foreach($user as $u){
?>
            <div class="page-title">
              <div class="title_left">
                <h3>Edit User <?php echo $u->id_user ?></h3>
              </div>

              <div class="title_right">

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master <small>User</small></h2>
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
                    <form class="form-horizontal form-label-left" action="<?=base_url("user/action_update");?>" method="POST" novalidate>

                      <span class="section">Personal Info Users</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodeuser">Kode User <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kodeuser" value="<?php echo $u->id_user ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="kodeuser" placeholder="Kode User" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namauser">Nama User <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" value="<?php echo $u->nama ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama" placeholder="Nama Lengkap" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" value="<?php echo $u->username ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="username" placeholder="Username" required="required" type="text">
                        </div>
                      </div>
					  <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" value="<?php echo $u->password ?>" type="password" name="password" placeholder="Password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" placeholder="Repeat Password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<div id="status" class="btn-group" data-toggle="buttons">
<?php
if($u->status == '1'){
?>
								<label class="btn btn-dark" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                              <input type="radio" name="status" value="1" required="required" checked=""> &nbsp; Admin &nbsp;
	                            </label>
	                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                              <input type="radio" name="status" value="2" required="required"> Dokter
	                            </label>
<?php
}elseif($u->status == '2'){
?>
								<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                              <input type="radio" name="status" value="1" required="required"> &nbsp; Admin &nbsp;
	                            </label>
	                            <label class="btn btn-dark" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                              <input type="radio" name="status" value="2" required="required" checked=""> Dokter
	                            </label>
<?php	
}
?>
                          </div>
                         </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          	<button type="submit" class="btn btn-primary">Simpan</button>
                          	<a href="<?=base_url('user/list_user');?>"><input type="button" name="" class="btn btn-default pull-right" value="Kembali"></a>
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