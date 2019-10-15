<div class="modal fade <?php echo @$modal_alterar_inscritos ;?>" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../alunos_inscritos/alterar_usuario','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <?php if(isset($resposta['success']) && $resposta['success'] === FALSE) echo "<div class='alert alert-danger'>".$resposta['message']."</div>"; ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Nome:</label>
                             <input type="name" class="form-control" id="inputnome" name="nome" value="<?php echo set_value('nome'); ?>">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Sobrenome:</label>
                             <input type="name" name='sobrenome' value="<?php echo set_value ('sobrenome'); ?>"class="form-control" id="inputSobre">
                         </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Telefone Movel:</label>
                             <input type="name" name='telefonemovel' value="<?php echo set_value ('telefonemovel'); ?>"class="form-control" id="inputTelefonemovel">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Telefone Fixo:</label>
                             <input type="name" name='telefonefixo' value="<?php echo set_value ('telefonefixo'); ?>"class="form-control" id="inputTelefonefixo">
                         </div>
                    </div>
                    <div class="row">     
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">CPF ou CNPJ:</label>
                             <input type="text" name='cpfcnpj' value="<?php echo set_value ('cpfcnpj'); ?>"class="form-control" id="inputCpfcnpj">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Email:</label>
                             <input type="email" name='email' value="<?php echo set_value ('email'); ?>" class="form-control" id="inputEmail">
                         </div>
                    </div>
                    <div class="row">     
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">CEP:</label>
                             <input type="name" name='cep' value="<?php echo set_value ('cep'); ?>" class="form-control" id="inputCep">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Cidade:</label>
                             <input type="name" name='cidade' value="<?php echo set_value ('cidade'); ?>" class="form-control" id="inputCidade">
                         </div>
                    </div>
                    <div class="row">     
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Endereço:</label>
                             <input type="name" name='endereco' value="<?php echo set_value ('endereco'); ?>" class="form-control" id="inputEndereco">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Bairro:</label>
                             <input type="name" name='bairro' value="<?php echo set_value ('bairro'); ?>"class="form-control" id="inpuBairro">
                         </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Curso desejado:</label>
                             <input type="name" name='curso' value="<?php echo set_value ('curso'); ?>"class="form-control" id="inpuCurso">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="recipient-name" class="col-form-label">Tipo de Pessoa:</label>
                             <input type="name" name='tipopessoa' value="<?php echo set_value ('tipopessoa'); ?>"class="form-control" id="inputTipopessoa">
                         </div>
                    </div>     


                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
        </div>
    </div>
</div>