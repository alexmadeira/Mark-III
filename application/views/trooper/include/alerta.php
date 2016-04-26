<?php if($this->session->userdata('sucesses_mesage')){?>
	<div class="ls-alert-success"><?=$this->session->userdata('sucesses_mesage')?></div>
<?php }?>
<?php if($this->session->userdata('erro_mesage')){?>
	<div class="ls-alert-danger"><?=$this->session->userdata('erro_mesage')?></div>
<?php }?>
<?php if($this->session->userdata('alerta_mesage')){?>
	<div class="ls-alert-warning"><?=$this->session->userdata('alerta_mesage')?></div>
<?php }?>


<?php 

$this->session->unset_userdata('sucesses_mesage');
$this->session->unset_userdata('erro_mesage');
$this->session->unset_userdata('alerta_mesage');

?>