<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    
  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="pt-br" />
        <meta name="copyright" content="Copyright © 1990 - www.alexmadeira.com.br - Todos os Direitos Reservados" />
        <meta name="email" content="alex.c.madeira@gmail.com" />
        <meta name="author" content="Alex Madeira" />
        <meta name="organization" content="Alex Madeira - Web Solution Developer & SEO analyst" />
        <meta name="generator" content="Alex Madeira" />
        <meta name="location" content="São Paulo, Brazil" />

        <meta name="keywords" content="Web, Developer, Desenvolvedor, Programador, Analista, SEO, SEM, Criação, Site" />
        <meta name="description" content="Desnvolvimento de sites e analise de SEO/SEM" />


        <link rel="shortcut icon" href="" type="image/x-icon" />

        <!--Facebook Tags-->
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="Alex Madeira | Web Solution Developer & SEO analyst"/>
        <meta property="og:url" content="http://www.alexmadeira.com.br"/>
        <meta property="og:image" content="<?=base_url('/public/img/alex-madeira-cartao-facebook.jpg')?>"/>
        <meta property="og:site_name" content="Alex Madeira"/>
        <meta property="og:description" content="Desnvolvimento de sites e analise de SEO/SEM"/>
        <!--End Facebook Tags-->
        
    
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Alex Madeira | Web Solution Developer & SEO analyst</title>
	
	    <!-- Bootstrap -->
	    <link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
	    <link href="<?=base_url('public/fonts/font.css')?>" rel="stylesheet">
	    <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">
	   
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-50122149-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
  </head>
  <body>
  <?php 
     if (strstr($_SERVER["HTTP_USER_AGENT "], "MSIE")) {
	     $frase="Não use o Internet Explorer";
     }else{
	     $frase="Que bom que você não esta usando o IE";
     }
  ?>
  	<div class="container-fluid">
  	    <canvas class="constelacao"></canvas>
		<ul id="scene" class="scene">
			<li data-depth=".7" class="layer logo-alex-1"> <a href="<?=site_url()?>" class="logo">Alex</a></li>
			<li data-depth="0.8" class="layer logo-alex-2"> <a href="<?=site_url()?>" class="logo">Madeira</a></li>
			<li data-depth="0.6" class="layer logo-madeira"> <a href="<?=site_url()?>" class="logo">Web Solution Developer & SEO analyst</a></li>
			<li data-depth="1.00" class="layer cargo"> <h1 class="code">Web Solution Developer & SEO analyst</h1></li>
			<li data-depth="0" class="layer albert"> Albert Einstein</li>
			<li data-depth="0.1" class="layer construcao"> <h2 class="code">Construção...</h2></li>
			<li data-depth="0.2" class="layer mesageCode error code">error"</li>
			<li data-depth="0.4" class="layer mesageCode postName code">$_POST["nome"]; ?</li>
			<li data-depth="0.2" class="layer mesageCode userAgente code">
				<p>if (strstr($_SERVER["HTTP_USER_AGENT "], "MSIE")) {</p>
				<p>echo "<?=$frase?> &lt;br /&gt;";</p>
			</li>
			<li data-depth=".4" class="layer mesageCode httpReferer code"> &lt;?php echo  $_SERVER["HTTP_REFERER"];?&gt;</li>
			
		</ul>
   </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('public/js/parallax-master/source/parallax.js')?>"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/stats.js/r11/Stats.js"></script>
    <script src="<?=base_url('public/js/constelacao.js')?>"></script>
    
	<script>
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
		$('.constelacao').constellation();
		$(window).resize(function() {
			$('body').height(window.innerHeight)
		});
		$('body').height(window.innerHeight)
	</script>

  </body>
</html>