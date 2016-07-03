<?php
require(__DIR__.'/../../helpers/connect.php');
$id = $_POST['value'];
$statement = $db->prepare('DELETE FROM `pracownicy` WHERE ID = :id');
if($statement->execute(array(':id' => $_POST['value']))){
    echo 'Pomyslnie usunięto pracownika';
    echo '<button id="pracownicy/pracownicy">Lista pracownikow</button>';
}
 ?>
