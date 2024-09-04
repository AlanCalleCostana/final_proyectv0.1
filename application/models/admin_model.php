<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function listadmins()
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('rol',3);
		$this->db->where('estado',1);
		return $this->db->get();  //Devuelve el resultado
	}
	public function agregaradmin($data)
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
	public function modificaradmin($id,$data)
	{
        $this->db->set('ultimaActualizacion', 'CURRENT_TIMESTAMP', FALSE);
		$this->db->where('id',$id);
		$this->db->update('usuario',$data);	
	}

	public function eliminaradmin($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('usuario',$data);
	}
}
