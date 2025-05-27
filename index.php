<?php

require_once 'db.php';
require_once 'Controller/UserController.php';

header("Content-Type: application/json");

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$userController = new UserController();

// Route: GET /users
if ($requestUri === '/users' && $method === 'GET') {
    echo json_encode($userController->index());
    exit;
}




// 404 - Not Found
http_response_code(404);
echo json_encode(['error' => 'Route not found']);
