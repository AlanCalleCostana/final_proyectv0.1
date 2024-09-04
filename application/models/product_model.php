<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{

	public function agregarlaptop($data)
	{
		$this->db->insert('producto', $data);
	}
	public function listproducts()
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('estado',1);
		return $this->db->get();  //Devuelve el resultado
	}
	public function actualizarstock($id, $cantidadVendida)
	{
		$this->db->set('stock', 'stock - ' . (int) $cantidadVendida, FALSE);
		$this->db->set('ultimaActualizacion', 'CURRENT_TIMESTAMP', FALSE);
		$this->db->where('id', $id);
		$this->db->update('producto');
	}
	public function recuperarproducto($id)
	{
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->where('id',$id);
		return $this->db->get(); //devuelve el resultado
	}
	public function modificarproducto($id,$data)
	{
        $this->db->set('ultimaActualizacion', 'CURRENT_TIMESTAMP', FALSE);
		$this->db->where('id',$id);
		$this->db->update('producto',$data);	
	}
	public function eliminarproducto($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('producto',$data);
	}
}
