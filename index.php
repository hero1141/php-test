<?php
require_once('app/helpers/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Ajax Website</title>
<!-- Latest compiled and minified CSS -->

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="app/assets/javascript/main.js"></script>
<style>
#nav{

    background-color:red;
    height:150px;

}
#container{

    background-color:blue;
    height:450px;

}

#footer{

    background-color: green;
    height:150px;

}

#cont{

    min-height:300px;

}

</style>
</head>
<body>

    <div class="container">

        <div class="navbar nav well">
            <button id="about">O mnie</button>
            <button id="contact">Kontakt</button>
            <button id="tabela">Pokaz wykres</button>
            <button id="pracownicy">Lista pracownikow</button>
            <button id="addworker">Dodaj pracownika</button>
        </div>

        <div class="col-md-12 text-center well" id="cont"><span id="main"></span></div>

        <div class="footer well col-md-12" style="margin-top:20px;">To jest stopka projektu</div>

    </div>

</body>
</html>
