
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>

<?php
if($this->session->userdata('level') == 1){
?>
			<div class="page-title">
              <div class="title_left">
                <h3>Dokter <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <span class="input-group-btn">
                      	<a href="<?=base_url('dokter/input_dokter');?>"><input type="button" name="" class="btn btn-default" value="Tambah Dokter"></a>
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
                    <h2>Daftar List <small>Dokter</small></h2>
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
							<th>Kode Dokter</th>
							<th>Nama Dokter</th>
							<th>No Telepon</th>
							<th>Action</th>
						</tr>
                      </thead>
                      <tbody>
<?php
$no=0;
foreach($dokter as $dt){
	$no++;
?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $dt->kode_dokter ?></td>
						<td><?php echo $dt->nama_dokter ?></td>
						<td><?php echo $dt->no_telpdokter ?></td>
						<td>
            <a href="<?php echo base_url('dokter/edit/'.$dt->kode_dokter);?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
            <a href="<?php echo base_url('dokter/action_delete/'.$dt->kode_dokter);?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin  ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Delete </a>
            </td>
					</tr>
<?php }?>	
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<?php
}
?>


<?php
if($this->session->userdata('level') == 2){
?>
			<div class="page-title">
              <div class="title_left">
                <h3>Dokter <small></small></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar List <small>Dokter</small></h2>
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
							<th>Kode Dokter</th>
							<th>Nama Dokter</th>
							<th>No Telepon</th>
						</tr>
                      </thead>
                      <tbody>
<?php
$no=0;
foreach($dokter as $dt){
	$no++;
?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $dt->kode_dokter ?></td>
						<td><?php echo $dt->nama_dokter ?></td>
						<td><?php echo $dt->no_telpdokter ?></td>
					</tr>
<?php }?>	
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php
}
?>

<?php $this->load->view('tamplate/footer');?>
