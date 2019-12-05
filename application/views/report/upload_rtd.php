<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>report/rtd_report/">RTD</a></li>
                        <li class="breadcrumb-item active">Upload RTD</li>
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
                                UPLOAD FILE                                                                  
                            </h2>                                    
                        </div>
                        <div class="module-body" >
                            <form method="POST" action = "import.php" enctype="multipart/form-data">
                                <span>Drag file to the box for upload or click to select files</span>  
                                <input type="file" name="csv" class="dropzone">
                                <button type="submit" name = "" id = "submitButton" class="btn btn-success-alt btn-block" >Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

