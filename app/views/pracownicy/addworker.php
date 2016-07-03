<?php 

require_once("_form.php");


?>

<script>
$("a").on("click", function(e){
    e.preventDefault();
    var name = $("#name").val();
    var id  = this.id;
    $.ajax({
        url: "app/views/"+id+".php",
        type: 'POST',
        data: {name: name},
        success: function(result){
        $("#main").html(result);
    }});
});
</script>
