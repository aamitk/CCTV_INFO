<?php
session_start();
include("include/config.php");
include('include/functions.php');

//echo mysqli_error($con);

/*Add Blogs Code*/
if (isset($_POST["create_post"])) 
{
  $blogTitle = escape($_POST['blogTitle']);
  $publisher = escape($_POST['publisher']);
  $topic_id = escape($_POST['topic_id']);
  $tags = escape($_POST['tags']);
  $body = escape($_POST['body']);
  $post_status = escape($_POST['post_status']);
  $post_image = escape($_FILES['featured_image']['name']);
  $post_image_temp = escape($_FILES['featured_image']['tmp_name']);
  
  move_uploaded_file($post_image_temp, "../assets/blogs/$post_image" );
  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO posts VALUES (0,'$topic_id','$blogTitle','$publisher','$created_at','$post_image','$body','$tags','$post_status')";
    //echo $sql; die();

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Blog Successfully Added..!!";
        header("location:blogs.php"); 
    }
    else
    {
       /* $_SESSION['error'][] = "Unable to Add Partner Profile";
        header("location:partner.php"); */
        echo mysqli_error($con);
    } 

}

/*Add Catgories Code*/
if (isset($_POST["create_topic"])) 
{
  $topic_name = escape($_POST['topic_name']);
  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO categories VALUES (0,'$topic_name','$created_at')";
    //echo $sql; die();

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Category Successfully Added..!!";
        header("location:categories.php"); 
    }
    else
    {
       /* $_SESSION['error'][] = "Unable to Add Partner Profile";
        header("location:partner.php"); */
        echo mysqli_error($con);
    } 

}


/*Update blog Code*/
if(isset($_POST['update_post']))
{
    $blogId = $_POST['blogId'];
    $blogTitle = $_POST['blogTitle'];
    $publisher = $_POST['publisher'];
    $topic_id = $_POST['topic_id'];
    $tags = $_POST['tags'];
    $body = $_POST['body'];
    $post_status = $_POST['post_status'];
    $post_image  =  escape($_FILES['featured_image']['name']);
    $post_image_temp =  escape($_FILES['featured_image']['tmp_name']);

    move_uploaded_file($post_image_temp, "../assets/blogs/$post_image"); 
        
    if(empty($post_image)) {
      $query = "SELECT * FROM posts WHERE post_id = $blogId ";
      $select_image = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($select_image)) {        
        $post_image = $row['post_image'];
      }
    }

    $sql = "UPDATE posts SET `post_title`='$blogTitle',`post_author`='$publisher',`post_category_id`='$topic_id',`post_content`='$body',`post_tags`='$tags',`post_status`='$post_status',`post_image`='$post_image'  WHERE  post_id ='$blogId' ";
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Blog Successfully Updated..!!";
        header("location:edit_blogs.php?p_id=$blogId"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Update Blog";
        header("location:edit_blogs.php?p_id=$blogId");
        //echo mysqli_error($con);
    }
}


/*Update categories Code*/
if(isset($_POST['update_topic']))
{
    $cat_id = $_POST['cat_id'];
    $topic_name = $_POST['topic_name'];

    $sql = "UPDATE categories SET `cat_title`='$topic_name' WHERE  cat_id ='$cat_id' ";
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Category Successfully Updated..!!";
        header("location:categories.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Update Category";
        header("location:categories.php");
        //echo mysqli_error($con);
    }
}



/*Delete Code*/
if(isset($_POST['delete_blog']))
{
    $id = $_POST['blog_id'];

    $sql = "DELETE FROM posts WHERE post_id='$id' ";
    //echo $sql;
    //die();
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Blog Successfully Deleted..!!";
        header("location:blogs.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Delete Blog";
        header("location:blogs.php"); 
    } 
}


/*Delete Code*/
if(isset($_POST['delete_cat']))
{
    $id = $_POST['cat_id'];

    $sql = "DELETE FROM categories WHERE cat_id='$id' ";
    //echo $sql;
    //die();
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Category Successfully Deleted..!!";
        header("location:categories.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Delete Category";
        header("location:categories.php"); 
    } 
}


//echo mysqli_error($con);

/*Add Query Code*/
if (isset($_POST["addQuery"])) 
{
  $userName = $_POST['userName'];
  $userEmail = $_POST['userEmail'];
  $userPhone = $_POST['userPhone'];
  $service = $_POST['service'];
  $location = $_POST['location'];
  $discription = $_POST['discription'];
  
  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO enquiry VALUES (0, '$userName', '$userEmail', '$userPhone', '$service', '$location', '$discription', '$created_at')";

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Query Successfully Added..!!";
        header("location:enquiry.php"); 
    }
    else
    {
       /* $_SESSION['error'][] = "Unable to Add Partner Profile";
        header("location:partner.php"); */
        echo mysqli_error($con);
    } 

}

/*Delete Query Code*/
if(isset($_POST['featureddel']))
{
    $id = $_POST['featuredID'];

    $sql = "DELETE FROM featured_products WHERE id='$id' ";
    //echo $sql;
    //die();
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Query Successfully Deleted..!!";
        header("location:featured_products.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Delete";
        header("location:featured_products.php"); 
    }
}

/*Delete Query Code*/
if(isset($_POST['latestDel']))
{
    $id = $_POST['latestID'];

    $sql = "DELETE FROM latest_products WHERE id='$id' ";
    //echo $sql;
    //die();
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Query Successfully Deleted..!!";
        header("location:latest_products.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Delete";
        header("location:latest_products.php"); 
    }
}


/*Add Products Code*/
if (isset($_POST["saveLatest"])) 
{
  $laProName = escape($_POST['laProName']);
  $latest_image = addslashes(file_get_contents($_FILES["laProImage"]["tmp_name"]));
  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO latest_products VALUES (0,'$laProName','$latest_image','$created_at')";
    //echo $sql; die();

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Product Successfully Added..!!";
        header("location:latest_products.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Add Product";
        header("location:latest_products.php");
        //echo mysqli_error($con);
    } 

}


if (isset($_POST["saveFeatured"])) 
{
  $feProName = escape($_POST['feProName']);
  $featured_image = addslashes(file_get_contents($_FILES["feProImage"]["tmp_name"]));
  $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO featured_products VALUES (0,'$feProName','$featured_image','$created_at')";
    //echo $sql; die();

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['success'][] = "Product Successfully Added..!!";
        header("location:featured_products.php"); 
    }
    else
    {
        $_SESSION['error'][] = "Unable to Add Product";
        header("location:featured_products.php");
        //echo mysqli_error($con);
    } 

}

?>