<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid">
	    <h1 class="ls-title-intro ls-ico-images">Imagens</h1>
		<div class="ls-box ls-box-gray ls-lg-space">
			<h2 class="ls-title-3">Cadastro de imagem</h2>
			<div class="ls-box">
				<form action="<?=site_url('/trooper/Action_projeto/imagen_upload/')?>" class="dropzone" method="post" enctype="multipart/form-data">
					<div class="fallback">
						<input name="file" type="file" multiple />
					</div>
				</form>
			</div>
		</div>
		<div class="ls-box ls-lg-space">
			<div class="row grid">
				<?php for ($i=0; $i <5 ; $i++) {?>
				<div class="col-sm-6 col-md-3 grid-item">
					<div class="ls-box">
						<img src="<?=base_url('public/upload/alex-madeira-game-7-bg.jpg')?>"  alt="[NOME]" title="[NOME]"/>
						<p>[NOME]</p>
						<a href="#" aria-label="Mudar o Plano de Revenda" class="ls-btn-danger ls-btn-lg ls-btn-block" title="Mudar o Plano de Revenda">Deletar</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 grid-item">
					<div class="ls-box">
						<img src="<?=base_url('public/upload/alex-madeira-bg-game7-day-7.jpg')?>"  alt="[NOME]" title="[NOME]"/>
						<p>[NOME]</p>
						<a href="#" aria-label="Mudar o Plano de Revenda" class="ls-btn-danger ls-btn-lg ls-btn-block" title="Mudar o Plano de Revenda">Deletar</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 grid-item">
					<div class="ls-box">
						<img src="<?=base_url('public/upload/alex-madeira-game7-desktop.png')?>"  alt="[NOME]" title="[NOME]"/>
						<p>[NOME]</p>
						<a href="#" aria-label="Mudar o Plano de Revenda" class="ls-btn-danger ls-btn-lg ls-btn-block" title="Mudar o Plano de Revenda">Deletar</a>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	  </div>
	<?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>