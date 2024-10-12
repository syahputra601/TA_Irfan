<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Klinik Pratama</title>
</head>
<body>


<h1>Detail Rekam Medis <?php echo $no_rm ?></h1>
<hr>

			  				<div class="panel-body">
<?php
        foreach ($header as $h) {
            $no_rm = $h["no_rm"];
            $nama_dokter = $h["nama_dokter"];
            $nama_pasien = $h["nama_pasien"];
            $no_telp = $h["no_telp"];
            $alamat = $h["alamat"];
            $tgl_pemeriksaan = $h["tgl_pemeriksaan"];
        }
?>
<table border="0">
								<tr>
									<td>
                        				<label class="col-lg-2">No. Rekam Medis</label>
                        			</td>
                        			<td>:</td>
                        			<td>
                        				<input class="col-lg-4" type="text" value="<?php echo $no_rm ?>"  style="background-color:white;border:none" readonly="readonly"/>
                        			</td>
                        			<td>
                        				<label class="col-lg-2">Tanggal Pemeriksaan</label>
                        			</td>
                        			<td>:</td>
                        			<td>
                        				<input class="col-lg-4" type="text" value="<?php echo $tgl_pemeriksaan ?>"  style="background-color:white;border:none" readonly="readonly"/>
                    				</td>
                    			</tr>
                    			<tr>
									<td>
                        				<label class="col-lg-2">Nama Pasien</label>
                        			</td>
                        			<td>:</td>
                        			<td>
                        				<input class="col-lg-4" type="text" value="<?php echo $nama_pasien ?>"  style="background-color:white;border:none" readonly="readonly"/>
                        			</td>
                        			<td>
                        				<label class="col-lg-2">Nama Dokter</label>
                        			</td>
                        			<td>:</td>
                        			<td>
                        				<input class="col-lg-4" type="text" value="<?php echo $nama_dokter ?>"  style="background-color:white;border:none" readonly="readonly"/>
                    				</td>
                    			</tr>
                    			<tr>
									<td>
                        				<label class="col-lg-2">Telp. Pasien</label>
                        			</td>
                        			<td>:</td>
                        			<td>
                        				<input class="col-lg-4" type="text" value="<?php echo $no_telp ?>"  style="background-color:white;border:none" readonly="readonly"/>
                    				</td>
                    			</tr>
                    			<tr>
									<td>
                        				<label class="col-lg-2">Alamat Pasien</label>
                        			</td>
                        			<td>:</td>
                        			<td>
                        				<input class="col-lg-4" type="text" value="<?php echo $alamat ?>"  style="background-color:white;border:none" readonly="readonly"/>
                    				</td>
                    			</tr>
</table>
<br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
        
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Obat</th>
                                    <th>Diagnosa</th>
                                    <th>Resep</th>
                                    <th>Keluhan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                                    <?php 
                                      $no=1;
          
                                          foreach ($detail as $n) {
                                          	$no_rm=$n["no_rm"];
                                          	$nama_obat=$n["nama_obat"];
                                          	$diagnosa=$n["diagnosa"];
                                          	$resep=$n["resep"];
                                          	$keluhan=$n["keluhan"];
                                          	$keterangan=$n["keterangan"];
                                    ?>
                                    <tbody>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $no_rm ?></td>
                                        <td><?php echo $nama_obat ?></td>
                                        <td><?php echo $diagnosa ?></td>
                                        <td><?php echo $resep ?></td>
                                        <td><?php echo $keluhan ?></td>
                                        <td><?php echo $keterangan ?></td>
                                    </tbody>
                                    <?php 
                                        $no++;
                                        }
                                     ?>
                            </tbody>
                        </table>

                    </div>

                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

			  				</div>
			  			</div>
	  				</div>
	<script>
		window.print();
	</script>
	
</body>
</html>