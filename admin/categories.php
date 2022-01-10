<?php

include("include/config.php");
include("include/functions.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Categories</title>
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
                        <h4 class="page-title">Add Categories</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Categories</li>
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

                                    <div class="row col-xs-12 col-md-12 col-sm-12"> 
                                      <?php if ($isEditingcat === true): ?>
                                        <input type="hidden" name="cat_id" value="<?=$cat_id;?>">
                                      <?php endif ?>
                                      <div class="form-group col-md-6 field_error">
                                          <label style="font-size: 15px;">Category Name<span style="color:red;">*</span></label>
                                          <div>
                                              <input type="text" name="topic_name" class="form-control" placeholder="Category" autocomplete="off" value="<?=$cat_title;?>" />
                                          </div>
                                      </div>   
                                  </div>
                                  <div class="row col-xs-12 col-md-12 col-sm-12">  
                                      <div class="form-group col-md-4">
                                        <?php if ($isEditingcat  === true): ?> 
                                          <button type="submit" class="btn btn-primary m-r-5" name="update_topic">Update</button>
                                        <?php else: ?>
                                         <button type="submit" name="create_topic" class="btn btn-primary m-r-5">Save</button>
                                        <?php endif ?> 
                                      </div>  
                                  </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="row col-xs-12 col-md-6 col-sm-6">
                 
                              <div class="table-responsive">  
                                <table class="table table-striped active" id="example">  
                                    <thead>
                                      <tr>  
                                        <th>No</th> 
                                        <th style="display: none;">Id</th>
                                        <th>Category Name</th> 
                                        <th>Actions</th>
                                      </tr> 
                                    </thead>
                                    <tbody>
                                      <?php 
                                        $query = "SELECT * FROM categories";
                                        $select_categories = mysqli_query($con,$query);  
                                        $co = 1;
                                        while($row = mysqli_fetch_assoc($select_categories)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                      ?>
                                        <tr>
                                              <td><?=$co;?></td>
                                              <td style='display: none'><?=$cat_id?></td>
                                              <td><?=$cat_title?></td>
                                              <td style="display:flex;">
                                                <a href="categories.php?edit-cat=<?=$cat_id?>" style="padding-right: 4px;"><span class="btn btn-primary"><i class="fas fa-pencil-alt"></i></span></a>
                                                <button  type="button" class="btn btn-danger deleteBtn"><i class="fa fa-times" aria-hidden="true"></i></button>
                                              </td>
                                            </tr>  
                                       <?php $co++; } ?>                                        
                                    </tbody>
                                </table> <div style="clear: both;"></div> 
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
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
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
                      <input type="hidden" name="cat_id" id="cat_id">
                      <button type="submit" name="delete_cat" class="btn btn-primary">Delete</button> 
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
          $('#cat_id').val(data[1]);
        });
      });
  </script>

</body>
</html>