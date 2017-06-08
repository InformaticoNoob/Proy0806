<?php

include '../librerias.php';

$oUsu=new Usuario($_REQUEST["nomusuario"], $_REQUEST["clave"]);

if ($oUsu->VerificaLocal()){
    echo "<b>Todo bien</b>";
}
else
{
    echo "<b>Todo mal</b>";
}