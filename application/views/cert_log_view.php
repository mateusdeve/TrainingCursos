 <br>
 <div class="container-fluid mb-5 pb-5">

      <h1 class="mt-4 mb-3 text-center">
      </h1>
      <div class="table-responsive">
       <table class="display table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Link do Certificado</th>
                
        </thead>
        <tbody>
            <?php 
            if(isset($user_data)) {
                foreach($user_data as $row) {?>
                <tr>
                    <th scope="row">
                        <?php echo $row->codigo; ?>
                    </th>
                    <td>
                        <a href="<?php echo $row->link_certificado;?>" target="_blank">Clique aqui para vizualizar seu certificado</a>
                    </td>
                  
            <?php } }?>
                </tr>
        </tbody>
    </table>
</div>

    </div>