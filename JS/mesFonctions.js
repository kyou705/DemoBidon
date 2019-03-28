function AfficherLesCoureurs()
{
    //alert("yeeeeeeeeeeeesss!!!!!");

    $.ajax
    (
        {
            type: "GET",
            url: "GetLesCoureurs.php",
            data:"numEq="+$('#lstEquipes').val(),
            success:function(donnees)
            {
               // alert("yeeeeeeeeeeeesss!!!!!");
               $('#divCoureurs').empty();
                
                $('#divCoureurs').append(donnees);

            },
            error:function()
            {
                alert("Impossible de récupérer les coureurs");
            }
        }

    );
}