<!DOCTYPE html>
<html>
<head>
<title>Ajax Website</title>
<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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

#main{

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
        </div>

        <div class="col-md-12 text-center well" id="main"></div>

        <div class="footer well col-md-12" style="margin-top:20px;">To jest stopka projektu</div>

    </div>

<script>

    $(document).on('ready', function(){

        $("button").on('click', function(){
            var id = this.id;
            $.ajax({url: "app/views/"+id+".php", success: function(result){
                $("#main").html(result);
            }});
        });

    });

</script>
</body>
</html>
