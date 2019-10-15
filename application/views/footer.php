<div
      onclick="window.location.href = 'https://api.whatsapp.com/send?phone=5561998531287&text=Ol%C3%A1%2C%20somos%20a%20TrainingCursos%20Como%20podemos%20ajuda-lo%20%3F' "
      target="_blank"
      onmouseleave="mouseout()"
      onmouseover="mouseover()" 
      data-editable="" 
      id="whp"  
       
      class="fixed_button"
    >
      <span id="whp-text">Fale conosco</span>
      <img 
        id="whp-img"
        src="assets/img/wap.png" 
        style="height: 25px;width: 25px;">
    </div>
    <script type="text/javascript">
      
      function mouseover(){
        var whatsapp = document.getElementById('whp');
        whatsapp.style.width = "170px";
        whatsapp.addEventListener("transitionend", function(){
          document.getElementById('whp-text').style.display = "inline-block";
          time_out = setTimeout( function(){
            document.getElementById('whp-text').style.opacity = "1";
            clearTimeout( this );
          }, 1 );
        });
      }

      function mouseout(){
        var whatsapp = document.getElementById('whp');
        whatsapp.style.width = "40px";
        document.getElementById('whp-text').style.display = "none";
        document.getElementById('whp-text').style.opacity = "0";
        whatsapp.addEventListener("transitionend", function(){

          document.getElementById('whp-text').style.opacity = "0";
          document.getElementById('whp-text').style.display = "none";
        });
     
      }
    </script>

<footer class="page-footer font-small unique-color-dark" style="background-color:#1a1a1a;color: #ffffff!important">

    <div style="background-color:#151515;">
      <div class="container">
        <div class="row py-3 d-flex align-items-center">
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h5 class="mb-0"></h5>
          </div>
          <div class="col-md-6 col-lg-7 text-center text-md-right">
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google -->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
        </div>
      </div>
    </div>

    <div class="container text-center text-md-left mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
             <h6 class="text-uppercase font-weight-bold">TrainingCursos &nbsp;&nbsp;</h6>
           <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            Desenvolvendo e elaborando cursos de qualidade para o crescimento dos colaboradores.<br><br>
            Professores profissionais e empresas credenciadas<br><br>
            Lei do curso livre : LDB 9.394/96 <br>

        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Alguns Clientes </h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="text-white" href="http://www.nsoftware.com.br">N.Software</a>
          </p>
          <p>
            <a class="text-white" href="http://redeenergiza.com/">Energiza</a>
          </p>
          <p>
            <a class="text-white" href="http://www.socialmidiaoficial.com.br/">Imobiliária 1.0</a>
          </p>
          <p>
            <a class="text-white" href="http://www.drenergia.net.br/">Dr.Energia</a>
          </p>
          <p>
            <a class="text-white" href="https://engenergia.com.br/">Eng Energia</a>
          </p>

        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Contato</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         
          <p>
            Edifício Assis Chateaubriand - Asa Sul - Brasilia<br><br>
            <a href="tel:(61) 99853-1287" style="color: white;">Telefone Movel: (61) 99853-1287</a>&nbsp;<img class="card-img-top" src="assets/img/waths.png" alt="" style="width:17px; height:17px;"><br><br>
            <a href="tel:(61) 3711-1314" style="color: white;">Telefone Fixo: (61) 3711-1314</a><br><br>
            <a href="mailto: Plataformatrainingcursos@gmail.com" style="color: white;">Plataformatrainingcursos@gmail.com</a> </p>

        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <img src="assets/img/abed.png" style="width: 260px; height: 160px; margin-top: -10px;">
          <img src="assets/img/pagseguro.png" style="width: 300px; height: 100px; ">
        </div>
      </div>

    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a class="text-white" href="http://www.trainingcursos.com.br/home">TrainingCursos.com.br</a><br>
      <!-- Button trigger modal -->
    <a href="" data-toggle="modal" data-target="#exampleModalPrivacidade">
      Termos de Uso
    </a>

