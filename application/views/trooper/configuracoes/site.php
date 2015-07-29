<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid">
	    <h1 class="ls-title-intro ls-ico-domain">Configurações do site</h1>
		<form action="" class="ls-form ls-form-vertical row" name="site">
		  <fieldset>
		    <label class="ls-label col-md-12 col-xs-12">
		      <b class="ls-label-text">Titulo</b>
		      <input type="text" name="site_titulo" placeholder="titulo do site" class="ls-field" required>
		    </label>
		    <label class="ls-label col-md-12 col-xs-12">
		      <b class="ls-label-text">Tags</b>
		      <input type="text" name="site_tags" placeholder="tag1, tag2, tag3, ..." class="ls-field" required>
		    </label>  
		    <label class="ls-label col-md-12 col-xs-12">
		      	<b class="ls-label-text">Descrição</b>
		    	<textarea data-ls-module="charCounter" maxlength="160" name="site_descricão"></textarea>
			</label>
		  </fieldset>
		  <div class="ls-actions-btn">
		    <button class="ls-btn" type="submit">Salvar</button>
		    <button class="ls-btn-danger" type="reset">Cancelar</button>
		  </div>
		</form>	    
		
		<hr>
 		<h2 class="ls-title-2">Bloqueio</h2>
		<form action="" class="ls-form ls-form-vertical row" name="bloqueio">
		  <fieldset>
		    <label class="ls-label col-md-12 col-xs-12">
		      <b class="ls-label-text">Ips Permitidos</b>
		      <input type="text" name="bloqueio_ips" placeholder="ip1, ip2, ip3, ..." class="ls-field" required>
		    </label>
		    <div class="ls-label col-md-12 col-xs-12">
		    	<b class="ls-label-text">Mondo de Manutenção</b>
			    <div class="ls-switch-btn ls-float-left">
				    <input type="checkbox" id="manutencao" name="bloqueio_manutencao">
				    <label class="ls-switch-label" for="manutencao" name="label-manutencao" ls-switch-off="Desativado" ls-switch-on="Ativado"><span></span></label>
				</div> 
			</div>
		  </fieldset>
		  <div class="ls-actions-btn">
		    <button class="ls-btn" type="submit">Salvar</button>
		    <button class="ls-btn-danger" type="reset">Cancelar</button>
		  </div>
		</form>	    

	  </div>
	<?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>