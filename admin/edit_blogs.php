<?php
  include("include/config.php");
  include("include/functions.php");

  if(isset($_GET['p_id'])){
    $the_post_id =  escape($_GET['p_id']);
  }

  $query = "SELECT * FROM posts WHERE post_id = $the_post_id  ";
  $select_posts_by_id = mysqli_query($con,$query);  
  while($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $post_id            = $row['post_id'];
    $post_author        = $row['post_author'];
    $post_title         = $row['post_title'];
    $post_category_id   = $row['post_category_id'];
    $post_status        = $row['post_status'];
    $post_image         = $row['post_image'];
    $post_content       = $row['post_content'];
    $post_tags          = $row['post_tags'];
    $post_date          = $row['post_date'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Posts</title>
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
                        <h4 class="page-title">Edit Blogs</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Blogs</li>
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
                                      <input type="hidden" name="blogId" class="form-control" value="<?=$post_id?>" />
                                      <div class="form-group col-md-12 field_error">
                                          <label style="font-size: 15px;">Blog Title<span style="color:red;">*</span></label>
                                          <div>
                                              <input type="text" name="blogTitle" class="form-control" placeholder="Blog Title" value="<?=$post_title?>" />
                                          </div>
                                      </div>
                    
                                      <div class="form-group col-md-6 field_error">
                                          <label style="font-size: 15px;">Publisher<span style="color:red;">*</span></label>
                                          <div>
                                              <select name="publisher" id="publisher" class="form-control">
                                                <option value='<?=$post_author?>'><?=$post_author?></option>
                                                <?php
                                                  $users_query = "SELECT * FROM admin";
                                                  $select_users = mysqli_query($con,$users_query);
                                                  while($row = mysqli_fetch_assoc($select_users)) {
                                                  echo $user_id = $row['id'];
                                                  echo $username = $row['first_name'];                                  
                                                    echo "<option value='{$username}'>{$username}</option>";    
                                                  }
                                                ?>
                                            </select>
                                          </div>
                                      </div>
                    
                                      <div class="form-group col-md-6 field_error">
                                          <label style="font-size: 15px;">Category <span style="color:red;">*</span></label>
                                          <div>
                                              <select name="topic_id" id="topic_id" class="form-control">
                                                <option value=''>Select Category</option>
                                                <?php
                                                  $cat_query = "SELECT * FROM categories";
                                                  $select_cat = mysqli_query($con,$cat_query);
                                                  while($row = mysqli_fetch_assoc($select_cat)) {
                                                  $cat_id = $row['cat_id'];
                                                  $cat_title = $row['cat_title'];                                  
                                                    if($cat_id == $post_category_id) {
                                                      echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
                                                    } else {
                                                      echo "<option value='{$cat_id}'>{$cat_title}</option>";
                                                    }    
                                                  }
                                                ?>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group col-md-12 field_error">
                                          <label style="font-size: 15px;">Tags <span style="color:red;">*</span></label>
                                          <div>
                                              <input type="text" name="tags" class="form-control" placeholder="Blog Tags" value="<?=$post_tags?>" />
                                          </div>
                                      </div>
                                      <div class="form-group col-md-12 field_error">
                                          <label style="font-size: 15px;">Featured image <span style="color:red;">*</span></label>
                                          <div>
                                              <img width="100" src="../assets/blogs/<?= $post_image; ?>" alt="">
                                              <input type="file" name="featured_image" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="form-group col-md-12 field_error">
                                          <label style="font-size: 15px;">Blog Content <span style="color:red;">*</span></label>
                                          <div>
                                            <textarea name="body" id="body" class="form-control" cols="30" rows="10"><?=$post_content?></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group col-md-6 field_error">
                                        <select name="post_status" id="">
                                          <option value="<?=$post_status?>"><?=$post_status?></option>
                                          <?php
                                            if($post_status == 'published' ) {
                                              echo "<option value='draft'>Draft</option>";
                                            }else{
                                              echo "<option value='published'>Publish</option>";
                                            }
                                          ?>
                                       </select>
                                      </div>   
                                  </div>
                                  <div class="row col-xs-12 col-md-12 col-sm-12">  
                                      <div class="form-group col-md-4">
                                       <button type="submit" name="update_post" class="btn btn-primary m-r-5">Update Post</button>
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
  
  <script>
    CKEDITOR.replace('body');
  </script>

</body>
</html>