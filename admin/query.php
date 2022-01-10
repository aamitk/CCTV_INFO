<!DOCTYPE html>
<html>
<head>
  <title>User Details</title>
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
                        <h4 class="page-title">User Details</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Query</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>  
                                                <th style="display: none;">Id</th>
                                                <th>Name</th>
                                                <th>Email</th> 
                                                <th>Subject</th>   
                                                <th>Message</th> 
                                                <th>Query Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          include("include/config.php");

                                          $cat = "SELECT * FROM `contact` ORDER BY id  DESC";

                                          $result = mysqli_query($con,$cat);
                                          $co = 1;
                                          while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                          <tr>
                                          <td><?=$co?></td>
                                          <td style="display: none"><?=$row['id'];?></td>
                                          <td><?=$row['name'] ?></td>
                                          <td><?=$row['email']?></td>
                                          <td><?=$row['subject']?></td>
                                          <td><?=$row['comment']?></td>
                                          <td><?=$row['create_date']?></td>
                                          <td>
                                            <button  type="submit" class="btn btn-danger deleteBtn" style="height: 34px;" data-toggle="modal" data-target="#Modal2"><i class="fa fa-times" aria-hidden="true"></i></button><br>
                                          </td>
                                        </tr>
                                      <?PHP $co++;
                                       }
                                     ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <!-- Modal -->
            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
              <div class="modal-dialog" role="document"> 
                <div class="modal-content"> 
                  <div class="modal-header"> 
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
                  </div> 
                  <div class="modal-body"> Are you sure to delete this data ?</div>
                  <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                    <form class="form-action" action="process.php" method="post">
                      <input type="hidden" name="queryId" id="queryId">
                      <button type="submit" name="delQuery" class="btn btn-primary">Delete</button> 
                    </form>
                  </div> 
                </div> 
              </div> 
            </div>

  <!-- Footer -->
  <?php include("include/footer.php"); ?>
  <!-- /.Footer -->

  <script>  
    $(document).ready(function() {
        $('.deleteBtn').on('click', function(){
          $('#deleteModal').modal('show');

          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();
          console.log(data);
          $('#queryId').val(data[1]);
        });
      });
  </script>

</body>
</html>