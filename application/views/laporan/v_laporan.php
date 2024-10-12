<?php $this->load->view('tamplate/header');?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan Rekam Medis</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
<form role="form" class="form-horizontal" action="<?=base_url("laporan/reportPdf");?>" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <input type="number" class="form-control" value="<?=date('Y');?>" name="tahun" placeholder="tahun...">
                                    <div class="panel-heading">
                                    <button class="btn btn-default" type="submit">Report To PDF</button>
                                    </div>
                                    
                    </div>
                    <!-- /.table-responsive -->
                </div>

                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
</form>
<hr>
</div>
<?php $this->load->view('tamplate/footer');?>


