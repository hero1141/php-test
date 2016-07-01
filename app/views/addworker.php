<form method="post">

<input type="text" name="imie" id="name">
<input type="submit" value="dodaj" id="new_worker">
</form>

<script>

$("#new_worker").on("click", function(e){
    e.preventDefault();
    var name = $("#name").val();
    var id  = this.id;
    $.ajax({
        url: "/ajax/app/views/"+id+".php",
        type: 'POST',
        data: {name: name},
        success: function(result){
        $("#main").html(result);
    }});
});


</script>
