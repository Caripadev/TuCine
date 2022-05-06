<?php   
$page_title = 'Recuperar - Optimo';
include_once('layouts/header.php');  ?>

<form method="post" action="users/aut.php">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-2 col-lg-7 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
            </div>
            <h5 class="card-title text-center mb-3 fw-light fs-5">Lo entendemos, pasan cosas. ¡Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña!</h5>
            <form action="users/reset.php">
              <div class="col form-floating mb-2">
                <input type="email" class="form-control" id="email" name ="email" aria-describedby="correo1" placeholder="Correo Electronico" required>
                <label for="email">Correo electronico</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-dark btn-login text-uppercase fw-bold" type="submit">Reiniciar Contraseña</button>
              </div>
              <hr class="my-4">
            </form>                                   
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">¿Ya tienes una cuenta? ¡Ingresa!</a>
              </div>
              <div class="text-center">
                <a class="small" href="registro.php">Crear una cuenta.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<?php   include_once('layouts/footer.php');  ?>