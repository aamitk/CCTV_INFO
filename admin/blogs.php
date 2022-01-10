<?php

include("include/config.php");
include("include/functions.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Blogs List</title>
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
                        <h4 class="page-title">Blogs</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                                <h5 class="card-title">Blogs List</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>  
                                                <th style="display: none;">Id</th>
                                                <th>Title</th> 
                                                <th>Author</th> 
                                                <th>Category</th>
                                                <th>Tags</th> 
                                                <th>Image</th> 
                                                <th>Date</th> 
                                                <th class="text-center">Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                        
                                            $query = "SELECT * FROM posts ORDER BY post_id DESC ";
                                            $select_posts = mysqli_query($con,$query);  
                                            $co = 1;
                                            while($row = mysqli_fetch_assoc($select_posts )) {
                                                $post_id            = $row['post_id'];
                                                $post_author        = $row['post_author'];
                                                $post_title         = $row['post_title'];
                                                $post_category_id   = $row['post_category_id'];
                                                $post_status        = $row['post_status'];
                                                $post_image         = $row['post_image'];
                                                $post_tags          = $row['post_tags'];
                                                $post_date          = $row['post_date'];
                                                
                                                echo "<tr>";
                                                echo "<td>$co</td>";
                                                echo "<td style='display: none'>$post_id</td>";
                                                echo "<td>$post_title</td>";
                                                echo "<td>$post_author</td>";
                                
                            
                                                $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
                                                $select_categories_id = mysqli_query($con,$query);  
                    
                                                while($row = mysqli_fetch_assoc($select_categories_id)) {
                                                $cat_id = $row['cat_id'];
                                                $cat_title = $row['cat_title'];
                    
                                                
                                                echo "<td>$cat_title</td>";    
                                                }
                                                
                                      
                                                echo "<td>$post_tags</td>";
                                                echo "<td><img width='100' src='../assets/blogs/$post_image' alt='image'></td>";
                                                echo "<td>".date('F j, Y ', strtotime($post_date))."</td>";
                                                echo "<td>$post_status</td>";
                                                ?>
                                                <td style="display:flex;">
                                                  <a href="edit_blogs.php?p_id=<?=$post_id?>" style="padding-right: 4px;"><span class="btn btn-primary"><i class="fas fa-pencil-alt"></i></span></a>
                                                  <button  type="button" class="btn btn-danger deleteBtn"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                </td>
                                                <?php
                                                echo "</tr>";
                                                $co++;
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
                      <input type="hidden" name="blog_id" id="blog_id">
                      <button type="submit" name="delete_blog" class="btn btn-primary">Delete</button> 
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
          $('#blog_id').val(data[1]);
        });
      });
  </script>

</body>
</html>