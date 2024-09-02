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
		return $this->db->get();  //Devuelve el resultado
	}
	public function actualizarstock($id, $cantidadVendida)
	{
		// Restar la cantidad vendida del stock actual
		$this->db->set('stock', 'stock - ' . (int) $cantidadVendida, FALSE);
		$this->db->set('ultimaActualizacion', 'CURRENT_TIMESTAMP', FALSE);
		$this->db->where('id', $id);
		$this->db->update('producto');
	}
}
