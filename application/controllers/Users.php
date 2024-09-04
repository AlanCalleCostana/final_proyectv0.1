<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	public function agregaruser()
	{
		//lado izquierda coincide con el nombre de la base de datos, de las columnas
		// el lado derecho es el name de el formulario
		$data['nombre']=strtoupper($_POST['nombre']);// validacion para maysucula
		$data['apellido1']=strtoupper($_POST['apellido1']);// validacion para maysucula
		$data['apellido2']=strtoupper($_POST['apellido2']);// validacion para maysucula
		$data['email']=strtoupper($_POST['email']);// validacion para minuscula
		$data['telefono']=$_POST['telefono'];
		$data['usuario']=strtoupper($_POST['user']);// validacion para maysucula
		$data['password']=sha1($_POST['password']);
		//$data['idusuario']=($usuario->id);
		
		$this->user_model->agregaruser($data);

		redirect('pageAdmin/listusers','refresh');
	}
	public function listusers()
	{
        $lista=$this->user_model->listusers();
		$data['usuario']=$lista;


		$this->load->view('tableusers',$data);
	}
	public function Modificar(){
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->product_model->recuperarproducto($idproducto);

		$this->load->view('formmodprod',$data);

	}
	public function Modificarbd(){
		 


	}
}
