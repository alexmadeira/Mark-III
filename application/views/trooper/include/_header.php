<!DOCTYPE html>
<html class="ls-theme-green">
  <head>
    <title>Página com a estrutura inicial</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.7.4/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('trooper_files/css/extend.css')?>" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="<?=base_url('trooper_files/img/trooper-icon.ico')?>">
    <link rel="apple-touch-icon" href="<?=base_url('trooper_files/img/trooper-icon.ico')?>">
 	<!--[if lt IE 9]>
		<script type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	<![endif]-->
  </head>
  <body>
    <div class="ls-topbar">
      <!-- Notification bar -->
      <div class="ls-notification-topbar">
        <!-- Link of support/help -->
        <div class="ls-alerts-list">
          <a href="#" class="ls-ico-bell-o" data-counter="5" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
          <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
          <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
        </div>

        <!-- User details -->
        <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
          <a href="#" class="ls-ico-user">
            Zoe Palmer
            <small>(lstyle)</small>
          </a>
          <nav class="ls-dropdown-nav ls-user-menu">
            <ul>
              <li><a href="#">Conta</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <span class="ls-show-sidebar ls-ico-menu"></span>

      <!-- Nome do produto/marca -->
      <h1 class="ls-brand-name"><a class="ls-ico-earth" href="<?=site_url('/trooper')?>">Trooper</a></h1>
    </div>
