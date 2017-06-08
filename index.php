<!DOCTYPE html>
<!--
Formulario de Login y Pass
-->
<html>
    <head>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input id="nomusuario" type="text" name="nomusuario">
            <input id="clave" type="password" name="clave">
            <input id="enviar" type="button" onclick="" value="Enviar">
        </form>
    </body>
    
    <script>
        
    $(document).ready(function(){
        $("#enviar").click(function(){
            $("form").hide();
            alert("Ocultaste el formulario ;-)");
        });
    });
    
    </script>
</html>
