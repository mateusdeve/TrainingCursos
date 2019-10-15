 <br>
 <div class="container mb-5">

      <h1 class="mt-4 mb-3 text-center">
        <small>Informar Pagamento</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">Voltar</a>
        </li>
        <li class="breadcrumb-item active">Pagamento</li>
      </ol>
        <div class="table-responsive">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Curso</th>

                    </tr>
                </thead>

                <tbody>
            <?php 
            if(isset($user_data)) {
                foreach($user_data as $row) {?>
                <tr>
                    <th scope="row">
                        <?php echo $row->id; ?>
                    </th>
                    <td>
                        <?php echo $row->nome;?>
                    </td>
                    <td>
                        <?php echo $row->sobrenome;?>
                    </td>
                    <td> 
                        <?php echo $row->email;?>
                    </td>
                    <td>
                        <?php echo $row->curso;?>
                    </td>
                  
            <?php } }?>
                </tr>
        </tbody>
                    <tr>
                        <form class="needs-validation" action="<?php echo(base_url('pagamento')); ?>" method="post" novalidate>
                            <th>
                                <input type="name" name='id_usuario' value="<?php echo set_value ('id_usuario'); ?>"class="form-control" id="inputCodigo" placeholder="Codigo do Aluno" required>
                            </th>
                            <td>
                                <input type="name" name='pg' value="<?php echo set_value ('pg'); ?>"class="form-control" id="inputPg" placeholder="R$ 00.00" required>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-outline-primary">Enviar</button>
                            </td>
                        </form>
                    </tr>
            </table>
        </div>
</div>