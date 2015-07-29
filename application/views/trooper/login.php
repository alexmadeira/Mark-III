
<!DOCTYPE html>
<html class="ls-theme-green">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Tela de Login</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="http://assets.locaweb.com.br/locastyle/3.7.4/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="ls-login-parent">
    <div class="ls-login-inner">
      <div class="ls-login-container">
        <div class="ls-login-box">
          <h1 class="ls-login-logo"><img title="Logo login" src="<?=base_url('trooper_files/img/trooper-logo.png')?>" /></h1>
          <form role="form" class="ls-form ls-login-form" action="<?=site_url('trooper/login/logar')?>" name="login" method="POST">
            <fieldset>
              <label class="ls-label">
                <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                <input class="ls-login-bg-user ls-field-lg" type="text" placeholder="Usuário" name="login_usuario" required autofocus>
              </label>
              <label class="ls-label">
                <b class="ls-label-text ls-hidden-accessible">Senha</b>
                <div class="ls-prefix-group">
                  <input id="password_field" class="ls-login-bg-password ls-field-lg" type="password" placeholder="Senha" name="login_senha" required>
                  <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                </div>
              </label>
              <p><a class="ls-login-forgot" href="forgot-password">Esqueci minha senha</a></p>
              <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="http://assets.locaweb.com.br/locastyle/3.7.4/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
