<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="pt-br" />
  <meta name="copyright" content="Copyright © 1990 - <?=site_url()?> - Todos os Direitos Reservados" />
  <meta name="email" content="alex.c.madeira@gmail.com" />
  <meta name="author" content="Alex Madeira" />
  <meta name="organization" content="Alex Madeira - <?=$titulo?> " />
  <meta name="generator" content="Alex Madeira" />
  <meta name="location" content="São Paulo, Brazil" />

  <meta name="keywords" content="Web, Developer, Desenvolvedor, Programador, Analista, SEO, SEM, Criação, Site" />
  <meta name="description" content="<?=$descricao?>" />


  <link rel="shortcut icon" href="" type="image/x-icon" />

  <!--Facebook Tags-->
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="Alex Madeira | <?=$titulo?>"/>
  <meta property="og:url" content="<?=$url;?>"/>
  <meta property="og:image" content="<?=$imagem?>"/>
  <meta property="og:site_name" content="Alex Madeira"/>
  <meta property="og:description" content="<?=$descricao?>"/>
  <!--End Facebook Tags-->
  
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Alex Madeira | <?=$titulo?> </title>

  <!-- Bootstrap -->
  
  <?php $style =@($pagina)?$pagina:'style'?>
  <link href="<?=base_url('public/css/'.$style.'.css')?>" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50122149-1', 'auto');
        ga('send', 'pageview');
      </script>

      <script type="text/javascript">
        window.smartlook||(function(d) {
          var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
          var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
          c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '8bac04fb71cc911da8b6c989dcb9cc7e5fe8d8f1');
      </script>
    </head>
    <body>
      <div class="loader">
        <div class="loading"></div>
      </div>