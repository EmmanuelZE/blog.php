<?php
session_start();

require_once("src/models/Article.php");

if (!isset($_SESSION["user"]) && empty($_SESSION["user"])) {
    header("Location: views/login.php");
}



$id = $_GET["id"];
$article = getArticle($id);


require("views/view.php");
