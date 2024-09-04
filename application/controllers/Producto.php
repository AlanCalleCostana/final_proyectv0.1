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
		$data['modelo']=strtoupper($_POST['modelo']);// validacion para maysucula
		$data['marca']=strtoupper($_POST['marca']);// validacion para maysucula
		$data['almacenamiento']=strtoupper($_POST['almacenamiento']);// validacion para minuscula
		$data['ram']=strtoupper($_POST['ram']);// validacion para maysucula
		$data['cpu']=strtoupper($_POST['cpu']);
		$data['gpu']=strtoupper($_POST['gpu']);
		$data['stock']=$_POST['cantidad'];
		$data['categoria']=strtoupper($_POST['categoria']);
		$data['precio']=$_POST['precio'];
		$data['idUsuario']=($this->session->userdata('idusuario'));
		
		$this->product_model->agregarlaptop($data);

		redirect('pageAdmin/listproducts','refresh');
	}
	public function Modificar(){
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->product_model->recuperarproducto($idproducto);

		$this->load->view('formmodprod',$data);
	}
	public function Modificarbd(){
		$id=$_POST['id'];
		$data['modelo']=strtoupper($_POST['modelo']);
		$data['marca']=strtoupper($_POST['marca']);
		$data['almacenamiento']=strtoupper($_POST['almacenamiento']);
		$data['ram']=strtoupper($_POST['ram']);
		$data['cpu']=strtoupper($_POST['cpu']);
		$data['gpu']=strtoupper($_POST['gpu']);
        $data['stock']=$_POST['cantidad'];
		$data['categoria']=strtoupper($_POST['categoria']);
		$data['precio']=$_POST['precio'];
        $data['idUsuario']=$this->session->userdata('idusuario');
		$this->product_model->modificarproducto($id,$data);
		redirect('producto/listproducts','refresh');

	}
	public function eliminarproducto()
	{
		$id=$_POST['idproducto'];
		$data['estado']=0;
		$data['idUsuario']=$this->session->userdata('idusuario');
		$this->product_model->eliminarproducto($id,$data);
		redirect('producto/listproducts','refresh');
	}
}
