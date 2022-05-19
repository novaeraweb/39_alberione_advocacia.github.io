<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Alberione Araújo Advogados | Botucatu/SP</title>
		<link rel="stylesheet" href="../css/layers.min.css" media="screen">
		<link rel="stylesheet" href="../css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="../style.css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">		
	</head>

	<body class="page">
	<?php require_once "header1.php"?>
		<main role="main">
			<div id="intro-wrap" class="servidor-publico" style="height:12em;">
			</div><!-- intro-wrap -->

			<div id="main">
  <div class="container" style="background-color: #f9f9f9;">
      <div class="grid_10" id="box-login">
        <?php if (array_key_exists('erro', $_GET) && $_GET['erro']=='true') { ?>
          <div id="erro">
            <p> Login e Senha não conferem!<br>Tente novamente. </p>
          </div>
        <?php } ?>
        <form class="form-adm" name="form1" method="POST" action="login.php" >
            <label>Login</label><br>
            <input type="text" name="login" id="login" autofocus required>
            <label>Senha</label><br>
            <input type="password" name="senha" id="senha" required><br>
            <input type="submit" class="button" name="bt-login" value="Entrar">
        </form>
      </div>
  </div>	
</div><!-- id-main -->
</main><!-- main -->
<?php require_once "footer.php" ?>
<script src="https://code.jquery.com/jquery.js"></script>
</body>
</html>