<?php
##### DB Configuration #####
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db_op';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Fallo al conectar a la base de' . mysqli_connect_error());
}

session_start();



/*##### Google App Configuration #####
$googleappid = "930450954196-kk733ju6m98mfiaqoh4js04ee92h1ep6.apps.googleusercontent.com"; 
$googleappsecret = "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"; 
$redirectURL = "http://localhost/LoginwithGoogle/authenticate.php"; 
//$redirectURL = "YourRedirectURL"; 

##### Create connection #####
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ($conn->connect_error) {
    die("Fallo al Conectar, " . $conn->connect_error);
}
##### Required Library #####
include_once ('src/Google/Google_Client.php'); 
include_once ('src/Google/contrib/Google_Oauth2Service.php');

$googleClient = new Google_Client();
$googleClient->setApplicationName('Login de Optimo.com');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);
*/
?>