<?php

$conn = new mysqli("localhost", 'root', '', 'fura_md');
require_once "ProductController.php";

$controller = new ProductController($conn);

$action = $_GET['action'] ?? 'profile';

switch ($action) {
    case 'show':
        $controller->show($_GET['id']);
        break;
    case 'store':
        $controller->store($_POST);
        break;
    case 'update':
        $controller->update($_POST['id'], $_POST);
        break;
    case 'destroy':
        $controller->destroy($_GET['id']);
        break;
    default:
        $controller->profile();
}