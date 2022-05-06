<?php   
$page_title = 'Iniciar Sesion - Optimo';
include_once('layouts/header.php');  ?>

<form>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-2 col-lg-7 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-2">Bienvenido Nuevamente!</h1>
            </div>
            <h5 class="card-title text-center mb-3 fw-light fs-5">Inicia Sesion</h5>
            <form method="post" action="users/aut.php">
              <div class="col form-floating mb-2">
                <input type="email" class="form-control" id="email" name ="email" aria-describedby="correo1" placeholder="Correo Electronico" required>
                <label for="email">Correo electronico</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                <label for="pass">Contraseña</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Recordar contraseña
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-dark btn-login text-uppercase fw-bold" type="submit">Iniciar Sesion</button>
              </div>
            </form>
         
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-danger text-uppercase fw-bold" type="submit">
                  <i class="bi bi-google"></i> Iniciar Con Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary text-uppercase fw-bold" type="submit">
                  <i class="bi bi-facebook"></i> Iniciar con Facebook
                </button>
              </div>
            </form>                                   
              <hr>
              <div class="text-center">
                <a class="small" href="olvido.php">¿Olvido su contraseña?</a>
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