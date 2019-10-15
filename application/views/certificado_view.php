
<div class="container">
              <div class="d-flex justify-content-center h-100 mt-5 wow fadeInLeft">
                  <h2>Insira o codigo do seu certificado</h2>
              </div>


<form class="needs-validation wow swing" action="<?php echo(base_url('certificado')); ?>" method="post" novalidate>
          <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="busca" value="<?php echo set_value ('busca');?>" placeholder="Pesquise aqui seu certificado" id="text_field" required>
              <button type="submit" class="btn btn-primary" id="submit"><i class="fas fa-search"></i></button>
            </div> 
            <div class="invalid-tooltip">
              Insira um codigo valido
            </div>
          </div>
          <br>
      </form>
        <div class="container">
            <div id="search_content">         
            <!-- está la no validacao.js -->
            </div>

        </div>
</div>