<br>
<div class="container mb-5 pb-5 text-center">
    <div class="mb-3">
        <h1 class="wow fadeInUp">Cursos Matriculados</h1>
        <br>
    </div>
    <div class="row justify-content-center align-items-center" id="row">
        <?php 

            if(isset($user_data)) {
                foreach($user_data as $row) {?>

                    <div class="col-lg-3 mb-3" >
                        <div class="card text-center wow fadeInRight autura"  data-wow-delay="0.3s" data-wow-duration="0.4s">
                            <img class="card-img-top wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.4s" src="assets/img/img-log.jpg?>" alt="">
                            <div class="card-body wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                                <h4 class="card-title"><?php echo $row->curso;?> </h4>
                                <h6 class ="card-subtitle mt-2 mb-4 text-dark"> <?php echo $row->login;?></h6>
                            </div>
                            <div class="card-footer wow flipInX" data-wow-delay="0.7s" data-wow-duration="0.8s" id="paginationLocationAll">
                              <!-- Button para baixar o curso -->
                                <a class="btn btn-primary" href="<?php echo $row->endereco_link;?>" role="button">
                                    Baixar Curso
                                </a>
                            </div>
                        </div>
                    </div>

        <?php } }?>
    </div>
</div>
     