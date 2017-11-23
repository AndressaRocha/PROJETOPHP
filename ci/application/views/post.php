<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CADASTRO DE AULA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url(); ?>assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?= base_url(); ?>assets2/https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='<?= base_url(); ?>assets2/https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets2/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Bem vindo(a)</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="feed.php">Feed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aula.php">Cadastre uma aula</a>
            </li>
            <li class="nav-item">
              <a href="/ci/index.php/logout/">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?= base_url(); ?>assets2/img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Cadastre uma aula</h1>
              <span class="subheading">Tem um tempo disponivel? Que tal ensinar um aluno? </span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Preencha os campos com os dados da sua aula, assim que o cadastro for finalizado sua aula estará disponivel no feed para todos os usuarios.</p>
          
          <form action="/ci/index.php/post/cadastrarAula/" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Titulo</label>
                <input type="text" class="form-control" placeholder="Titulo" name="titulo" required data-validation-required-message="Preencha o tutilo">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="text" class="form-control" placeholder="disciplina" name="disciplina" required data-validation-required-message="Preencha a disciplina">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Data</label>
                <input type="date" class="form-control" placeholder="Data" name="data" required data-validation-required-message="Preencha a data">
                <input type="time" class="form-control" placeholder="Hora" name="hora" required data-validation-required-message="Preencha a hora">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Descrição</label>
                <textarea rows="5" class="form-control" placeholder="Descricao" name="descricao" required data-validation-required-message="Preencha a descrição."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="cadastrar">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets2/js/jqBootstrapValidation.js"></script>
    <script src="assets2/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets2/js/clean-blog.min.js"></script>

  </body>

</html>
