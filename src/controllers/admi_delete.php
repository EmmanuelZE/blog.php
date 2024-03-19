<?php

require('src/models/Article.php');

$id = $_GET["id"];


$success = deleteArticle($id);

if (!$success) {
    throw new Exception("Identifiant invalide");
} else {
    header("Location: index.php?controller=admin_homepage");
}