//FUNCION DE LOGIN

function login()
{
    var ema;
    var pass;

    ema=$("#email").val();
    pass=$("input#pass").val();

    if(ema == "" || pass=="")
    {
        alert("No dejes espacios vacios");
        $("#email").focus();
    }
    else
    {
        $.post(
                "./php/login.php", //cuidado, la ruta es desde donde se ejecuta, que es el INDEX
                {email:ema, contrasena:pass},
                function(resultadophp){
                   //alert(resultadophp);
                    if(resultadophp == "bien")
                    {
                        window.location.href="./sesion/menu.php";
                    }
                    else
                    {
                        alert("Email o Password incorrecto");
                        $("#email").focus();
                    }
                }
        );
    }
}

function mostrar (num,id){
    if (num==1 || num==4)
        {
        $("#"+id).show();
            if (num==1)
            {
                $("#etiqueta").text("Altas");
                $("#botones1").text("CATEGORIAS");
                $("#botones2").text("PRODUCTOS");
                $("#botones3").hide();
                $("#botones").children().attr("onclick","sabertexto(this.id)");
            }
            else
            {
                $("#etiqueta").text("Borrar");
                $("#botones1").text("CATEGORIAS");
                $("#botones2").text("PRODUCTOS");
                $("#botones3").hide();
                $("#botones").children().attr("onclick","sabertexto(this.id)");
            }
        }  
        else
        {
            $("#"+id).show();
            $("#botones3").show();
            if (num==2)
            {
                $("#etiqueta").text("Consulta");
                $("#botones1").text("CATEGORIAS");
                $("#botones2").text("PRODUCTOS");
                $("#botones3").text("ADMINISTRACION");
                $("#botones").children().attr("onclick","sabertexto(this.id)");
            }
            else
            {
                $("#etiqueta").text("Modificar");
                $("#botones1").text("CATEGORIAS");
                $("#botones2").text("PRODUCTOS");
                $("#botones3").text("ADMINISTRACION");
                $("#botones").children().attr("onclick","sabertexto(this.id)");
            }          
    }
}

function sabertexto(iden)
{
    var texto = $("#"+iden).text().toLowerCase();
    var seleccionado = $("#etiqueta").text();
    if (seleccionado=="Altas") {
        $("#"+iden).attr("onclick","window.location.href='./../php/altas.php?cod="+texto+"'");
    } else {
        $("#"+iden).attr("onclick","window.location.href='./../php/consultas.php?cod="+texto+"'");
    }  
}