<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conexion_model extends CI_Model {

	public function agregarusuario($data)
	{
		$this->db->insert('usuario',$data);
	}

}
