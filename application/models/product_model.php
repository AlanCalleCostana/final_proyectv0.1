<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function agregarlaptop($data)
	{
		$this->db->insert('producto',$data);
	}
	public function listproducts()
	{
		$this->db->select('*');
		$this->db->from('producto');
		return $this->db->get();  //Devuelve el resultado
	}


}