<!-- Modal -->
<div class="modal fade" style="color:black;" id="exampleModalPrivacidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelok" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelok">Termos de Privacidade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="justify">
      Termos e Condições de Compra e Venda de Training Cursos, com sede na Ed.
      Assis Chateaubriand - Quadra 701, Via W3 Sul, sala 726,sala 728 - Asa Sul
      - CEP 70340-906, doravante denominada simplesmente Training Cursos, e, de
      outro lado, o cliente Training Cursos, qualificado no momento da compra dos
      produtos Training Cursos, doravante denominado simplesmente Cliente.<br>

      Considerando que a Training Cursos realiza venda de produtos e serviços pela internet;
      Considerando o interesse do Cliente na compra dos produtos oferecidos pela Training Cursos
      ("Produtos") em seus canais de venda; O presente contrato tem por finalidade estabelecer as 
      condições gerais de uso e compra de produtos e serviços do cliente do site Training Cursos.<br>
      I. Confidencialidade: é de responsabilidade da Training Cursos a preservação da confidencialidade
      de todos os dados e informações fornecidos pelo Cliente no processo de compra. A segurança do site
      é auditada diariamente e garantida contra a ação de hackers.<br>
      II. Serviço de Atendimento ao Cliente (SAC): O cliente dispõe desse serviço para sanar suas dúvidas, 
      solucionar eventuais solicitações ou reclamações a respeito do seu pedido ou de qualquer conteúdo 
      disponibilizado no site. O SAC poderá ser acionado por meio de telefone ou de formulário do site.<br>
      III. Política de entrega: o prazo para entrega dos Produtos é informado durante o procedimento de 
      compra, contabilizado em dias úteis. As entregas, se produtos físicos, são realizadas de segunda a 
      sexta-feira, das 8h às 22h. Excepcionalmente, algumas entregas de Produtos podem ocorrer aos sábados, 
      domingos e feriados.<br>
      IV. Direito de arrependimento: ao Cliente será facultado o exercício do direito de arrependimento da 
      compra, com a finalidade de devolução do Produto, hipótese na qual deverão ser observadas as seguintes 
      condições: o prazo de desistência da compra do produto é de até 7 (sete) dias corridos, a contar da data 
      do recebimento; em caso de devolução, o produto deverá ser devolvido à Training Cursos na embalagem original, 
      acompanhado do DANFE (Documento Auxiliar da Nota Fiscal Eletrônica), do manual e de todos os seus acessórios.<br>
      IV.I - O Cliente deverá solicitar a devolução através do Serviço de Atendimento ao Cliente (SAC) ou
      diretamente através do formulário de contato do site, acrescentando no corpo da mensagem o tópico  
      "cancelar pedido". As despesas decorrentes de coleta ou postagem do Produto serão custeadas pela 
      Training Cursos.<br>
      IV.II - Após a chegada do produto ao Centro de Distribuição, a Training Cursos verificará se as 
      condições supra citadas foram atendidas. Em caso afirmativo, providenciará a restituição no valor 
      total da compra.<br>
      IV.III - Em compras com cartão de crédito a administradora do cartão será notificada e o estorno 
      ocorrerá na fatura seguinte ou na posterior, de uma só vez, seja qual for o número de parcelas utilizado 
      na compra. O prazo de ressarcimento e, ainda, a cobrança das parcelas remanescentes após o estorno 
      integral do valor do Produto no cartão de crédito do Cliente realizado pela Training Cursos, é de 
      responsabilidade da administradora do cartão. Na hipótese de cobrança de parcelas futuras pela 
      administradora do cartão, o Cliente não será onerado, vez que a Training Cursos, conforme mencionado 
      acima, realiza o estorno do valor integral do Produto em uma única vez, sendo o crédito referente ao 
      estorno concedido integralmente pela administradora do cartão na fatura de cobrança subsequente ao mês 
      do cancelamento.<br>
      IV.IV - Em compras pagas com boleto bancário ou débito em conta, a restituição será efetuada por meio 
      de depósito bancário, em até 10 (dez) dias úteis, somente na conta corrente do(a) comprador(a), que 
      deve ser individual. É necessário que o CPF do titular da conta corrente.

      </div>
    </div>
  </div>
</div>
    </div>

  </footer>
  <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url('assets/vendor/jquery/jquery.min.js'))?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo(base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- animate -->
    <script src="<?php echo(base_url('assets/js/main.js')); ?>"></script>
    <script src="<?php echo(base_url('assets/js/wow.js')); ?>"></script>

    <!-- datatables -->
    <script src="<?php echo(base_url('assets/js/datatables.min.js')); ?>"></script>

    <?php
         if(isset($js)){
             foreach($js as $var){?>
                 <script src="<?php echo(base_url('assets/js/'.$var.'.js')); ?>"></script>
          <?php   }
         } ?>
  </body>

</html>