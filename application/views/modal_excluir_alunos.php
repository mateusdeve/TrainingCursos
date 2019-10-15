<div class="modal fade" id="remove_confirmation_modal2" tabindex="-1" role="dialog" aria-labelledby="remove_confirmation_modal_label2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="remove_confirmation_modal_label">Deseja Mesmo Remover Essa Matricula?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Ao Clicar em Remover Você Estara Apenas Removendo a Matricula não Excluindo o Login!<br>
                Para Excluir o login vé em <a href="apresentar_login">Apresentar Login</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <?php echo form_open('../apresentar_matricula/excluir_usuario'); ?>
                <input type="hidden" name="id_usuario" />
                <button type="submit" class="btn btn-danger">Remover</button>
                </form>
            </div>

        </div>
    </div>
</div>