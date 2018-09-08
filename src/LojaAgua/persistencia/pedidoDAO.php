<?php
namespace LojaAgua\persistencia;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use LojaAgua\entidades\Pedido;
use LojaAgua\persistencia\AbstractDAO;
use LojaAgua\persistencia\UsuarioDAO;
class PedidoDAO extends AbstractDAO{
public function __construct() {
		parent::__construct('LojaAgua\entidades\Pedido');
	}
	
}