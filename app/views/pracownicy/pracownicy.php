<?php
require(__DIR__.'/../../helpers/connect.php');
echo '<table>';
echo '<tr>';
echo '<th>Nazwa Pracownika</th>';
echo '</tr>';
foreach($db->query('SELECT * from pracownicy') as $row) {
        echo '<tr><td>
        '.$row['nazwa'].'
        <td>
        <td>
           <button class="btn btn-success" id="pracownicy/editWorker" value="'.$row['ID'].'">Edycja Pracownika</button>
          <button class="btn btn-danger" id="pracownicy/deleteWorker" value="'.$row['ID'].'">Usuń Pracownika</button>
        </td>
        </tr>

        ';
}


echo '</table>';
?>
