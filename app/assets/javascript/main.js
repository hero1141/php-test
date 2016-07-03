    $(document).live('ready', function(){
        $("button").live("click", 'button', function(){
            var id = this.id;
            var value = this.value;
            var name = "test";
            $("#main").fadeOut(50, function(){

                $.ajax({url: "app/views/"+id+".php",
                data:{id:id, value:value, name:name},type: 'POST', success: function(result){
                    $("#main").html(result);
                }});
                $("#main").fadeIn(700);
            });
        });
    });
