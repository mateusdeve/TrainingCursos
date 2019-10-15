  <!-- Navigation -->
    <nav id="topbar" class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="color: white; background-color: rgba(0,0,0,0.8);">
      <div class="container">
        <a class="navbar-brand" href="#top"> <img src="assets/img/livros.png" style="width:20px; height:20px;"> TrainingCursos </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.4s">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.4s">
              <a class="nav-link" href="cadastro">Cadastro</a>
            </li>
            <li class="nav-item wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.4s">
              <a class="nav-link" href="certificado">Certificados</a>
            </li>
            <li class="nav-item wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="0.4s">
              <a class="nav-link" href="contato">Contato</a>
            </li>
            <?php if($sessao['logado'] === TRUE && $sessao['perfil'] == 'aluno'){ ?>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.4s">
                    <a class="nav-link" href="log">Aluno</a>
                </li>
            <?php } elseif($sessao['perfil'] == 'admin'){?>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.4s">
                    <a class="nav-link" href="admin" >Admim</a>
                </li>
            <?php } else{?>
            <li class="nav-item wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.4s">
              <a class="nav-link" href="login" >Login</a>
            </li>
            <?php }?>
            <?php if($sessao['logado'] === TRUE){ ?>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="0.4s">
                    <a class="nav-link" href="<?php echo base_url('login/sair');?>">Sair</a>
                </li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav>
    
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <img id="img-carousel" src="./assets/img/capa1.png" alt="First slide">
            <!--<div class="carousel-caption d-none d-md-block">
              
            </div>-->
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img id="img-carousel" src="./assets/img/capa4.png" alt="First slide">
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-size: cover;">
            <img id="img-carousel" src="./assets/img/cap2.png" alt="First slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

<script type="text/javascript">
  window.addEventListener( 'scroll', function(){
    var scroll = window.scrollY;
    if( scroll > 300 ){
      //console.log( document.getElementById('topbar').style )
      document.getElementById('topbar').style.top = '-60px';
    }
    else if( scroll <= 300 )
    {
      document.getElementById('topbar').style.top = '0px';
    }
  });
</script>