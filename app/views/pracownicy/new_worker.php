<?php

require(__DIR__.'/../../helpers/connect.php');
$nazwa = $_POST['name'];
if($db->query("INSERT INTO `pracownicy` (`ID`, `nazwa`) VALUES (NULL, '$nazwa');"))
{
    echo 'Pomyslnie dodano pracownika';
    echo '<button id="pracownicy/addworker">Dodaj kolejnego</button>';
    echo '<button id="pracownicy/pracownicy">Lista pracownikow</button>';
}
else {
    echo 'Dodawanie nie powiodlo sie';
}
 ?>