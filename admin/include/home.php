 <?php  
 
    include("config.php");

    $qry_cat="SELECT COUNT(*) as num FROM  enquiry";
    $total_enquiry= mysqli_fetch_array(mysqli_query($con,$qry_cat));
    $total_enquiry = $total_enquiry['num'];

    $qry_cat2="SELECT COUNT(*) as num FROM  contact";
    $total_contact= mysqli_fetch_array(mysqli_query($con,$qry_cat2));
    $total_contact = $total_contact['num'];
    

?> 
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <?php include('include/set_message.php'); ?>
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Total Enquiry</h6>
                                <h4 class="text-white"><?= $total_enquiry ?></h4>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Contact Details</h6>
                                <h4 class="text-white"><?= $total_contact ?></h4>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Data</h6>
                                <h4 class="text-white">0</h4>
                            </div>
                        </div>
                    </div>-->
                    <!-- Column -->
                    <!--<div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Data</h6>
                                <h4 class="text-white">0</h4>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

