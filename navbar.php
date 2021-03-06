
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    function printDiv(divName) {
         window.print();
    }
</script>

<body class="skin-default-dark fixed-layout">
    <!--  <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Market Data Analysis System</p>
        </div>
    </div>  -->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="masterfile/index/">
                        <b>
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span> 
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">                        
                        <li class="nav-item">
                            <a class="nav-link text-muted waves-effect waves-dark" href="masterfile/index/" title="Dashboard"><i class="fa fa-tachometer "></i></a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" title="Masterfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-key "></i></a>
                            <div class="dropleft dropdown-menu drop-left" style="border: 1px solid #495056;border-radius: 0px">
                                <span class="dropdown-item bg-main text-white" disable><center><small>MASTERFILE</small></center></span>
                                <a class="dropdown-item" href="masterfile/location_list/">Location</a>
                                <a class="dropdown-item" href="masterfile/powerplant_list/">Power Plant</a>
                                <a class="dropdown-item" href="masterfile/plant_type_list/">Power Plant Type</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" title="Task Report" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tasks "></i></a>
                            <div class="dropleft dropdown-menu drop-left" style="border: 1px solid #495056;border-radius: 0px">
                                <span class="dropdown-item bg-main text-white" disable><center><small>REPORT</small></center></span>
                                <a class="dropdown-item" href="report/upload_rtd">Upload MPS</a>
                                <button id="mps" class="dropdown-item"></span> MPS</button>
                                <div class="child-st" style="top:69px" id="mps_child">
                                    <a href="mps.php" class="dropdown-item" target="_blank">Visayas</a>
                                    <a href="mps_luzon.php" class="dropdown-item" target="_blank">Luzon</a>
                                </div>
                                <button id="actual" class="dropdown-item"></span> Actual Outages</button>
                                <div class="child-st" style="top:104px" id="actual_child">
                                    <a href="actual_outage_visayas.php" class="dropdown-item" target="_blank">Visayas</a>
                                    <a href="actual_outage_luzon.php" class="dropdown-item" target="_blank">Luzon</a>
                                </div>
                                <button id="comparison" class="dropdown-item"></span> Comparison Outages</button>
                                <div class="child-st" style="top:140px" id="comparison_child">
                                    <a href="comparison_out_visayas.php" class="dropdown-item" target="_blank">Visayas</a>
                                    <a href="comparison_out_luzon.php" class="dropdown-item" target="_blank">Luzon</a>
                                </div>

                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search "></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                        
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="masterfile/user_list" title="User List"><i class="fa fa-user "></i></a>
                        </li>
                        <li class="nav-item dropdown" style="border-left:1px solid rgba(0, 0, 0, 0.1)"></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-cog"></span></a>
                            <div class="dropdown-menu shadow ">
                              <a class="dropdown-item" href="masterfile/change_password/" >Change Password</a>
                              <hr class="m-0">
                              
                              <a class="dropdown-item" href="masterfile/user_logout">Logout</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mps").hover(function(){
                    $("#mps_child").css("display", "block");
                    $("#actual_child").css("display", "none");
                    $("#comparison_child").css("display", "none");
                });
                $("#actual").hover(function(){
                    $("#actual_child").css("display", "block");
                    $("#mps_child").css("display", "none");
                    $("#comparison_child").css("display", "none");
                });
                $("#comparison").hover(function(){
                    $("#comparison_child").css("display", "block");
                    $("#mps_child").css("display", "none");
                    $("#actual_child").css("display", "none");
                });
            });
        </script>

        <script type="text/javascript" src="<?php echo base_url; ?>/assets/dist/js/navbar.js"></script>