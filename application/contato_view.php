    <!-- Page Content -->
    <div class="container">
<br>
<br>
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 text-center" id="nome2">
        <small>Fale conosco</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home">Home</a>
        </li>
        <li class="breadcrumb-item active">Contato</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        
        <div class="col-lg-8 mb-4">
          <div class="table-responsive">
          <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1141.370428609816!2d-47.89357931930275!3d-15.798827573270888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae902984b63%3A0x8db22fbfdefbb234!2sEdificio+Assis+Chateabriand!5e0!3m2!1spt-BR!2sbr!4v1544633499690" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalhes do contato</h3>
          <p>
            SRTVS QD.701 Cj.L Lt.38 Bi.01 SL 717 Parte A118
            <br>
            <br>
            Edifício Assis Chateaubriand - Asa Sul - Brasilia
          </p>
          <p>
            <h6>Telefone Movel: (61)99853-1287</h6> 
            <br>
            <h6>Telefone Fixo: (61)3711-1314</h6>
          </p>
          <p>
            <h6>Email: <a href="trainingcursos@gmail.com">trainingcursos@gmail.com
            </a></h6>
          </p>
          <p>
            <h7 title="Hours">Horário de funcionamento do Escritorio</h7>: segunda á sexta : 9:00 AM a 5:00 PM
          </p>
        </div>
      </div>
     <br><br>
    </div>
    <!-- /.container -->
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

      window.onload = scrollSmooth('contato','nome2');
    </script>