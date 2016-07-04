<?php
require(__DIR__.'/../../helpers/connect.php');
if(isset($_POST['value']) && $_POST['value'] != ''){

	$name = $_POST['value'];
	$rekord = $db->query("SELECT * FROM `pracownicy` WHERE ID = $name ");
	$rekord = $rekord->fetch();
	$nazwa =  $rekord['nazwa'];
	$text = "Aktualizuj";
	$href = "pracownicy/edit";
}
else{

	$nazwa = '';
	$name = '';
	$text = "Dodaj";
	$href = "pracownicy/new_worker";
}
?>
<form method="post" id="add">

<input type="text" name="imie" id="name" value="<?php echo $nazwa; ?>">
<a id="<?php echo $href; ?>" class="btn btn-primary" name="<?php echo $name; ?>"><?php echo $text ?></a>
</form>

<script>
$("a").on("click", function(e){
    e.preventDefault();
    var name = $("#name").val();
    var id  = this.id;
	var value = this.name;
    $.ajax({
        url: "app/views/"+id+".php",
        type: 'POST',
        data: {name: name, value: value},
        success: function(result){
        $("#main").html(result);
    }});
});
</script>
