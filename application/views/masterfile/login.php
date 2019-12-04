<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>Market Data Analysis System</title>
    <link href="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/jquery.dataTables.min.css" rel="stylesheet">      
</head>

<body style="background: #1f1f1f">
    <div class=""></div>
    <div class="container-fluid">                
        <div class=""> 
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="m-t-50">
                        <center>
                            <img class="animated float infinite" src="<?php echo base_url(); ?>assets/images/mdasw1.png" width="25%"><br>
                            <img class="animated fadeIn" src="<?php echo base_url(); ?>assets/images/mdasw.png" width="25%"><br>
                            <h5 class="sys-name">MARKET DATA ANALYSIS SYSTEM</h5>
                        </center>                        
                    </div>
                    <div class="login-form m-l-250 m-r-250 m-t-30"> 
                        <form method="POST" action="<?php echo base_url(); ?>masterfile/login">
                            <div class="form-group ">
                                <input class="form-control m-b-10 shadow-login" type="text" name="username" placeholder="Username">
                                <input class="form-control m-b-10 shadow-login" type="password" name="password" placeholder="Password">
                                <button class="btn btn-lg btn-info-alt btn-block m-b-10" type="submit">SIGN IN</button>                              
                            </div>
                        </form>   
                        <?php
                        $error_msg= $this->session->flashdata('error_msg');  
                            ?>
                        <?php 
                            if($error_msg){
                        ?>
                            <div class="alert bor-radius10 alert-danger alert-shake animated headShake">
                                <center><?php echo $error_msg; ?></center>                    
                            </div>
                        <?php } ?>                             
                    </div>
                </div>          
            </div>                 
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/d3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/c3-master/c3.min.js"></script>
    
</body>

</html>