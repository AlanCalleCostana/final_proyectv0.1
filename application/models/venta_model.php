<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model {

	public function listproducts()
	{
		$this->db->select('*'); // select *
		$this->db->from('producto'); //tabla
		return $this->db->get(); //devolución del resultado de la consulta
	}

	public function realizarventa($idProducto,$data,$stock)
	{
		$this->db->trans_start();
		$this->db->insert('venta',$data);
		$idVenta=$this->db->insert_id();

		$data2['producto_id']=$idProducto;
		$data2['venta_idventa']=$idVenta;
		$this->db->insert('ventadetalle',$data2);
        $this->product_model->actualizarstock($idProducto,$stock); 

		$this->db->trans_complete();

		if($this->db->trans_status()===FALSE)
		{
			return false;
		}
	}
}
