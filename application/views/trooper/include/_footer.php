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
        function reloadMasonry(){
          $container.masonry('reloadItems');   
          $container.masonry('layout');
        }

        $(function(){
        var masonryOptions = {itemSelector: '.grid-item'};
        // initialize Masonry
        $container = $('.grid').masonry( masonryOptions );


            
            // This example uses jQuery so it creates the Dropzone, only when the DOM has
            // loaded.

            // Disabling autoDiscover, otherwise Dropzone will try to attach twice.
            Dropzone.autoDiscover = false;
            // or disable for specific dropzone:
            // Dropzone.options.myDropzone = false;

            $(function() {
              // Now that the DOM is fully loaded, create the dropzone, and setup the
              // event listeners
              var myDropzone = new Dropzone(".dropzone");
              myDropzone.on("success", function(data) {
                
                arquivo = data.name;
                nome = arquivo.substring(0,(arquivo.length -4));
                nome = nome.replace(/_/g, ' ');
                nome = nome.replace(/-/g, ' ');
                grid = $('.grid');

                element = $('.grid-item-modelo').clone();
                element.removeClass('grid-item-modelo');
                element.addClass('grid-item');

                img = element.find('img.thumbnail');
                titulo = element.find('p.titulo');

                img.attr('src',public_url+'upload/'+arquivo);
                titulo.html(nome);
                grid.prepend(element);
                setTimeout("reloadMasonry()",1000)
              });
            })
        })
  
      
    </script>
  </body>
</html>