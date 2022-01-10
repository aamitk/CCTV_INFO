<!DOCTYPE html>
<html>
<head>
  <title>Add Enquiry</title>
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
                        <h4 class="page-title">Add Enquiry</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Enquiry</li>
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
                                    <h5 class="card-title">Fill Details</h5>
                                    <div class="form-group row">
                                        <label class="col-md-3" for="Pname">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="Pname" name="userName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3" for="email">Email</label>
                                        <div class="col-md-9">
                                            <input type="text" id="email" name="userEmail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3" for="phone">Phone</label>
                                        <div class="col-md-9">
                                            <input type="text" id="phone" name="userPhone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3" for="service">Service</label>
                                        <div class="col-md-9">
                                            <input type="text" id="service" name="service" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3" for="location">Location</label>
                                        <div class="col-md-9">
                                            <input type="text" id="location" name="location" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3" for="discription">Discription</label>
                                        <div class="col-md-9">
                                            <textarea id="discription" name="discription" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="addQuery" class="btn btn-primary">Submit</button>
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