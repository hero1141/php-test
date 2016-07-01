<?php

require('/xampp/htdocs/ajax/app/helpers/connect.php');
$nazwa = $_POST['name'];
if($db->query("INSERT INTO `pracownicy` (`ID`, `nazwa`, `stanowisko`, `dzial`, `telefon_stacjonarny`, `telefon_komorkowy`, `adres_mail`, `numer_pracownika`, `informacje`) VALUES (NULL, '$nazwa', NULL, NULL, NULL, NULL, NULL, NULL, NULL);"))
{
    echo 'Pomyslnie dodano pracownika';
    echo '<button id="addworker">Dodaj kolejnego</button>';
    echo '<button id="pracownicy">Lista pracownikow</button>';
}
else {
    echo 'Dodawanie nie powiodlo sie';
}
 ?>
<script src="../assets/javascript/main.js"></script>
