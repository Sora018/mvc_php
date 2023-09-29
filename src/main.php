<?php
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario ("Chopper");

echo "<h1>Task Today APP</h1>";
echo $u->getNome();