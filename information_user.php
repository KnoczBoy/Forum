
<?php
    include("information_user.php");
    if(isset($_POST["user"]) && !empty($_POST["user"]) &&
    isset($_POST["topic"]) && !empty($_POST["topic"]) &&
    isset($_POST["id"]) && !empty($_POST["id"]) &&
    isset($_POST["id2"]) && !empty($_POST["id2"]) &&
    $_POST["id"] == $_POST["id2"])
    { 


      $con=mysql_connect($host,$user,$id)
      or die ("Problemas al conectar con servidor,contactarse con nuestro servicio al cliente");

      mysql_select_db($db,$con)
      or die ("Problemas con al conectar con db");


      mysql_query("INSERT INTO register (user,topic,id)VALUES ("$_POST["user"] "," $_POST["topic"] "," $_POST["id"] "," $_POST["id2"] ")",$con); 
       
      

    }else{
      echo "Verifica que llenaste los campos";

    }
     if (empty($_POST["check2"])) {
        $ideErr = "No pusiste tu id";
     { else {
       $id = test_input($_POST["id])

     } 
     if (empty($_POST["check"])) {
         $TermErr = "No aceptaste los Terminos y Condiciones";
     } else {
      $Term = test_input($_POST["Terminos y Condiciones"]);
     }

     if (empty($_POST["comment"])) {
     $commentErr = "No pusiste nada";
   }else {
     $comment = test_input($_POST["comment"]);
   }