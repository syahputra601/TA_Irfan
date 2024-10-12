
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('tamplate/header');?>
<div class="col-md-15">

                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">
                                <br><br><br>
                                <h1>Detail Pasien <?php echo $nip ?></h1>
                                <hr>
                                </div>
                            </div>
                            <div class="panel-body">
<?php
        foreach ($header as $h) {
            $nip = $h["nip"];
            $tgl_kunjungan = $h["tgl_kunjungan"];
            $nama_pasien = $h["nama_pasien"];
            $no_telp = $h["no_telp"];
            $alamat = $h["alamat"];

        }
?>

                                        <div class="form-group col-lg-12">
                                        <label class="col-lg-2">Nip</label>
                                        <input class="col-lg-4" type="text" value="<?php echo $nip ?>"  style="background-color:white;border:none" readonly="readonly"/>
                                        <label class="col-lg-2">Tanggal Kunjungan</label>
                                        <input class="col-lg-4" type="text" value="<?php echo $tgl_kunjungan ?>"  style="background-color:white;border:none" readonly="readonly"/>
                                        </div>
                                        <div class="form-group col-lg-12">
                                        <label class="col-lg-2">Nama Pasien</label>
                                        <input class="col-lg-4" type="text" value="<?php echo $nama_pasien ?>"  style="background-color:white;border:none" readonly="readonly"/>
                                        <label class="col-lg-2">Telp. Pasien</label>
                                        <input class="col-lg-4" type="text" value="<?php echo $no_telp ?>"  style="background-color:white;border:none" readonly="readonly"/>
                                        </div>
                                        <div class="form-group col-lg-12">
                                        <label class="col-lg-2">Alamat Pasien</label>
                                        <textarea class="col-lg-4" style="background-color:white;border:none" readonly="readonly"><?php echo $alamat ?></textarea>
                                        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
        
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="tabledata">
                            <thead >
                                <tr>
                                    <th>No</th>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Dokter</th>
                                    <th>Nama Obat</th>
                                    <th>Diagnosa</th>
                                    <th>Resep</th>
                                    <th>Keluhan</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Pemeriksaan</th>
                                </tr>
                            </thead>
                                   <?php 
                                      $no=1;
          
                                          foreach ($detail as $n) {
                                            $no_rm=$n["no_rm"];
                                            $nama_dokter=$n["nama_dokter"];
                                            $nama_obat=$n["nama_obat"];
                                            $diagnosa=$n["diagnosa"];
                                            $resep=$n["resep"];
                                            $keluhan=$n["keluhan"];
                                            $keterangan=$n["keterangan"];
                                            $tgl_pemeriksaan=$n["tgl_pemeriksaan"];
                                    ?>
                                    <tbody>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $no_rm ?></td>
                                        <td><?php echo $nama_dokter ?></td>
                                        <td><?php echo $nama_obat ?></td>
                                        <td><?php echo $diagnosa ?></td>
                                        <td><?php echo $resep ?></td>
                                        <td><?php echo $keluhan ?></td>
                                        <td><?php echo $keterangan ?></td>
                                        <td><?php echo $tgl_pemeriksaan ?></td>
                                    </tbody>
                                    <?php 
                                        $no++;
                                        }
                                     ?>
                            </tbody>
                            </tbody>
                        </table>

                    </div>

                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>

                <a href="<?=base_url('pasien/list_pasien');?>"><input type="button" name="" class="btn btn-default pull-right" value="Kembali"></a>
            <!-- /.panel -->
        </div>
    </div>

                            </div>
                        </div>
                    </div>
<?php $this->load->view('tamplate/footer');?>