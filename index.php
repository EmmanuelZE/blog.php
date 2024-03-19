<?php
try {
    // Ternaire
    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "homepage";
    include("src/controllers/" . $controller . ".php");
} catch (Exception $e) {
  $message = $e->getMessage();

  require("views/404.php");
}

// $variable = (condition) ? intruction_cond_vrai : instruction_cond_faux;

// url/?param1=valeurParam1&param2=valeurParam2&