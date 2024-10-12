<!DOCTYPE html>                                                                                                                  
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplikasi Klinik Pratama</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url(); ?>assett/css2/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assett/fonts2/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assett/css2/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url(); ?>assett/css2/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assett/css2/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo base_url(); ?>assett/js2/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                <?php 
                if (validation_errors()) {
                ?>
                         <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Kesalahan !!!</strong>
                            <?php echo validation_errors(); ?>
                            
                        </div>    
                    <?php } ?>

                     <?php echo form_open('login/login_hakakses'); ?>

                        <h1>Perancangan Sistem Rawat Jalan Pada Klinik Pratama Komisi Yudisial di Jakarta</h1>
                        <hr>
                        <h2>Login</h2>
<?php
if($this->session->flashdata('sukses')) { 
    echo '<div class="alert alert-danger">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
} 
?>
                        <div>
                            <input name="username" type="text" class="form-control" placeholder="Username" id="username" />
                        </div>
                        <div>
                            <input name="password" type="password" class="form-control" placeholder="Password" id="password" />
                        </div>

                        <div>
                            <input type="submit" value="Login" class="to_register">
                            
                        </div>
                        <hr>
                        <div class="clearfix"></div>
                            <div>
                                <h1><i class="fa fa-hospital-o"></i> Aplikasi Klinik Pratama!</h1>
                                    <p>©2018 All Rights Reserved. Aplikasi Klinik Pratama! is a Bootstrap template. Privacy and Terms</p>
                            </div>
                    
                    <!-- form -->
                </section>
                <!-- content -->
                
        </div>
    </div>

</body>

</html>

</html>