var idFormation;
function presence(a)
{

    idFormation=a;
    //alert(a);
    
   $.ajax
    (
        {
            type:"get",
            url:"listeform.php",
            data:"numform=+a",
            success:function(data)
            {
                $("#divFilms").empty();
                $("#divFilms").append(data);

            },
            error:function()
            {
                alert("erreur sql sur les formations");
            }
        }

    );
}
