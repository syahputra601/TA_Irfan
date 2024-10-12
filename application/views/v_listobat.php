
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
			<div class="page-title">
              <div class="title_left">
                <h3>Obat <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <span class="input-group-btn">
                      	<a href="<?=base_url('obat/input_obat');?>"><input type="button" name="" class="btn btn-default" value="Tambah Obat"></a>
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
                    <h2>Daftar List <small>Obat</small></h2>
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
            							<th>Kode Obat</th>
            							<th>Nama Obat</th>
            							<th>Tipe Obat</th>
            							<th>Jumlah</th>
            							<th>Action</th>
            						</tr>
                      </thead>


                      <tbody>
<?php
$no=0;
foreach($obat as $ob){
	$no++;
?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $ob->kode_obat ?></td>
							<td><?php echo $ob->nama_obat ?></td>
							<td><?php echo $ob->tipe_obat ?></td>
							<td><?php echo $ob->jumlah ?></td>
							<td>
                   <a href="<?php echo base_url('obat/edit/'.$ob->kode_obat);?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="<?php echo base_url('obat/action_delete/'.$ob->kode_obat);?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin  ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Delete </a>
              </td>	
            </tr>
<?php }?>	
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>

<?php $this->load->view('tamplate/footer');?>