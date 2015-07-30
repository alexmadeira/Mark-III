<aside class="ls-sidebar">
  <!-- Defails of user account -->
  <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
    <a href="#" class="ls-ico-user">
      Calum Hoyle
      <small>(lstyle)</small>
    </a>
    <nav class="ls-dropdown-nav ls-user-menu">
      <ul>
        <li><a href="#">submenu</a></li>
      </ul>
    </nav>
  </div>
  <nav class="ls-menu">
	<ul>
		<li>
			<a href="<?=site_url('trooper')?>" class="ls-ico-home">Página inicial</a>
		</li>
		<?php 
		if($sessao == 'projetos'){?>
			<li class="ls-submenu-parent ls-active" aria-expanded="true" aria-hidden="false">
		<?}else{?>
			<li class="ls-submenu-parent" aria-expanded="false" aria-hidden="true">
		<?php }?>
			<a href="#" class="ls-ico-folder" role="menuitem">Projetos</a>
			<ul class="ls-submenu" role="menu">
				<li><a href="<?=site_url('trooper/projetos/projeto/00')?>" class="ls-submenu-item ls-ico-book" role="menuitem">Game 7</a></li>
				<li><a href="<?=site_url('trooper/projetos/novo')?>" class="ls-submenu-item ls-ico-plus" role="menuitem">Novo Projeto</a></li>
			</ul>
		</li>
		<li>
			<a href="<?=site_url('trooper/imagens')?>" class="ls-ico-images">Imagens</a>
		</li>
		<?php if($sessao == 'configuracoes'){?>
			<li class="ls-submenu-parent ls-active" aria-expanded="true" aria-hidden="false">
		<?}else{?>
			<li class="ls-submenu-parent" aria-expanded="false" aria-hidden="true">
		<?php }?>
			<a href="#" class="ls-ico-cog" role="menuitem">Configurações</a>
				<ul class="ls-submenu" role="menu">
					<li><a href="<?=site_url('trooper/configuracao/acesso')?>" class="ls-submenu-item ls-ico-users" role="menuitem">Dados de acesso</a></li>
					<li><a href="<?=site_url('trooper/configuracao/site')?>" class="ls-submenu-item ls-ico-domain" role="menuitem">Site</a></li>
				</ul>
		</li>
	</ul>
  </nav>
</aside>