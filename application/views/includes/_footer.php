   <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script type="text/javascript" src="<?=base_url('public/js/scrollReveal.js-master/scrollReveal.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('public/js/jquery.easing.1.3.js')?>"></script>

	<script type="text/javascript">window.sr = new scrollReveal();</script>
    <script src="http://www.alexmadeira.com.br/public/js/bootstrap.min.js"></script>
    <script>
		var scene = document.getElementById('scene');

		jQuery(function( $ ){
		    $(".main").hide();
		    $(".loader").show();
		    $(window).load(function() {
		        	$(".loader").fadeOut(function() {
		            $(".main").fadeIn(1000);
		      	  }); 
		 	 });
								
		});

	    $(document).ready(function(){
	        
	        $('nav ul li a').click(function(e) {
					var anchor=$(this);
					$('html, body').stop().animate({
						scrollTop: $(anchor.attr('href')).offset().top
					}, 1000, 'easeInOutExpo');
					e.preventDefault();
			});
			
			/*--Fade entre les pages--*/
		
			$("a.transition").click(function(event){
				event.preventDefault();
				linkLocation = this.href;
				$(".main").fadeOut(1000, redirectPage);
				
				function redirectPage() {
				window.location = linkLocation;
				}    
			});
						
		});
	    
	</script>
  </body>
</html>