<div class="modal fade" id="remove_confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="remove_confirmation_modal_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="remove_confirmation_modal_label">Deseja mesmo remover este cadastro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Click em remover para continuar!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <?php echo form_open('../alunos_inscritos/excluir_usuario'); ?>
                <input type="hidden" name="id_usuario" />
                <button type="submit" class="btn btn-danger">Remover</button>
                </form>
            </div>

        </div>
    </div>
</div>