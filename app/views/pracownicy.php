<?php
require('/xampp/htdocs/ajax/app/helpers/connect.php');
echo '<table>';
echo '<tr>';
echo '<th>Nazwa Pracownika</th>';
echo '</tr>';
foreach($db->query('SELECT * from Pracownicy') as $row) {
        echo '<tr><td>
        '.$row['nazwa'].'
        <td>
        <td>
          <button class="btn btn-danger" id="deleteWorker" value="'.$row['ID'].'">Usuń Pracownika</button>
        </td>
        </tr>

        ';
}


echo '</table>';
?>
