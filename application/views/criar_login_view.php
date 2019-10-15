<div class="container mt-5">
    <form class="needs-validation" action="<?php echo(base_url('criar_login')); ?>" method="post" novalidate>
        <h1 class="mt-4 mb-3 text-center">
            <small>Matricular Aluno</small>
        </h1>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <a href="admin">Voltar</a>
            </li>
            <li class="breadcrumb-item active">Matricula</li>
        </ol>
        <div class="form-row">
            <div class="input-group  col-md-6 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Nome do Aluno:</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="nome">
                    <option value="">Escolha Um Aluno já Cadastrado</option>
                <?php 
                    if(isset($user_data)) {
                        foreach($user_data as $row) {?>
                            <option value="<?php echo $row->id?>"><?php echo $row->nome;?> <?php echo $row->sobrenome;?></option>

                    <?php } }?>
                </select>
                <div class="invalid-tooltip">
                    O campo Curso é Obrigatorio.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Login:</label>
                <input type="name" name='login' value="<?php echo set_value ('login'); ?>"class="form-control" id="inputLogin" placeholder="Login" required>
                <div class="invalid-tooltip">
                    O campo Login é Obrigatorio.
                </div>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-6">
                <label>Senha:</label>
                <input type="password" name='senha' value="<?php echo set_value ('senha'); ?>"class="form-control" id="inputSenha" placeholder="Senha" required>
                <div class="invalid-tooltip">
                    O campo Senha é Obrigatorio.
                </div>
            </div>
        </div>
         <div class="form-row">
             <div class="input-group  col-md-6">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Curso Desejado:</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="curso">
                    <option value="">Escolha Um Curso</option>
                    <?php 
                    if(isset($link)) {
                        foreach($link as $row) {?>
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
                    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                </div>
            </div>
      </form>
  </div>