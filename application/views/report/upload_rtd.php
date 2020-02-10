<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>report/rtd_report/">MPS</a></li>
                        <li class="breadcrumb-item active">Upload MPS</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-5 align-self-center">
                <!-- <h4 class="text-themecolor">Upload RTD</h4> -->
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card oh">
                    <div class="card-body">                                
                        <div class="module-head">
                            <h2>
                                UPLOAD MPS                                                                  
                            </h2>                                    
                        </div>
                        <div class="module-body" >
                            <form method="POST" action = "<?php echo base_url(); ?>report/import_rtd" enctype="multipart/form-data">
                                <span>Drag file to the box for upload or click to select files</span>  
                                 <?php
                                        $msg_updates= $this->session->flashdata('msg_updates');  
                                        if($msg_updates){
                                         ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="success bor-radius10 shadow alert-success alert-shake animated headShake" style='padding:10px'>
                                                    <center><?php echo $msg_updates; ?></center>                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php } 

                                         $msg_error= $this->session->flashdata('msg_error');  
                                        if($msg_error){
                                         ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="success bor-radius10 shadow alert-danger alert-shake animated headShake" style='padding:10px'>
                                                    <center><?php echo $msg_error; ?></center>                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                <input type="file" name="rtd" class="dropzone">
                                <button type="submit" id = "submitButton" class="btn btn-success-alt btn-block" >Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

