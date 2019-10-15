 <br>
 <div class="container-fluid mb-5">

      <h1 class="mt-4 mb-3 text-center">
        <small>Cursos Cadasrados</small>
      </h1>
      <br>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">Voltar</a>
        </li>
        <li class="breadcrumb-item active">Apresentar Cursos</li>
      </ol>
      <div class="table-responsive">
       <table id="table" class="display table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Modal</th>
                <th scope="col">Curso</th>
                <th scope="col">Sobre</th>
                <th scope="col">Implemento</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th> <!--&nbsp; PARA PULAR LINHA.-->
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
                        <?php echo $row->modal; ?>
                    </td>
                    <td>
                        <?php echo $row->curso;?>
                    </td>
                    <td>
                        <?php echo $row->sobre;?>
                    </td>
                    <td>
                        <?php echo $row->implemento;?>
                    </td>
                    <td>
                        <?php echo $row->valor;?>
                    </td>
                    <td>
                        
                        <button class="btn btn-outline-secondary btn-alterar" data-toggle="modal" data-user='<?php echo json_encode($row);?>' ><i class="fas fa-pencil-alt"></i></button><span class="pr-3"></span>

                        <button class="btn btn-outline-primary btn-img" data-toggle="modal" data-user='<?php echo json_encode($row);?>' ><i class="far fa-image"></i></button><span class="pr-3"></span>

                        <button class="btn btn-outline-danger btn-remover" data-toggle="modal" data-target="#remove_confirmation_modal_cursos" data-id="<?php echo $row->id;?>"><i class="fas fa-trash"></i></button>
                    </td>
                  
                <?php } }?>
                </tr>
        </tbody>
    </table>
</div>

    </div>