<?php $this->load->view('includes/_header');?>
	<div class="container-fluid main">
		<a id="close" class="transition" href="<?=site_url()?>"title="Encerrar o projeto"><p>Encerrar o projeto</p><i></i></a>
    	<header class="row header" style="background-image: url('<?=base_url('/public/upload/'.$projeto->projeto_background_principal_img->arquivo_arquivo)?>')">
			<div class="nav">
    		<a href="<?=site_url()?>" class="close transition" title="Encerrar o projeto"></a>
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
				<p>- <?=$projeto->projeto_slogan?> -</p>
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
					<h2>Gostou? </h2>
					<p class="italic">Se você gostou,talvezes goste desses também</p>
				</div>
			</div>
			<div class="row projects">
				<?php foreach ($projeto_relacionados->result() as $projeto_relacionado){?>
		    		<div class="col-md-8 project" data-sr='move 0px'>
		    		  	<a href="<?=site_url('projeto/'.$projeto_relacionado->projeto_slug)?>" class="transition all"></a>
		    			<img src="<?=base_url('/public/upload/'.$projeto_relacionado->projeto_preview_img->arquivo_arquivo)?>"  alt="<?=$projeto_relacionado->projeto_nome?>"  title="<?=$projeto_relacionado->projeto_nome?>" />
		    			<h3><span><?=$projeto_relacionado->projeto_slogan?></span></h3>
		    			<a href="<?=site_url('projeto/'.$projeto_relacionado->projeto_slug)?>" class="viewMore transition">Explore <?=$projeto_relacionado->projeto_nome?><i class="fa fa-long-arrow-right fa-lg"></i></a>
		    		</div>
				<?php }?>	
	    	</div>
	    	<?php $this->load->view('includes/site_foote');?>
	    </aside>
	</div>
  <?php $this->load->view('includes/_footer');?>