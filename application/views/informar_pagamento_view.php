<br>
 <div class="container mb-5">

      <h1 class="mt-4 mb-3 text-center">
        <small>Informar Pagamento</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">Voltar</a>
        </li>
        <li class="breadcrumb-item active">Informar pagamento</li>
      </ol>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"> Procurar Código do aluno </th>
                        <th scope="col">Ação</th> <!--&nbsp; PARA PULAR LINHA.-->

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form class="needs-validation" action="<?php echo(base_url('informar_pagamento')); ?>" method="post" novalidate>
                            <th>
                                <input type="name" name='codigo' value="<?php echo set_value ('codigo'); ?>"class="form-control" id="inputCodigo" placeholder="Codigo do Aluno" required>
                            </th>
                            <td>
                                <button type="submit" class="btn btn-outline-primary">Procurar</button>
                            </td>
                        </form>
                    </tr>
           
                </tbody>
            </table>
        </div>
</div>