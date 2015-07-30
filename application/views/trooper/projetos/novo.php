<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid">
	    <h1 class="ls-title-intro ls-ico-book">Novo Projeto</h1>


			<form action="<?=site_url('/trooper/Action_projeto/imagen_upload/')?>" class="dropzone" method="post" enctype="multipart/form-data">
				<div class="fallback">
					<input name="file" type="file" multiple />
				</div>
				<input type="submit" value="ok" />
			</form>

	  </div>
	  <?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>