<?php 
    if(!empty($_SESSION['error'])){   
        foreach ($_SESSION['error'] as $er) {
        } ?>
        <div class="alert alert-danger" role="alert">
		   <strong><?php  echo $er;  ?></strong> 
		</div>
	<?php  unset($_SESSION['error']);
    }
?>

<?php 
    if(!empty($_SESSION['success'])){   
        foreach ($_SESSION['success'] as $er) {  
        } ?>
        <div class="alert alert-success" role="alert">
		  <strong><?php  echo $er;  ?></strong> 
		</div>
	<?php  unset($_SESSION['success']);
    }
?>