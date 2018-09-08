<?php
namespace LojaAgua\persistencia;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use LojaAgua\persistencia\AbstractDAO;
use LojaAgua\entidades\Usuario;
class UsuarioDAO extends AbstractDAO{
public function __construct() {
		parent::__construct('LojaAgua\entidades\Usuario');
	}
}