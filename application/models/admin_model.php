<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function listusers()
	{
		$this->db->select('*');
		$this->db->from('usuario');
		return $this->db->get();  //Devuelve el resultado
	}
	public function agregarusuario($data)
	{
		$this->db->insert('usuario',$data);
	}
	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('usuario',$login);
		$this->db->where('password',$password);
		return $this->db->get(); //devuelve el resultado
	}


	public function eliminaruser($iduser)
	{
		$this->db->where('idusuario',$iduser);
		$this->db->delete('usuario');
	}

}
