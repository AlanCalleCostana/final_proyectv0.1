<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {

    public function venderbd()
	{
        $data['usuario_id']=($this->session->userdata('idusuario'));
		$idProducto=$_POST['id'];
        $stock=$_POST['cantidad'];

		$this->venta_model->realizarventa($idProducto,$data,$stock);    
		redirect('pageAdmin/listproducts','refresh');
	}
	
}
