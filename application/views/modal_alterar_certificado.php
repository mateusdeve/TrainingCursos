<div class="modal fade <?php echo @$modal_alterar_certificado ;?>" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open('../apresentar_certificado/alterar_usuario','class="needs-validation" novalidate') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <?php if(isset($resposta['success']) && $resposta['success'] === FALSE) echo "<div class='alert alert-danger'>".$resposta['message']."</div>"; ?>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">codigo:</label>
                             <input type="text" class="form-control" id="inputcodigo" name="codigo" value="<?php echo set_value('codigo'); ?>">
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Link para o certificado:</label>
                             <input type="text" class="form-control" id="inputlink" name="link_certificado" value="<?php echo set_value('link_certificado'); ?>">
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