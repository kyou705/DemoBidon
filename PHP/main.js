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
                $("#div1").empty();
                $("#div1").append(data);

            },
            error:function()
            {
                alert("erreur sql sur les formations");
            }
        }

    );
}

function sur()
{

    //idFormation=a;
    alert("b");
    $(this).addClass('offre');
    
  /* $.ajax
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

    );*/
}
