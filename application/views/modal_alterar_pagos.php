<div class="modal fade <?php echo @$modal_alterar_pagos ;?>" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../alunos_pagos/alterar_usuario','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <?php if(isset($resposta['success']) && $resposta['success'] === FALSE) echo "<div class='alert alert-danger'>".$resposta['message']."</div>"; ?>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Nome:</label>
                             <input type="text" class="form-control" id="user_name" name="nome" value="<?php echo set_value('nome'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Email:</label>
                             <input type="email" class="form-control" id="user_email" name="email" value="<?php echo set_value('email'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Telefone Movel:</label>
                             <input type="text" class="form-control" id="inputTelefonemovel" name="telefonemovel" value="<?php echo set_value('telefonemovel'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Curso:</label>
                             <input type="text" class="form-control" id="inputcurso" name="curso" value="<?php echo set_value('curso'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Pagamento:</label>
                             <input type="text" class="form-control" id="inputpg" name="pg" value="<?php echo set_value('pg'); ?>">
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