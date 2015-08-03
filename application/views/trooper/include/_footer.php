    <!-- sidebar -->
    	<?php $this->load->view('trooper/include/_sidebar')?>
    <!-- /sidebar -->
    <!-- notification -->
    	<?php $this->load->view('trooper/include/notification')?>
    <!-- /notification -->
    <!-- Feedback -->
    	<?php $this->load->view('trooper/include/feedback')?>
    <!-- /Feedback -->
	<!-- Ajuda-->
		<?php $this->load->view('trooper/include/ajuda')?>
	<!-- /Ajuda -->
    </div>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.7.4/javascripts/locastyle.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <script type="text/javascript">
        var base_url    = '<?=base_url();?>';
        var public_url  = base_url+'public/';
        var $container;       
    </script>
    <script src="<?=base_url('trooper_files/js/scripts.js')?>"></script>

  </body>
</html>