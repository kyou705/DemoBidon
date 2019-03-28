var codeCine;

function AfficherFilms(idCine)
{

    codeCine=idCine;
    //alert(idCine);
    $.ajax
    (
        {
            type:"get",
            url:"GetLesFilms.php",
            data:"numCine="+idCine,
            success:function(data)
            {
                $("#divFilms").empty();
                $("#divFilms").append(data);

            },
            error:function()
            {
                alert("erreur sql sur les films");
            }
        }

    );
}
function AfficherLesActeurs(codeFilm)
{
    $.ajax
    (
        {
            type:"get",
            url:"GetLesActeurs.php",
            data:"numFilm="+codeFilm,
            success:function(data)
            {
                $("#divActeurs").empty();
                $("#divActeurs").append(data);

            },
            error:function()
            {
                alert("erreur sql sur les acteurs");
            }
        }

    );
}

function Voter(idFilm,vote)
{
    //alert(idFilm+ "-" + vote);
    $.ajax
    (
        {
            type:"get",
            url:"GetVote.php",
            data:"numFilm="+idFilm+"&vote="+vote,
            success:function()
            {
                AfficherFilms(codeCine)

            },
            error:function()
            {
                alert("erreur sql sur les votes");
            }
        }

    );
}