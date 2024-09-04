<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function listusers()
	{
		$usuario=1;
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('rol',$usuario); 
		return $this->db->get();  //Devuelve el resultado
	}
	public function agregaruser($data)
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

	public function recuperaradmin($id)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('id',$id);
		return $this->db->get(); //devuelve el resultado
	}

	public function eliminaruser($iduser)
	{
		$this->db->where('idusuario',$iduser);
		$this->db->delete('usuario');
	}

}
