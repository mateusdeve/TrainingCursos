
<br>
 <div class="container-fluid mb-5">

      <h1 class="mt-4 mb-3 text-center">
        <small>Alunos Inscsritos</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">Voltar</a>
        </li>
        <li class="breadcrumb-item active">Alunos inscritos ( interessados )</li>
      </ol>
      <div class="table-responsive">
       <table id="table" class="display table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Celular</th>
                <th scope="col">Curso</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Ações</th> <!--&nbsp; PARA PULAR LINHA.-->
            </tr>
        </thead>
        <tbody>
            <?php 
            if(isset($user_data)) {
                foreach($user_data as $row) {?>
                <tr>
                    <th>
                        <?php echo $row->id; ?>
                    </th>
                    <td>
                        <?php echo $row->nome; ?> <?php echo $row->sobrenome;?>
                    </td>
                    <td>
                        <?php echo $row->email;?>
                    </td>
                    <td>
                        <?php echo $row->telefonemovel;?>
                    </td>
                    <td>
                        <?php echo $row->curso;?>
                    </td>
                    <td>
                        <?php echo $row->data;?>
                    </td>
                    <td>
                        <?php echo $row->hora;?>
                    </td>
                    <td>
                        
                        <button class="btn btn-outline-secondary btn-alterar" data-toggle="modal" data-user='<?php echo json_encode($row);?>'><i class="fas fa-pencil-alt"></i></button><span class="pr-3"></span>

                        <button class="btn btn-outline-danger btn-remover" data-toggle="modal" data-target="#remove_confirmation_modal"  data-id="<?php echo $row->id;?>"><i class="fas fa-trash"></i></button>
                    </td>
                  
                <?php } }?>
                </tr>
        </tbody>
    </table>
</div>

    </div>