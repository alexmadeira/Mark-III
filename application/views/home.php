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
        <meta property="og:image" content="http://www.alexmadeira.com.br/public/img/alex-madeira-cartao-facebook.jpg"/>
        <meta property="og:site_name" content="Alex Madeira"/>
        <meta property="og:description" content="Desnvolvimento de sites e analise de SEO/SEM"/>
        <!--End Facebook Tags-->
        
    
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Alex Madeira | Web Solution Developer & SEO analyst</title>
	
	    <!-- Bootstrap -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	    <link href='<?=base_url('public/fonts/font-awesome-4.3.0/css/font-awesome.min.css')?>' rel='stylesheet' type='text/css'>

	    <link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
	    <link href="<?=base_url('public/fonts/font.css')?>" rel="stylesheet">
	   
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		
		<style type="text/css">
			html,body{height: 100%; line-height: 1;font-family: 'Open Sans', Arial, sans-serif;}
			.main{height: 100%;}
			.header{text-align: center;background: url('<?=base_url('public/img/alex-madeira-bg-header.jpg')?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-position: center center;height: 100%; color:#707070;}
			.header strong{color: #fff}
			.header .container{  position: fixed;width: 100%;top: 50%;margin-top: -225px;z-index: 0; height: 100%;}
			.header .container .logo{background: url('<?=base_url('public/img/alex-madeira-logo.png')?>');background-repeat: no-repeat;text-indent: -9999em;display: inline-block;width: 289px;height: 140px; }
    		.header .container p{font-size: 20px;font-weight: 400;line-height: 1.5em; text-transform: uppercase;   width: 880px; margin: 40px auto;}
			.header .container p strong{font-weight: normal;}
			
			ul.nav{text-align: center;  display: inline-block;margin: 0 45px;}
			ul.nav li{display: inline-block;margin: 0 45px;}
				ul.nav li a{background: url('<?=base_url('public/img/alex-madeira-nav-icon.png')?>') left top no-repeat;background-size: 165px; text-indent: -9999em;  display: block; height: 55px;width: 55px;}
				ul.nav li a.about{background-position: -110px 0;}
				ul.nav li a.project{background-position: 0 0;}
				ul.nav li a.contact{background-position: -55px 0;} 

				ul.nav li a.about:hover{background-position: -110px -55px;background-color: transparent;}
				ul.nav li a.project:hover{background-position: 0 -55px;background-color: transparent;}
				ul.nav li a.contact:hover{background-position: -55px -55px;background-color: transparent;}
			.contentPage{background: #fff;position: relative;z-index: 100;height: auto; text-align: center;}
			.contentPage h2{color: #333333;font-size: 28px;font-weight: 700;width: 90%;max-width: 870px; margin: 0 auto;padding-top: 30px;margin-bottom: 60px;line-height: 50px;}
			.viewMore{text-decoration: none;color: #333333;text-transform: uppercase;font-size: 14px;font-weight: 700;padding: 18px 32px;border: 2px solid #333333;-webkit-transition: all 0.2s ease-out;-moz-transition: all 0.2s ease-out;-o-transition: all 0.2s ease-out;-ms-transition: all 0.2s ease-out;display: inline-block; margin-bottom: 30px}
			.viewMore:hover{color: #fff;background: #333333;}

			.contentPage .projects .project{  padding: 5px;position: relative;overflow: hidden;border: 3px solid #fff;text-align: left;height: 400px;}
			.contentPage .projects .project img{width: 100%;position: absolute;left: 0;top: 0;  transform: scale(1);-webkit-transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);-webkit-transition: all .3s ease-out;-moz-transition: all .3s ease-out;-o-transition: all .3s ease-out;-ms-transition: all .3s ease-out;}
			.contentPage .projects .project h3{position: relative;left: 25px;color: #fff;font-size: 28px;font-weight: 700;z-index: 5;}
			.contentPage .projects .project h3 span{font-style: italic;font-weight: 300;}
			.contentPage .projects .project p{  position: relative;left: 25px; top:10px;color: #fff;border: 2px solid #fff;z-index: 30;}
			.contentPage .projects .project:hover p {color: #333222;background: #fff;}
			.contentPage .projects .project:hover img{transform: scale(1.05);-webkit-transform: scale(1.05);-moz-transform: scale(1.05);-o-transform: scale(1.05);-ms-transform: scale(1.05);}
			.contentPage .projects .project a{display: block;width: 100%;height: 100%;text-decoration: none;background: linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 100%);position: absolute;z-index: 2;left: 0;top: 0;}

		</style>
  </head>
  <body>
	<div class="container-fluid main">
    	<header class="row header">
			<section class="container">
				<h1 class="logo">Alex Madeira</h1>
				<p><strong>Mussum ipsum cacilds</strong>, vidis litro abertis. Consetis adipiscings elitis. Pra lá , <strong>depois divoltis porris</strong>, paradis.</p>
				<ul class="nav">
					<li>
						<a href="#" class="about">Sobre</a>
					</li>
					<li>
						<a href="#" class="project">Projetos</a>
					</li>
					<li>
						<a href="#" class="contact">Contato</a>
					</li>
				</ul>
			</section>
    	</header> 
    	<aside class="contentPage">
	    	<div class="row about" style="background-color: #fff;padding: 5px;">
				<div class="container">
					<h2>Mussum ipsum cacilds, vidis litro abertis. </h2>
					<a href="#" class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i> </a>
				</div>
	    	</div>
	    	<div class="row projects">
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="#"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<p class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></p>
	    		</div>
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="#"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<p class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></p>
	    		</div>
	    		<div class="col-md-16 project" data-sr='move 0px'>
	    		  	<a href="#"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<p class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></p>
	    		</div>
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="#"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<p class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></p>
	    		</div>
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="#"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<p class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></p>
	    		</div>
	    		<div class="col-md-16 project" data-sr='move 0px'>
	    		  	<a href="#"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<p class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></p>
	    		</div>
	    	</div>
	    	<div class="row contact" style="background-color: #00f;padding: 5px; height:300px">
				<div class="container"  >
				</div>
	    	</div>
	    	<div class="row footer" style="background-color: #f65;padding: 5px; height:300px">
				<div class="container"  >
				</div>
	    	</div>
	    </aside>
	</div>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script type="text/javascript" src="<?=base_url('public/js/scrollReveal.js-master/scrollReveal.js')?>"></script>
	<script type="text/javascript">window.sr = new scrollReveal();</script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>
    <script>
		var scene = document.getElementById('scene');
	</script>

  </body>
</html>