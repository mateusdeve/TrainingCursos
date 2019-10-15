<div class="container mt-5">
    <form class="needs-validation" action="<?php echo(base_url('cadastro')); ?>" method="post" novalidate>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active wow fadeInLeft"><h4>Cadastro de Aluno</h4></li>
      </ol>
                <div class="form-row md-5" id="nome1">
                     <div class="col-lg-3 ">
                        <img class="card-img-top wow bounce" src="assets/img/cadastro2.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nome:</label>
                                <input type="name" name='nome' value="<?php echo set_value ('nome'); ?>"class="form-control" id="inputName" placeholder="Nome" required>
                                <div class="invalid-tooltip">
                                    O campo nome é Obrigatorio.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Sobrenome:</label>
                                <input type="name" name='sobrenome' value="<?php echo set_value ('sobrenome'); ?>"class="form-control" id="inputSobre" placeholder="Sobrenome" required>
                                <div class="invalid-tooltip">
                                    O campo Sobrenome é Obrigatorio.
                                </div>

                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Telefone Movel:</label>
                                <input type="name" name='telefonemovel' value="<?php echo set_value ('telefonemovel'); ?>"class="form-control" id="inputTelefonemovel" placeholder="(00)00000-0000" required>
                                <div class="invalid-tooltip">
                                    O campo Telefone é Obrigatorio.
                                </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Telefone fixo:</label>
                                <input type="name" name='telefonefixo' value="<?php echo set_value ('telefonefixo'); ?>"class="form-control" id="inputTelefonefixo" placeholder="(00)00000-0000" required>
                                <div class="invalid-tooltip">
                                    O campo Telefone é Obrigatorio.
                                </div>
                            </div>
                          </div>
                         <div class="form-row">
                            <div class="form-group col-md-6" style="margin-top: 32px;">
                                <div class="input-group mb-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Tipo de Pessoa:</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="tipopessoa">
                                        <option value="Fisica">Fisica      </option>
                                        <option value="Juridica">Juridica  </option>
                                    </select>
                                    <div class="invalid-tooltip">
                                            O campo é Obrigatorio.
                                    </div>
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <label>CPF ou CNPJ:</label>
                                <input type="text" name='cpfcnpj' value="<?php echo set_value ('cpfcnpj'); ?>"class="form-control" id="inputCpfcnpj" placeholder="CPF ou CNPJ" required>
                                <div class="invalid-tooltip">
                                    O campo Cpf ou CNPJ é Obrigatorio.
                                </div>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>E-mail:</label>
                                <input type="email" name='email' value="<?php echo set_value ('email'); ?>" class="form-control" id="inputEmail" placeholder="E-mail" required>
                                <div class="invalid-tooltip">
                                    O campo E-mail é Obrigatorio.

                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>CEP:</label>
                                <input type="name" name='cep' value="<?php echo set_value ('cep'); ?>" class="form-control" id="inputCep" placeholder="CEP" required >
                                <div class="invalid-tooltip">
                                    O campo CEP é Obrigatorio.

                                </div>
                            </div>
                            <div class="form-group col-md-6" style="margin-top: 32px;">
                                <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/default.cfm" target="_blank" class="btn btn-outline-info" role="button" aria-pressed="true">Não sei meu CEP</a>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Cidade:</label>
                                <input type="name" name='cidade' value="<?php echo set_value ('cidade'); ?>" class="form-control" id="inputCidade" placeholder="Cidade" required>
                                <div class="invalid-tooltip">
                                    O campo Cidade é Obrigatorio.

                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Endereço:</label>
                                <input type="name" name='endereco' value="<?php echo set_value ('endereco'); ?>" class="form-control" id="inputEndereco" placeholder="Endereço" required>
                                <div class="invalid-tooltip">
                                    O campo Endereço é Obrigatorio.

                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Bairro:</label>
                                <input type="name" name='bairro' value="<?php echo set_value ('bairro'); ?>"class="form-control" id="inpuBairro" placeholder="Bairro" required>
                                <div class="invalid-tooltip">
                                    O campo Bairro é Obrigatorio.
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-12">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Curso desejado:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="curso">
                                <option value="Nr-10">Nr-10     </option>
                                <option value="Nr-12">Nr-12     </option>
                                <option value="Nr-18">Nr-18     </option>
                                <option value="Nr-26">Nr-26     </option>
                                <option value="Nr-35">Nr-35     </option>
                                <option value="Nr-33">Nr-33     </option>
                                <option value="SEP">SEP         </option>
                                <option value="EREX">EREX       </option>
                                <option value="Demanda">Demanda </option>
                                <option value="Eletricista Predial e Residencial">Eletricista Predial e Residencial </option>
                            </select>
                            <div class="invalid-tooltip">
                                    O campo Curso é Obrigatorio.
                            </div>
                        </div>
                        <div align="center">
                             <button  type="submit" class="btn btn-outline-primary mb-3 mt-4">Enviar</button>
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <h4 class="mt-3 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s" style="margin-left: 100px;">
                           <i>Como funciona o curso?</i>
                        </h4>
                        <h5 class="mt-4 wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
                           <i style="color: rgba(0, 0, 0, 0.5)"> 1° Faça sua matricula clicando no botão cadastro. </i>
                        </h5>
                        <h5 class="mt-4 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                            <i style="color: rgba(0, 0, 0, 0.5)"> 2° Apos sua matricula enviaremos o boleto para seu e-mail. </i>
                        </h5>
                        <h5 class="mt-4 wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="1s">
                           <i style="color: rgba(0, 0, 0, 0.5)"> 3° Após a confirmação do Pagamento você receberá um login e senha de acesso ao seu curso através da secretaria. </i>
                        </h5>
                        <h5 class="mt-4 mb-3 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1s">
                            <i style="color: rgba(0, 0, 0, 0.5)"> 4º A partir deste momento você já poder acessar o seu curso. </i>
                        </h5>
                        <h5 class="mt-4 mb-3 wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">
                            <i style="color: rgba(0, 0, 0, 0.5)"> 5º No final do curso será realizado uma prova para avaliação.</i>
                        </h5>
                        <h5 class="mt-5 mb-3 text-center wow fadeInRight" data-wow-delay="0.9s" data-wow-duration="1s">
                             <i style="color: rgba(0, 0, 0, 0.5)"> Os cursos de NR's 10, 12, 26, 33 e 35 serão ministrados por empresas e profissionais  Credenciados. </i>
                        </h5><br>
                        <div class="mt-5 mb-3 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.9s" align="center">
                             <img src="assets/img/pagseguro1.png" style="width: 50%; height: 50%; margin-top: -50px;">
                        </div>
                            
                            
                            
                        
                    </div>
                </div>
      </form>
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

      window.onload = scrollSmooth('cadastro','nome1');
    </script>