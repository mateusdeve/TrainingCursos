<div class="modal fade" id="remove_confirmation_modal2" tabindex="-1" role="dialog" aria-labelledby="remove_confirmation_modal_label2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="remove_confirmation_modal_label">Deseja Mesmo Excluir de vez Esse Login?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Click em Remover Para Continuar !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <?php echo form_open('../apresentar_login/excluir_usuario'); ?>
                <input type="hidden" name="id_usuario" />
                <button type="submit" class="btn btn-danger">Remover</button>
                </form>
            </div>

        </div>
    </div>
</div>