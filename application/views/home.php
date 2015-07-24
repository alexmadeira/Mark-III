<?php $this->load->view('includes/_header');?>
	<div class="container-fluid main">
    	<header class="row header">
			<section class="container">
				<h1 class="logo">Alex Madeira</h1>
				<p><strong>Mussum ipsum cacilds</strong>, vidis litro abertis. Consetis adipiscings elitis. Pra lá , <strong>depois divoltis porris</strong>, paradis.</p>
				<nav>
					<ul class="nav">
						<li>
							<a href="#about" class="about">Sobre</a>
						</li>
						<li>
							<a href="#projects" class="project">Projetos</a>
						</li>
						<li>
							<a href="#contact" class="contact">Contato</a>
						</li>
					</ul>
				</nav>
			</section>
    	</header> 
    	<aside class="contentPage">
	    	<div class="row about" id="about">
				<div class="container">
					<h2>Mussum ipsum cacilds, vidis litro abertis. </h2>
					<a href="#" class="viewMore">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i> </a>
				</div>
	    	</div>
	    	<div class="row projects" id="projects">
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="<?=site_url('projeto')?>" class="transition all"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<a href="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="<?=site_url('projeto')?>" class="transition all"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<a  ahref="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    		<div class="col-md-16 project" data-sr='move 0px'>
	    		  	<a href="<?=site_url('projeto')?>" class="transition all"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<a ahref="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="<?=site_url('projeto')?>" class="transition all"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<a a href="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    		<div class="col-md-8 project" data-sr='move 0px'>
	    		  	<a href="<?=site_url('projeto')?>" class="transition all"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<a  ahref="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    		<div class="col-md-16 project" data-sr='move 0px'>
	    		  	<a href="<?=site_url('projeto')?>" class="transition all"></a>
	    			<img src="<?=base_url('public/img/cover_cinemap.jpg')?>"  alt=""  title="" />
	    			<h3>Mussum ipsum <span>cacilds, vidis</span> litro.</h3>
	    			<a a href="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    	</div>
	    	<div class="row contact" id="contact">
				<div class="container">
					<h2>Mussum ipsum cacilds, vidis litro abertis. </h2>
					<p class="italic">Mussum ipsum cacilds, vidis litro abertis, vidis litro abertis. </p>
					<a href="mailto:alex.c.madeira@gmail.com" class="viewMore">Entre em contato <i class="fa fa-long-arrow-right fa-lg"></i> </a>
				</div>
	    	</div>
	    	<?php $this->load->view('includes/site_foote');?>
	    </aside>
	</div>    
 <?php $this->load->view('includes/_footer');?>