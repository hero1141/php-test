<?php 
require(__DIR__.'/../../helpers/connect.php');
if(isset($_POST['value']) && $_POST['value'] != ''){

	$name = $_POST['value'];
	$rekord = $db->query("SELECT * FROM `pracownicy` WHERE ID = $name ");
	$rekord = $rekord->fetch();
	$name =  $rekord['nazwa'];
	$text = "Aktualizuj";
}
else{

	$name = '';
	$text = "Dodaj";
}

?>
<form method="post" id="add">

<input type="text" name="imie" id="name" value="<?php echo $name ?>">
<a id="pracownicy/new_worker" class="btn btn-primary"><?php echo $text ?></button>
</form>
