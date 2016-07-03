<?php
$configs = include(__DIR__.'/../config/db.php');
$db = new PDO($configs['host'].';dbname='.$configs['dbname'], $configs['username'], $configs['password']);
