<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageAdmin extends CI_Controller {

	public function main()
	{
		if($this->session->userdata('usuario'))
		{
			$this->load->view('main');
		}
		else
		{
			redirect('login/index','refresh');
		}
		
	}
    public function listproducts()
	{
        $lista=$this->product_model->listproducts();
		$data['producto']=$lista;

		$this->load->view('tableproducts',$data);
	}
    public function listadmins()
	{
		$this->load->view('tableadmins');
	}
    public function listusers()
	{
        $lista=$this->admin_model->listusers();
		$data['usuario']=$lista;


		$this->load->view('tableusers',$data);
	}

	public function formproduct()
	{
		$this->load->view('formproduct');
	}
	public function formventa()
	{
		$data['infoproductos']=$this->venta_model->listproducts();
		$this->load->view('formventa',$data);
	}
	public function formemple()
	{
		$this->load->view('formempleado');
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
	public function modificaruser()
	{
		$iduser=$_POST['iduser'];
		$data['infouser']=$this->admin_model->recuperaruser($iduser);

		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('formmodificar',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}
	public function modificaruserbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['primerApellido']=strtoupper($_POST['apellido1']);
		$data['segundoApellido']=strtoupper($_POST['apellido2']);
		$data['nota']=$_POST['nota'];

		$this->admin_model->modificaruser($idestudiante,$data);
		redirect('pageAdmin/listuser','refresh');
	}
	public function eliminaruserbd()
	{
		$iduser=$_POST['iduser'];
		$this->admin_model->eliminaruser($iduser);
		redirect('pageAdmin/listusers','refresh');
	}
}
