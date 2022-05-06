<?php

  $page_title = 'Insertar datos';
include_once('layouts/header.php'); 
require_once('includes/config.php');
      
        $name =  $_REQUEST['name'];
        $lastname =  $_REQUEST['lastname'];
        $city =  $_REQUEST['city'];
        $state =  $_REQUEST['state'];
        $postalcode =  $_REQUEST['postalcode'];
        $country =  $_REQUEST['country'];
        $email =  $_REQUEST['email'];
        $message =  $_REQUEST['message'];

        $sql = "INSERT INTO `contact` (`name`, `lastname`, `city`, `state`, `postalcode`, `country`, `email`, `message`) VALUES ('$name', '$lastname', '$city', '$state', '$postalcode', '$country','$email',  '$message')";

        if(mysqli_query($con, $sql)){  
            echo "<script>
                alert('Informacion recibida, pronto nos comunicaremos con usted.');
                window.location= 'contacto.php'
            </script>";
      
            /*echo "Informacion recibida <br>";
            header('Location: index.php');
            exit();*/
        } else{
            echo "ERROR<br>" 
                . mysqli_error($con);
        }
        mysqli_close($con);




include_once('layouts/footer.php'); ?>