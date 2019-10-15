<div style="">
 <div id="login">
        <div class="container mb-5 pb-5" style="padding-top: 100px;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div class="login-box col-md-12">
                         <form class="needs-validation" action="<?php echo(base_url('login')); ?>" method="post" novalidate>
                            <h3 class="text-center wow fadeInUp"><img src="assets/img/livros.png" style="width: 40px; height: 40px;"> TrainingCursos</h3>
                            <div class="form-group">
                                <label for="username" class="wow wobble">Login:</label>
                                <br>
                                <input type="text" name="user_login" id="user_login" class="form-control wow fadeInLeft" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <label for="password" class="wow wobble">Senha:</label>
                                <br>
                                <input type="password" name="user_password" id="user_password" class="form-control wow fadeInRight" placeholder="Senha">
                            </div>
                            <?php if(isset($resposta['success']) && $resposta['success'] === FALSE) echo "<div class='alert alert-danger'>".$resposta['message']."</div>"; ?>
                            <div class="form-group" style="margin-left: 43%;">
                                <button type="submit" class=" wow jackInTheBox btn btn-primary" id="nomelogin" >Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        
    </div>
</div>
    <script type="text/javascript">
      function scrollSmooth(dir, id)
      {
        var url = window.location.pathname.split('/');
        if(url[url.length - 1] == dir)
        {
          var offset = document.getElementById(id).offsetTop;
          window.scroll({
            top: offset,
            behavior: 'smooth',
          });
        }
      }

      window.onload = scrollSmooth('login','nomelogin');
    </script>