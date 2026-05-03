<?php

require 'vendor/autoload.php';

use App\User;
use Database\Models\ProductModel;
use Framework\Router;

$user = new User();
echo $user->getName();
echo "\n";

$product = new ProductModel();
echo $product->getId();
echo "\n";

$router = new Router();
echo $router->verificarRouter();
echo "\n";

?>