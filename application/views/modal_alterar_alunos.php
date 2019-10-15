<div class="modal fade <?php echo @$modal_alterar_alunos ;?>" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../apresentar_matricula/alterar_usuario','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <?php if(isset($resposta['success']) && $resposta['success'] === FALSE) echo "<div class='alert alert-danger'>".$resposta['message']."</div>"; ?>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Login:</label>
                             <input type="text" class="form-control" id="inputlogin" name="login" value="<?php echo set_value('login'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Senha:</label>
                             <input type="text" class="form-control" id="inputsenha" name="senha" value="<?php echo set_value('senha'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Curso:</label>
                             <input type="text" class="form-control" id="inputcurso" name="curso" value="<?php echo set_value('curso'); ?>" disabled>
                         </div> 
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Perfil:</label>
                             <input type="text" class="form-control" id="inputperfil" name="perfil" value="<?php echo set_value('perfil'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Data:</label>
                             <input type="text" class="form-control" id="inputdata" name="data" value="<?php echo set_value('data'); ?>" disabled>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Hora:</label>
                             <input type="text" class="form-control" id="inputhora" name="hora" value="<?php echo set_value('hora'); ?>" disabled>
                         </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ok</button>
                </div>
                </form>
        </div>
    </div>
</div>