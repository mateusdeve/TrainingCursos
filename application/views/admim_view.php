  <br>
  <br>
  <br>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 text-center wow fadeInUp" id="nome3">Admininstração</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item active wow fadeInLeft">Área Administrativa</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-12 mb-4  wow fadeInLeft">
          <div class="list-group">  
            <a href="informar_pagamento"      class="list-group-item text-center">Informar Pagamento</a>
            <a href="alunos_pagos"            class="list-group-item text-center" > Apresentar Alunos pagos ( Editar/Remover )</a>
            <a href="alunos_inscritos"        class="list-group-item text-center" > Alunos Interessados ( Verificar diariamente )</a>
            <a href="criar_login" class="list-group-item text-center" >Efetuar Matricula</a>
            <a href="apresentar_matricula"    class="list-group-item text-center" > Apresentar Alunos Matriculados ( Editar/Remover )</a>
            <a href="apresentar_login"        class="list-group-item text-center" > Apresentar Login ( Editar/Remover )</a>
            <a href="criar_certificado"       class="list-group-item text-center" > Criar código e link do certificado</a>
            <a href="apresentar_certificado"  class="list-group-item text-center" > Verificar certificado do aluno ( Editar/Remover )</a>
            <a href="criar_propaganda"        class="list-group-item text-center"> Criar Propaganda de Curso</a>
            <a href="cursos_cadastrados"      class="list-group-item text-center" > Cursos Cadastrados</a>
          </div> 
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
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

      window.onload = scrollSmooth('admim','nome3');
    </script>
