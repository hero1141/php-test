<?php
$configs = include('/xampp/htdocs/ajax/app/config/db.php');
$db = new PDO($configs['host'].';dbname='.$configs['dbname'], $configs['username'], $configs['password']);
