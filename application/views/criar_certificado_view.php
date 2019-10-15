<div class="container mt-3">
    <form class="needs-validation" action="<?php echo(base_url('criar_certificado')); ?>" method="post" novalidate>
        <h1 class="mt-4 mb-3 text-center">
            <small>Certificado do aluno</small>
        </h1>
        <br>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <a href="admin">Voltar</a>
            </li>
            <li class="breadcrumb-item active">Criar o código do aluno</li>
        </ol>
        <div class="form-row">
            <div class="form-group col-md-6"">
                <label>Código:</label>
                <input type="name" name='codigo' value="<?php echo set_value ('codigo'); ?>"class="form-control" id="inputLogin" placeholder="codigo" required>
                <div class="invalid-tooltip">
                    O campo codigo é Obrigatorio.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Link para o certificado:</label>
                <input type="text" name='link_certificado' value="<?php echo set_value ('link_certificado'); ?>"class="form-control" id="inputlink" placeholder="www.exemplo.coom.br" required>
                <div class="invalid-tooltip">
                    O campo link para o certificado é Obrigatorio.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group  col-md-6 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Nome do Aluno:</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="nome">
                    <option value="">Escolha Um Aluno já Cadastrado</option>
                <?php 
                    if(isset($listar_cadastro)) {
                        foreach($listar_cadastro as $row) {?>
                            <option value="<?php echo $row->id?>"><?php echo $row->nome;?> <?php echo $row->sobrenome;?></option>

                    <?php } }?>
                </select>
                <div class="invalid-tooltip">
                    O campo Curso é Obrigatorio.
                </div>
            </div>
        </div>
        <div class="form-row">
             <div class="input-group  col-md-6">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Curso do Certificado:</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="curso">
                    <option value="">Escolha Um Curso</option>
                    <?php 
                    if(isset($curso)) {
                        foreach($curso as $row) {?>
                            <option value="<?php echo $row->id?>"><?php echo $row->curso ?></option>

                    <?php } }?>
                </select>
                <div class="invalid-tooltip">
                    O campo Curso é Obrigatorio.
                </div>
            </div>
        </div>
        <div class="form-row ml-1 mt-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Criar</button>
                </div>
            </div>
      </form>
  </div>