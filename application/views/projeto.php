<?php $this->load->view('includes/_header');?>
	<div class="container-fluid main">
		<a id="close" class="transition" href="<?=site_url('home')?>"title="Encerrar o projeto"><p>Encerrar o projeto</p><i></i></a>
    	<header class="row header" style="background-image: url('<?=base_url('/public/img/bg01.jpg')?>')">
			<div class="nav">
    		<a href="<?=site_url('home')?>" class="close transition" title="Encerrar o projeto"></a>
				<ul>
					<li>
						<em>Categoria</em>
						<p>Web</p>
					</li>
					<li>
						<em>Projeto</em>
						<p>E-Commerce</p>
					</li>
					<li>
						<em>Agencia</em>
						<p><a href="#" class="staMonica agencia">Sta Monica</a></p>
					</li>
					<li>
						<em>Ano</em>
						<p>2015</p>
					</li>
				</ul>
			</div>
			<a href="#" class="projetoLogo" style="background-image: url('<?=base_url('/public/upload/alex-madeira-game7-logo.png')?>')">Projeto Nome</a>
			<div class="project">
				<h1>Vidis litro abertis</h1>
				<p>- Consetis adipiscings elitis. Pra lá -</p>
			</div>
			<img src="<?=base_url('/public/img/tranche_bas1.png')?>" alt="" title="" class="trancher1" />
    	</header>
    	<aside class="contentPage">
	    	<div class="row apresentacao col-md-16">
	    		<div class="container">
	    			<div class="mobile">
	    				<img src="<?=base_url('/public/upload/alex-madeira-game7-mobile-v1.png')?>" alt="" title="" class="iphone G L" width="200">
	    				<img src="<?=base_url('/public/upload/alex-madeira-game7-mobile-v2.png')?>" alt="" title="" class="iphone M R" width="200">
	    			</div>
	    			<div class="produto">
	    				<img src="<?=base_url('/public/upload/alex-madeira-game7-produto-fone.png')?>" alt="" title="" class="">
	    			</div>
	    		</div>
	    	</div>
			<div class="row separador col-md-16" style="background-image: url('<?=base_url('/public/upload/alex-madeira-bg-game7-day-7.jpg')?>')">
				<img src="<?=base_url('/public/img/tranche_bas2.png')?>" alt="" title="" class="trancher2" />
				<div class="overlay"></div>
				<img src="<?=base_url('/public/img/tranche_bas3.png')?>" alt="" title="" class="trancher3" />
			</div>
	    	<div class="row apresentacao descricao col-md-16">
	    		<div class="container">
	    			<div class="descricao">
		    			<h2>Vidis litro abertis</h2>
		    			<hr>
		    			<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
	    			</div>
	    			<div class="desktop">
	    				<img src="<?=base_url('/public/upload/alex-madeira-game7-desktop.png')?>" alt="" title="" class="iMac G L" width="600">
	    			</div>
		    	</div>
	    	</div>
			<div class="row viewMore col-md-16">
				<div class="container">
					<h2>Mussum ipsum cacilds, vidis litro abertis. </h2>
					<p class="italic">Mussum ipsum cacilds, vidis litro abertis, vidis litro abertis. </p>
				</div>
			</div>
			<div class="row projects">
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
	    			<a href="<?=site_url('projeto')?>" class="viewMore transition">Mussum ipsum cacilds <i class="fa fa-long-arrow-right fa-lg"></i></a>
	    		</div>
	    	</div>
	    	<?php $this->load->view('includes/site_foote');?>
	    </aside>
	</div>
  <?php $this->load->view('includes/_footer');?>