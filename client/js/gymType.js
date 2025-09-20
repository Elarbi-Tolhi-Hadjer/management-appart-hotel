
// display the room types with ajax
function displaygymTypes(value){

    $.ajax({
        url:"fetchData.php",
        type:"POST",
        data:{
            gymType:true,
            filter : value
        },
        beforeSend:function(){
            $('#contentArea').html("<br><br><span>Working...</span>");
          },
          success:function(data){
            $('#contentArea').html(data);
         
          },
          error: function(data){
            console.log("error");
            console.log(data);
        }

    })
}

$(document).ready(function(){

    displaygymTypes("");
    $("#gymFilter").on("change",function(){
        var value = $(this).val();
        displaygymTypes(value);
    })
});