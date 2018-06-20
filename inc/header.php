<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Orientador Digital</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_reduzido.png">
  <!--
      Última versão CSS compilada e minificada 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      Tema opcional  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      Última versão JavaScript compilada e minificada 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  -->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contrast.css">
    <link rel="alternate stylesheet" type="text/css" href="css/fontegrande.css" title="fontegrande" id="fontegrande"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      function setActiveStyleSheet(title,id) {
        var i, a, main;
        for(i=0;(a=document.getElementsByTagName("link")[i]);i++){
          if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && a.getAttribute("id") == id) {
            a.disabled = true;
            if(a.getAttribute("title") == title)
              a.disabled = false;
          }
        }
      }
    </script>
  </head>
  <body class="body contrast">
    <!-- MENU PADRÃO  -->
    <header>
    <a href="#main" aria-label="Ir para o conteúdo principal"></a>
      <nav class=" navbar navbar-default navbar-fixed-top">
        <ul class="acessivel">
            <!-- contraste -->
            <li><a href="#" id="altocontraste" accesskey="1" onclick="window.toggleContrast()" aria-label="Alto Contraste">Contraste</a></li>
            <!-- Fonte grande -->
            <li><a href="#" class="tamfonte glyphicon glyphicon-plus" accesskey="2" onclick="setActiveStyleSheet('fontegrande','fontegrande'); return false;" id="aumentar" title="Aumentar Tamanho do Texto" aria-label="Aumentar Tamanho do Texto"></a>
            </li>
            <!-- Fonte normal -->
            <li><a href="#" class="tamfonte glyphicon glyphicon-minus" accesskey="3" onclick="setActiveStyleSheet('style','fontegrande'); return false;" id="voltar" title="Tamanho do Texto Normal" aria-label="Tamanho do Texto Normal"></a></li>

          </ul>
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/OrientadorDigital2.png" alt="logo do portal direcionamento para página inicial" class="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <!-- <li class=""><a href="#">LINK<span class="sr-only">(current)</span></a></li> -->
              <li class="dropdown">
                <a href="#"   data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALTO CUSTO <span class="caret"></span></a><!-- retirado class="dropdown-toggle" -->
                <ul class="dropdown-menu">
                  <li><a href="alto_custo.php">Saiba Mais</a></li>
                  <li><a href="alto_custo.php#como_obter">Como Obter</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#"   data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USO CONTÍNUO<span class="caret"></span></a><!-- retirado class="dropdown-toggle" -->
                <ul class="dropdown-menu">
                  <li><a href="uso_continuo.php">Saiba Mais</a></li>
                  <li><a href="uso_continuo.php#como_obter">Como Obter</a></li>
                </ul>
              </li>
              <li><a href="quem_somos.php">QUEM SOMOS</a></li>
              <li><a href="contato.php">CONTATO</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>