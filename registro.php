<?php   
$page_title = 'Registrate - Optimo';
include_once('layouts/header.php'); 
require_once ('includes/config.php');

if(isset($_SESSION['userData'])){
	header('location: view.php');
}
/*$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);
*/?>

<form method="post" action="users/sign.php">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-md-5 col-lg-7 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-sm-5">
            <h5 class="card-title text-center mb-3 fw-light fs-3">Registrate</h5>
            <form>

            <div class="row">
              <div class="col form-floating mb-2">
                <input type="Text" class="form-control" id="name" name="name" placeholder="Nombre" aria-label="name" required>
                <label for="name">Nombre</label>
               </div>
                  <div class="col form-floating mb-2">
                <input type="Text" class="form-control " id="lname" name="lname" aria-decribedbys="Apellido" placeholder="Apellido" required>
                <label for="email">Apellido</label>
              </div>
            </div>

              <div class="col form-floating mb-2 ">
                <input type="tel"  class="form-control" name="phone" id="phone" placeholder="Numero" pattern="[0-9]{11}">
                <label for="inputphone">Numero de telefono</label>
              </div>

              <div class="col form-floating mb-2">
                <input type="email" class="form-control" id="email" name ="email" aria-describedby="correo1" placeholder="Correo Electronico" required>
                <label for="email">Correo electronico</label>
              </div>

                 <div class="col form-floating mb-2">
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                  <label for="exampleInputPassword1">Contraseña</label>
                </div>
                <div class="col form-floating mb-2">
                  <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirmar Contraseña" required>
                  <label for="exampleInputPassword1">Confirmar Contraseña </label>
                </div>


              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Recordar contraseña
                </label>
              </div>
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="term" name="term" checked>
                      <label class="form-check-label" for="exampleCheck1"><p class="text-justify">He leido y acepto la <a href="#" class="font-weight-bold">//Politica de Privacidad//</a> y los <a href="#" class="font-weight-bold">//Terminos y Condiciones</a>, y acepto recibir comunicaciones en forma electronica de conformidad con la  <a href="#" class="font-weight-bold">//Notificacion de consentimiento y divulgacion de firma electronica.</a><a class="text-danger">*</a></p>  </label>
                    </div>

              <div class="d-grid">
                <button class="btn btn-dark btn-login text-uppercase fw-bold" type="submit">Registrate</button>
              </div>
              <hr class="my-4">
            <div class="row">
              <div class="col ">
                <button class="btn btn-danger fw-bold" type="submit">
                  <i class="bi bi-google"></i><a href="<?= htmlspecialchars( $loginURL ); ?>"></a> Registrate Con Google
                </button>
              </div>
              <div class="col">
                <button class="btn btn-primary fw-bold" type="submit">
                  <i class="bi bi-facebook"></i> Registrate con Facebook
                </button>
            </div>

              <hr class="my-4">
              <div class="text-center">
                <a class="small" href="olvido.php">¿Olvido su contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="registro.php">Crear una cuenta.</a>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<?php   include_once('layouts/footer.php');  ?>