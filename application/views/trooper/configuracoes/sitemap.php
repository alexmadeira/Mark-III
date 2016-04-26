<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid">
	    <h1 class="ls-title-intro ls-ico-code">Sitemap.xml</h1>
		<form action="" class="ls-form ls-form-vertical row" name="sitemap">
		  <fieldset>
	  		<?php $this->load->view('trooper/include/alerta')?>
		    <label class="ls-label col-md-12 col-xs-12">
		      <b class="ls-label-text"></b>
		      <a href="<?=site_url('/trooper/action_configuracao/sitemapRegerar')?>" class="ls-btn-primary">Regerar</a>
		      <a href="<?=site_url('/trooper/action_configuracao/sitemapDelete')?>" class="ls-btn-danger">Apagar</a>
		    </label>
		  </fieldset>
		</form>	    
	  </div>
	<?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>