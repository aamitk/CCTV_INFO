    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
      
    <script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/plugins/doubletaptogo.js"></script>
    <script src="assets/plugins/waypoints.min.js"></script>
    <script src="assets/plugins/flowplayer/flowplayer.min.js"></script>
    <script src="assets/plugins/classie.js"></script>
    <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/plugins/switcher/js/dmss.js"></script>
    <script src="assets/plugins/jarallax/jarallax.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    
    <script src="assets/js/sweetalert.min.js"></script>

      <?php
    	 if(!empty($_SESSION['status']))
    	   { 
      ?>
    	  
    	<script>
    		swal({
    		  title: "<?php echo $_SESSION['status']; ?>",
    		  icon: "<?php echo $_SESSION['status_code']; ?>",
    		  button: "Ok",
    		});
    	</script>
    	    
      <?php 
    	 unset($_SESSION['status']);
        }
      ?>