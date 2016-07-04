<?php
 require_once(__DIR__.'/../../helpers/isAjax.php');
 if(isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['value']) && $_POST['value'] != ''){
     $name = $_POST['name'];
     $value = $_POST['value'];
     require(__DIR__.'/../../helpers/connect.php');
     if($db->query("UPDATE `pracownicy` SET `nazwa` = '$name' WHERE `pracownicy`.`ID` = $value ;"))
     {
         echo 'Pomyslnie edytowano pracownika';
         echo '<button id="pracownicy/pracownicy">Lista pracownikow</button>';
     }
     else
     {
         echo 'Nie udalo sie edytowac pracownika';
     }
 }
 else {
     echo "Nie dziala";
 }

 ?>
