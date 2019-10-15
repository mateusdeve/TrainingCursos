<br>
 <div class="container">

      <h1 class="mt-4 mb-3 text-center">
        <small>Alunos Inadiplentes</small>
      </h1>
      <div class="table-responsive">
       <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone Movel</th>
                
                <th scope="col">Curso</th> <!--&nbsp; PARA PULAR LINHA.-->
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
                        <?php echo $row->email;?>
                    </td>
                    <td>
                        <?php echo $row->telefonemovel;?>
                    </td>
                    <td>
                        <?php echo $row->curso;?>
                    </td>
                  
                <?php } }?>
                </tr>
        </tbody>
    </table>
</div>

    </div>