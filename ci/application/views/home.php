<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Manual do aluno </title></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">#PartiuEstudar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
          <form action="/projetophp/ci/index.php/aluno/auth" method="post" class="formulario">
            <label class="form-login">Nome: </label><input type="text" name="nome"/>
            <label class="form-login">E-mail: </label> <input type="email" name="email"/>
            <input type="submit" value="Login" class="btn-primary"/>
        </form>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>#PartiuEstudar</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">O #PartiuEstudar é um sistema que permite aos alunos, uma troca de conteúdo. Onde um aluno pode oferecer uma aula para outros alunos. </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Sobre</a>
          </div>
        </div>
      </div>
    </header>

 <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Motivos para usar o #PartiuEstudar</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Ajude seus amigos</h3>
              <p class="text-muted mb-0">Entre como professor, e ajude quem está precisando</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Onde quiser</h3>
              <p class="text-muted mb-0">Encontre um professor e comece agora mesmo!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Nas suas horas vagas</h3>
              <p class="text-muted mb-0">Você pode estudar quando quiser, só basta encontrar um professor disponível.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Estude o que você realmente quer</h3>
              <p class="text-muted mb-0">Escolha o que você quer estudar, e divirta-se!</p>
            </div>
          </div>
        </div>
      </div>
          
    </section>
    
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Cadastre-se</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Opa, partiu fazer seu cadastro! Preecha com seus dados pessoais o formulário a baixo</p>
            <div>
                <?= $msg ?>
            </div>
             <form action="/ci/index.php/usuario/cadastro/" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
              
                  <input type="text" class="form-control" placeholder="Nome" id="nome" required data-validation-required-message="Preencha o nome">
                <p class="help-block text-danger"></p>
                 
                  <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Preencha o email">
                <p class="help-block text-danger"></p>
                
                  <input type="email" class="form-control" placeholder="ConfEmail" id="confemail" required data-validation-required-message="Invalido!">
                <p class="help-block text-danger"></p>
                
                  <input type="password" class="form-control" placeholder="Senha" id="senha" required data-validation-required-message="Preencha a senha">
                <p class="help-block text-danger"></p>
                
                  <input type="password" class="form-control" placeholder="ConfSenha" id="confsenha" required data-validation-required-message="Invalido!">
                <p class="help-block text-danger"></p>
                
              </div>
            </div>
             <button>OK</button>
          </form>
            
          </div>
        </div>
      </div>
    </section>
    
   <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">

          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/creative.min.js"></script>

  </body>

</html>
