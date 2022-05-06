<?php

  $page_title = 'Registrar Usuario';
include_once('../layouts/header.php'); 
require_once('../includes/config.php');
      
       $email =  $_REQUEST['email'];

       $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
       /*
       $pre1 =  $_REQUEST['pre1'];
       $res1 =  $_REQUEST['res1'];

       $pre2 =  $_REQUEST['pre2'];
       $res2 =  $_REQUEST['res2'];

       $pre3 =  $_REQUEST['pre3'];
       $res3 =  $_REQUEST['res3'];*/

       $name =  $_REQUEST['name'];
       $lname = $_REQUEST['lname'];
/**
       $date =  $_REQUEST['date'];
       $address =  $_REQUEST['address'];
       $country =  $_REQUEST['country'];
       $state =  $_REQUEST['state'];
       $city =  $_REQUEST['city'];
       $zip =  $_REQUEST['zip'];
*/        
       $phone =  $_REQUEST['phone'];
        
/*       $lang =  $_REQUEST['lang'];

       $op =  $_REQUEST['op'];*/
       $term =  $_REQUEST['term'];

        $sql = "INSERT INTO `user` (`name`, `lastname`, `email`, `phone`, `pass`, `term`) VALUES ('$name', '$lname', '$email', '$phone', '$pass', '$term')";

        if(mysqli_query($con, $sql)){  
            echo "<script>
                alert('Gracias por Registrarte, Inicia Sesion para continuar');
                window.location= '../login.php'
            </script>";
      
            /*echo "Informacion recibida <br>";*/
            /*header('Location: index.php');
            exit();*/
        } else{
            echo "ERROR <br>" . mysqli_error($con);
        }
        mysqli_close($con);




include_once('../layouts/footer.php'); ?>