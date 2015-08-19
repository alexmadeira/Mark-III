<?php $this->load->view('includes/_header');?>
	<div class="container-fluid main">
    	<header class="row header">
			<section class="container">
				<h1 class="logo">Alex Madeira</h1>
				<p>Oi, eu sou <strong>Alex Madeira</strong> sou um <strong>Web Solution Developer</strong> & <strong>SEO analyst</strong>, que é só um nome bonito para um desenvolvedor que <strong>resolve</strong> seus problemas e tem um grande conhecimento em <strong>SEO</strong>.</p>
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
					<h2>Veja Alguns dos projetos onde estive envolvido. </h2>
					<a href="#" class="viewMore">Veja meu curriculo <i class="fa fa-long-arrow-right fa-lg"></i> </a>
				</div>
	    	</div>
	    	<div class="row projects" id="projects">
	    		<?php $i=1;?>
				<?php foreach ($projetos->result() as $projeto) {?>
					<div class="col-md-<?=($i%3==0)?16:8?> project" data-sr='move 0px'>
		    		  	<a href="<?=site_url('projeto/'.$projeto->projeto_slug)?>" class="transition all"></a>
		    			<img src="<?=base_url('/public/upload/'.$projeto->projeto_preview_img->arquivo_arquivo)?>"  alt="<?=$projeto->projeto_nome?>"  title="<?=$projeto->projeto_nome?>" />
		    			<h3><span><?=$projeto->projeto_slogan?></span></h3>
		    			<a href="<?=site_url('projeto/'.$projeto->projeto_slug)?>" class="viewMore transition">Explore <?=$projeto->projeto_nome?><i class="fa fa-long-arrow-right fa-lg"></i></a>
		    		</div>
				<?php $i++; }?>
	    	</div>
	    	<div class="row contact" id="contact">
				<div class="container">
					<h2>Você gostou do meu trabalho ou quer saber mais sobre mim ?</h2>
					<p class="italic">Não tem problema, é só me enviar um e-mail!</p>
					<a href="mailto:alex.c.madeira@gmail.com" class="viewMore"> Entre em Contato <i class="fa fa-long-arrow-right fa-lg"></i> </a>
				</div>
	    	</div>
	    	<?php $this->load->view('includes/site_foote');?>
	    </aside>
	</div>    
 <?php $this->load->view('includes/_footer');?>