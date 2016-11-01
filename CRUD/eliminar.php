<?php
require_once("class/class.php");
$Des=new Desarrollo();
$Des->eliminar($_GET["id"]);
?>