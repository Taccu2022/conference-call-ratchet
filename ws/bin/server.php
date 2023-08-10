<?php

require 'vendor/autoload.php';

use Alok\Comm;
use Ratchet\App;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

header("Access-Control-Allow-Origin: *"); // Replace * with the specific origin you want to allow (e.g., http://example.com)
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

$allowed_origins = ['*'];

$app = new App('localhost', 8080, '0.0.0.0');
$app->route('/comm', 
  new HttpServer(
    new WsServer(
      new Comm()
    )
  ), 
  $allowed_origins);
$app->run();
?>
