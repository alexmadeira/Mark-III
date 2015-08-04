<!--

stdClass Object
(
    [projeto_id] => 9
    [projeto_slug] => Game-7
    [projeto_logo] => 248
    [projeto_background_principal] => 250
    [projeto_preview] => 251
    [projeto_mobile1] => 245
    [projeto_mobile2] => 247
    [projeto_produto] => 249
    [projeto_background] => 246
    [projeto_desktop] => 244
    [projeto_nome] => Game 7
    [projeto_categoria] => 1
    [projeto_tipo] => 1
    [projeto_agencia] => 1
    [projeto_ano] => 2015
    [projeto_descricao] => teste
    [projeto_logo_img] => stdClass Object
        (
            [arquivo_id] => 248
            [arquivo_nome] => lg game7
            [arquivo_tipo] => 1
            [arquivo_arquivo] => lg-game7.png
        )

    [projeto_background_principal_img] => stdClass Object
        (
            [arquivo_id] => 250
            [arquivo_nome] => alex madeira game 7 bg
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-game-7-bg.jpg
        )

    [projeto_preview_img] => stdClass Object
        (
            [arquivo_id] => 251
            [arquivo_nome] => alex madeira game 7 pre page
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-game-7-pre-page.jpg
        )

    [projeto_mobile1_img] => stdClass Object
        (
            [arquivo_id] => 245
            [arquivo_nome] => alex madeira game7 mobile v1
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-game7-mobile-v1.png
        )

    [projeto_mobile2_img] => stdClass Object
        (
            [arquivo_id] => 247
            [arquivo_nome] => alex madeira game7 mobile v2
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-game7-mobile-v2.png
        )

    [projeto_produto_img] => stdClass Object
        (
            [arquivo_id] => 249
            [arquivo_nome] => alex madeira game7 produto fone
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-game7-produto-fone.png
        )

    [projeto_background_img] => stdClass Object
        (
            [arquivo_id] => 246
            [arquivo_nome] => alex madeira bg game 7 day 7
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-bg-game-7-day-7.jpg
        )

    [projeto_desktop_img] => stdClass Object
        (
            [arquivo_id] => 244
            [arquivo_nome] => alex madeira game7 desktop
            [arquivo_tipo] => 1
            [arquivo_arquivo] => alex-madeira-game7-desktop.png
        )

    [projeto_categoria_nome] => stdClass Object
        (
            [categoria_id] => 1
            [categoria_nome] => Web
        )

    [projeto_tipo_nome] => stdClass Object
        (
            [tipo_id] => 1
            [tipo_nome] => e-commerce
        )

    [projeto_agencianome] => stdClass Object
        (
            [agencia_id] => 1
            [agencia_nome] => Sta Monica
            [agencia_class] => staMonica
        )

)
-->

<?php $this->load->view('includes/_header');?>
	<div class="container-fluid main">
		<a id="close" class="transition" href="<?=site_url('home')?>"title="Encerrar o projeto"><p>Encerrar o projeto</p><i></i></a>
    	<header class="row header dark" style="background-image: url('<?=base_url('/public/upload/alex-madeira-game-7-bg.jpg')?>')">
			<div class="nav">
    		<a href="<?=site_url('home')?>" class="close transition" title="Encerrar o projeto"></a>
				<ul>
					<li>
						<em>Categoria</em>
						<p><?=$projeto->projeto_categoria_nome->categoria_nome?></p>
					</li>
					<li>
						<em>Projeto</em>
						<p><?=$projeto->projeto_tipo_nome->tipo_nome?></p>
					</li>
					<li>
						<em>Agencia</em>
						<p><a href="#" class="<?=$projeto->projeto_agencia_nome->agencia_class?> agencia"><?=$projeto->projeto_agencia_nome->agencia_nome?></a></p>
					</li>
					<li>
						<em>Ano</em>
						<p><?=$projeto->projeto_ano?></p>
					</li>
				</ul>
			</div>
			<a href="#" class="projetoLogo" style="background-image: url('<?=base_url('/public/upload/'.$projeto->projeto_logo_img->arquivo_arquivo)?>')"><?=$projeto->projeto_nome?></a>
			<div class="project">
				<h1><?=$projeto->projeto_nome?></h1>
				<p>- Consetis adipiscings elitis. Pra lá -</p>
			</div>
			<img src="<?=base_url('/public/img/tranche_bas1.png')?>" alt="" title="" class="trancher1" />
    	</header>
    	<aside class="contentPage">
	    	<div class="row apresentacao col-md-16">
	    		<div class="container">
	    			<div class="mobile">
	    				<img src="<?=base_url('/public/upload/'.$projeto->projeto_mobile1_img->arquivo_arquivo)?>" alt="<?=$projeto->projeto_mobile1_img->arquivo_nome;?>" title="<?=$projeto->projeto_mobile1_img->arquivo_nome;?>" class="iphone G L" width="200">
	    				<img src="<?=base_url('/public/upload/'.$projeto->projeto_mobile2_img->arquivo_arquivo)?>" alt="<?=$projeto->projeto_mobile2_img->arquivo_nome;?>" title="<?=$projeto->projeto_mobile2_img->arquivo_nome;?>" class="iphone M R" width="200">
	    			</div>
	    			<div class="produto">
	    				<img src="<?=base_url('/public/upload/'.$projeto->projeto_produto_img->arquivo_arquivo)?>" alt="<?=$projeto->projeto_produto_img->arquivo_nome;?>" title="<?=$projeto->projeto_produto_img->arquivo_nome;?>" class="">
	    			</div>
	    		</div>
	    	</div>
			<div class="row separador col-md-16" style="background-image: url('<?=base_url('/public/upload/'.$projeto->projeto_background_img->arquivo_arquivo)?>')">
				<img src="<?=base_url('/public/img/tranche_bas2.png')?>" alt="alex madeira separador" title="" class="trancher2" />
				<div class="overlay"></div>
				<img src="<?=base_url('/public/img/tranche_bas3.png')?>" alt="alex madeira separador " title="" class="trancher3" />
			</div>
	    	<div class="row apresentacao descricao col-md-16">
	    		<div class="container">
	    			<div class="descricao">
		    			<h2>O projeto <?=$projeto->projeto_nome?></h2>
		    			<hr>
		    			<p><?=$projeto->projeto_descricao?></p>
	    			</div>
	    			<div class="desktop">
	    				<img src="<?=base_url('/public/upload/'.$projeto->projeto_desktop_img->arquivo_arquivo)?>" alt="<?=$projeto->projeto_desktop_img->arquivo_nome;?>" title="<?=$projeto->projeto_desktop_img->arquivo_nome;?>" class="iMac G L" width="600">
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