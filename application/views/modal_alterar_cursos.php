<div class="modal fade <?php echo @$modal_alterar_alunos ;?>" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../cursos_cadastrados/alterar_usuario','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <?php if(isset($resposta['success']) && $resposta['success'] === FALSE) echo "<div class='alert alert-danger'>".$resposta['message']."</div>"; ?>
                    <div class="row">
                        <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Modal:</label>
                             <input type="text" class="form-control" id="inputModal" name="modal" value="<?php echo set_value('modal'); ?>">
                         </div>
                         <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Curso:</label>
                             <input type="text" class="form-control" id="inputcurso" name="curso" value="<?php echo set_value('curso'); ?>">
                         </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Sobre:</label>
                             <input type="text" class="form-control" id="inputsobre" name="sobre" value="<?php echo set_value('sobre'); ?>">
                         </div>
                         <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Implemento:</label>
                             <input type="text" class="form-control" id="inputimplemento" name="implemento" value="<?php echo set_value('implemento'); ?>">
                         </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Valor:</label>
                             <input type="text" class="form-control" id="inputvalor" name="valor" value="<?php echo set_value('valor'); ?>">
                         </div>
                         <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Primeira Informação:</label>
                             <input type="text" class="form-control" id="inputsobre1" name="sobre1" value="<?php echo set_value('sobre1'); ?>">
                         </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Segunda Informação:</label>
                             <input type="text" class="form-control" id="inputsobre2" name="sobre2" value="<?php echo set_value('sobre2'); ?>">
                         </div>
                         <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Terceira Informação:</label>
                             <input type="text" class="form-control" id="inputsobre3" name="sobre3" value="<?php echo set_value('sobre3'); ?>">
                         </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Quarta Informação:</label>
                             <input type="text" class="form-control" id="inputsobre4" name="sobre4" value="<?php echo set_value('sobre4'); ?>">
                         </div>
                         <div class="form-group col-6">
                             <label for="recipient-name" class="col-form-label">Chamada para o modal:</label>
                             <input type="text" class="form-control" id="inputchamada" name="chamada" value="<?php echo set_value('chamada'); ?>">
                         </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                             <label for="recipient-name" class="col-form-label">Sobre o Curso:</label>
                             <input type="text" class="form-control" id="inputsobrecurso" name="sobrecurso" value="<?php echo set_value('sobrecurso'); ?>">
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