<?php

include("include/config.php");
include("include/functions.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Latest Products</title>
  <!-- Header -->
  <?php include("include/head.php"); ?>
  <!-- /.Header -->
</head>
  <!-- Header -->
  <?php include("include/profile.php"); ?>
  <!-- /.Header -->

  <!-- Sidebar -->
  <?php include("include/sidebar.php"); ?>
  <!-- /.Sidebar -->

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
                        <h4 class="page-title">Add Latest Products</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Latest Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <?php include('include/set_message.php'); ?>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <form action="process.php" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row col-xs-12 col-md-12 col-sm-12"> 
                  
                                      <div class="form-group col-md-12 field_error">
                                          <label style="font-size: 15px;">Product Name<span style="color:red;">*</span></label>
                                          <div>
                                              <input type="text" name="laProName" class="form-control" placeholder="Product Name" />
                                          </div>
                                      </div>
                                      <div class="form-group col-md-12 field_error">
                                          <label style="font-size: 15px;">Product image <span style="color:red;">*</span></label>
                                          <div>
                                              <input type="file" name="laProImage" class="form-control" />
                                          </div>
                                      </div>  
                                  </div>
                                  <div class="row col-xs-12 col-md-12 col-sm-12">  
                                      <div class="form-group col-md-4">
                                       <button type="submit" name="saveLatest" class="btn btn-primary m-r-5">Add Image</button>
                                      </div>  
                                  </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
  <!-- Footer -->
  <?php include("include/footer.php"); ?>
  <!-- /.Footer -->

</body>
</html>