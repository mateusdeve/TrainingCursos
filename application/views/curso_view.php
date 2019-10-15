    <!-- Page Content -->
    <div class="container">

      <br>
      <br><!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 text-center wow fadeInUp" id="caiu">
        <small> <?php echo $curso->curso;?> </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item active wow fadeInLeft"><?php echo $curso->curso;?></li>
      </ol>
 
      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-4 mb-4 wow bounce" data-wow-delay="0.3s" data-wow-duration="1s">
          <div class="card h-100">
            <h3 class="card-header text-white" style="background-color:#5882FA">Valor</h3>
            <div class="card-body">
              <div class="display-4">R$<?php echo $curso->valor;?></div>
              <div class="font-italic"></div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo $curso->sobre;?>
              </li>
              <li class="list-group-item">Pague no Boleto</li>
              <li class="list-group-item">Entre em contato</li>
              <li class="list-group-item">Tel..: (61) 3711-1314 / 99853-1287 <img class="card-img-top" src="assets/img/waths.png" alt="" style="width:20px; height:20px;"></li>
              <li class="list-group-item">
                <a href="cadastro" class="btn btn-primary">Comprar Curso</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4 wow bounce" data-wow-delay="0.5s" data-wow-duration="1s">
          <div class="card card-outline-primary h-100">
            <h3 class="card-header text-white" style="background-color:#2E2EFE">Curso</h3>
            <div class="card-body">
              <div class="display-4">
                 <img class="card-img-top" src="assets/img/<?php echo $curso->imagem;?>" alt="">
              </div>
              <div class="font-italic"></div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo $curso->sobre1;?></li>
              <li class="list-group-item"><?php echo $curso->sobre2;?></li>
              <li class="list-group-item"><?php echo $curso->sobre3;?></li>
              <li class="list-group-item"><?php echo $curso->sobre4;?></li>
              <li class="list-group-item">
                
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4 wow bounce" data-wow-delay="0.7s" data-wow-duration="1s">
          <div class="card h-100">
            <h3 class="card-header text-white" style="background-color:#0000FF">Sobre o Curso</h3>
            <div class="">
              
           
            </div>
            <ul class="list-group list-group-flush">
              <div class="container">
                <div class="mt-4">
                  <?php echo $curso->sobrecurso;?>
                </div>
                <div align="center">
                  <a class="btn btn-primary mt-5" href="home">Voltar</a>
                </div>
                  
              </div>
              
            </ul>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <script type="text/javascript">
      function scrollSmooth(dir, id)
      {
        var url = window.location.pathname.split('/');
        if(url[url.length - 1] == dir)
        {
          var offset = document.getElementById(id).offsetTop;
          window.scroll({
            top: offset,
            behavior: 'smooth',
          });
        }
      }

      window.onload = scrollSmooth('curso','caiu');
    </script>