<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feed</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url(); ?>assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets2/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/ci/index.php/feed/">Pesquisar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ci/index.php/feed/dashboard">Feed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ci/index.php/post/">Cadastre uma aula</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ci/index.php/logout/">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?= base_url(); ?>assets2/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>PESQUISAR</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Preencha o campo com o nome da disciplina que deseja pesquisar.</p>
          
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Disciplina</label>
                <input type="text" class="form-control" placeholder="Disciplina" id="disciplina required data-validation-required-message="Preencha a disciplina">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="pesquisar">Pesquisar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Main Content -->
    <div class="container">
      
       <!-- $posts não está vazio? -->
      <?php if(!empty($posts)) { ?>
      
        <?php foreach($posts as $post){ ?>
        
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
              <h2 class="post-title" style="text-transform: capitalize;"><?php echo $post->titulo; ?> da <?php echo $nome; ?></h2>
              
                <p><?php echo $post->disciplina; ?></p> 
                <p><?php echo $post->data; ?></p> 
                <p><?php echo $post->hora; ?></p> 
                <p><?php echo $post->descricao; ?></p> 
            </div>
            </div>
          </div>
          
        <?php } ?>
        
      <?php } ?>
      
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
            <p class="copyright text-muted">Copyright - <a href="/ci/index.php/modalExcluir/">Excluir Sua Conta</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets2/js/clean-blog.min.js"></script>

  </body>
</html>