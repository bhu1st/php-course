
<script type="text/javascript">

$(document).ready(function(){

    $('#link').click(function(e){
        
		var username = $("#username").val();
        var other_data = $("#other_data").val();

        $.ajax({
            type: "POST",
            url: "check_user.php",
            data: "username="+username+"&other_date="+other_data,
            success: function(msg) {
                //alert("User already exists");
                $("#success").html("User already exists");
            }
        });
    });
});


</script>