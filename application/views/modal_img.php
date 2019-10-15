 <div class=" mt-5 modal fade <?php echo @$modal_img;?>" id="update_modalimg" tabindex="-1" role="dialog" aria-labelledby="update-modal-title" aria-hidden="true">
    <br><br><br><br>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
              <?php echo form_open_multipart('../cursos_cadastrados') ?>
              <input type="hidden" name="id" />
              <input type="hidden" name="action" value="alterar"/>
                <div class="modal-body">
                    <div class="row">  
                    <div class="form-group col-lg-12">
                        <label>Escolher Imagem</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Imagem<input type="file" id="imgInp" name="fileimg" value="<?php echo set_value('fileimg');?>">
                                </span>
                            </span>
                            <input type="text" class="form-control" id="inputnomeimg" name="nomeimg" value="<?php echo set_value('nomeimg'); ?>" required readonly>
                        </div>
                        <img id='img-upload'/>
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