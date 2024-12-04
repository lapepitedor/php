<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

//if the user acces this page using request method ==post
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //vermeidet hacking durch the injection of any malicious code 
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

      if(empty($firstname)){

header("Location: ../index.php");
exit();
      }

      echo " THese are the data , that the user submitted:";
      echo "<br>";
      echo $firstname;
      echo"<br>";
      echo $lastname;
      echo"<br>";
      echo $favoritepet;

    // header("Location: ../index.php"); apres le submit ca reste sur la page ok 
    
} 
