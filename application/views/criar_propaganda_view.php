                                           
<?php echo form_open_multipart('criar_propaganda', 'class="needs-validation" novalidate');  ?>                                                
    <div class="container">
        <h1 class="mt-4 mb-3 text-center">
        <small>Criar Propaganda</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">Voltar</a>
        </li>
        <li class="breadcrumb-item active">Criar Propaganda</li>
      </ol>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label>Curso:</label>
            <input type="text" name="curso" class="form-control" placeholder="Curso que deseja cadastrar" value="<?php echo set_value ('curso'); ?>" required>
            <div class="invalid-tooltip">
                O campo Curso é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>O Que Vai Ter No Modal:</label>
            <input type="text" name="modal" class="form-control" placeholder="O Que Vai Ter No Modal" value="<?php echo set_value ('modal'); ?>" required >
            <div class="invalid-tooltip">
                O campo O Que Vai Ter No Modal é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Sobre da Home:</label>
            <input type="text" name="sobre" class="form-control" placeholder="Sobre da Home" value="<?php echo set_value ('sobre'); ?>" />
            <div class="invalid-tooltip">
                O campo Sobre da Home é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Implemento da Home:</label>
            <input type="text" name="implemento" class="form-control" placeholder="implemento da Home" value="<?php echo set_value ('implemento'); ?>" required />
            <div class="invalid-tooltip">
                O campo Implemento da Home é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Valor:</label>
            <input type="text" name="valor" class="form-control" placeholder="valor" value="<?php echo set_value ('valor'); ?>" required />
            <div class="invalid-tooltip">
                O campo valor é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label> Primeira informação:</label>
            <input type="text" name="sobre1" class="form-control" placeholder="primeira informação" value="<?php echo set_value ('sobre1'); ?>" required />
            <div class="invalid-tooltip">
                O campo primeira informação é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label> Segunda informação:</label>
            <input type="text" name="sobre2" class="form-control" placeholder="Segunda informação" value="<?php echo set_value ('sobre2'); ?>" required />
            <div class="invalid-tooltip">
                O campo Segunda informação é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label> Terceira informação:</label>
            <input type="text" name="sobre3" class="form-control" placeholder="Terceira informação" value="<?php echo set_value ('sobre3'); ?>" required />
            <div class="invalid-tooltip">
                O campo Terceira informação é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label> Quarta informação:</label>
            <input type="text" name="sobre4" class="form-control" placeholder="Quarta informação" value="<?php echo set_value ('sobre4'); ?>" required />
            <div class="invalid-tooltip">
                O campo Quarta informação é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Chamada para o modal:</label>
            <input type="text" name="chamada" class="form-control" placeholder="Chamada para o modal" value="<?php echo set_value ('chamada'); ?>" required />
            <div class="invalid-tooltip">
                O campo Chamada para o modal é Obrigatorio.
            </div>
        </div>
        <div class="form-group col-md-12">
            <label> Sobre o Curso:</label>
            <input type="text" name="sobrecurso" class="form-control" placeholder="Sobre o Curso" value="<?php echo set_value ('sobrecurso'); ?>" required />
            <div class="invalid-tooltip">
                O campo Sobre o Curso é Obrigatorio.
            </div>
        </div>
            <div class=" form-group col-md-12">
                <div class="form-group">
                    <label>Escolher Imagem:</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Imagem<input type="file" id="imgInp" name="fileimg" value="<?php echo set_value ('fileimg'); ?>">
                            </span>
                        </span>
                        <input type="text" class="form-control"  name="nomeimg" value="<?php echo set_value ('nomeimg'); ?>" required readonly>
                    </div>
                    <img id='img-upload'/>
                </div>
            </div>
    </div>
    <div class="mb-5 text-center">
            <button class="btn btn-primary " type="submit" title="Send Message">Criar Propaganda</button>
        </div>
</div>
</form>