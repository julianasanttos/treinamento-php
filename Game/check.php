<?php
require_once('funcaoCheck.php');

if(analiseVariavel($_GET["players"]))  {

    header('Location: coluna.php?players='.$_GET["players"]);
} else{
    header('Location: config.php?players='.$_GET["players"]);
}


?>