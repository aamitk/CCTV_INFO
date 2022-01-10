<?php
function escape($string) {

global $con;

return mysqli_real_escape_string($con, trim($string));
}

function confirmQuery($result) {
    
   	global $con;

    if(!$result ) {     
        die("QUERY FAILED ." . mysqli_error($connection));
    }
}

// cats variables
$cat_id = 0;
$isEditingcat = false;
$cat_title = "";

if (isset($_GET['edit-cat'])) {
    $isEditingcat = true;
    $cat_id = $_GET['edit-cat'];
    editcat($cat_id);
}

function editcat($cat_id) {
    global $con, $cat_title, $isEditingcat, $cat_id;
    $sql = "SELECT * FROM categories WHERE cat_id=$cat_id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $cat = mysqli_fetch_assoc($result);
    // set form values ($cat_title) on the form to be updated
    $cat_title = $cat['cat_title'];
}


?>