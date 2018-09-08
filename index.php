<?php
$loader = require __DIR__ . '/vendor/autoload.php';
use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\controlador\UsuarioController;
use LojaAgua\controlador\PedidoController;
$app = new \Slim\Slim ();

$usuarioCtrl = new UsuarioController();
$pedidoCtrl = new PedidoController();
$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "Venda de Agua",
			"version" => "1.0.0"
	] );
} );
$app->get ( '/usuario(/(:id))', function ($id = null) use  ($usuarioCtrl){
echo json_encode($usuarioCtrl->get($id));
});
$app->post ( '/usuario(/)', function () use  ($usuarioCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($usuarioCtrl->insert( $json ) );
} );
$app->put ( '/usuario(/)', function () {
echo "PUT\n";
} );
$app->delete ( '/usuario/:id', function () {
	echo "DELETE\n";
} );
$app->get ( '/pedido(/(:id))', function ($id = null) use  ($pedidoCtrl){
echo json_encode($pedidoCtrl->get($id));
});
$app->post ( '/pedido(/)', function () use  ($pedidoCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($pedidoCtrl->insert( $json ) );
} );
$app->put ( '/pedido(/)', function () {
echo "PUT\n";
} );
$app->delete ( '/pedido/:id', function () {
	echo "DELETE\n";
} );
$app->run ();
?>