
function presence()
{

    //codeCine=idCine;
    alert(ifFormation);
   $.ajax
    (
        {
            type:"get",
            url:"listeform.php",
            data:"numform="+idFormation,
            success:function(data)
            {
                $("#divFormation").empty();
                $("#divFormation").append(data);

            },
            error:function()
            {
                alert("erreur sql sur les formations");
            }
        }

    );
}
