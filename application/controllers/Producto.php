<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    public function listproducts()
	{
        $lista=$this->product_model->listproducts();
		$data['producto']=$lista;

		$this->load->view('tableproducts',$data);
	}

	public function formproduct()
	{
		$this->load->view('formproduct');
	}
	public function agregarproductobd()
	{
		//lado izquierda coincide con el nombre de la base de datos, de las columnas
		// el lado derecho es el name de el formulario
		$data['nombre']=strtoupper($_POST['nombre']);// validacion para maysucula
		$data['apellido']=strtoupper($_POST['apellido']);// validacion para maysucula
		$data['email']=strtoupper($_POST['email']);// validacion para minuscula
		$data['telefono']=$_POST['telefono'];
		$data['usuario']=strtoupper($_POST['user']);// validacion para maysucula
		$data['password']=md5($_POST['password']);
		
		$this->admin_model->agregarlaptop($data);

		redirect('pageAdmin/listproducts','refresh');
	}
	public function Modificar(){
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->product_model->recuperarproducto($idproducto);

		$this->load->view('formmodprod',$data);

	}
	public function Modificarbd(){
		 


	}
}
