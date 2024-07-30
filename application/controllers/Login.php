<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('view_login');
	}
	public function agregaruserbd()
	{
		//lado izquierda coincide con el nombre de la base de datos, de las columnas
		// el lado derecho es el name de el formulario
		$data['nombre']=strtoupper($_POST['nombre']);// validacion para maysucula
		$data['apellido']=strtoupper($_POST['apellido']);// validacion para maysucula
		$data['email']=strtolower($_POST['email']);// validacion para minuscula
		$data['telefono']=$_POST['telefono'];
		$data['tipo']=$_POST['tipo'];
		$data['usuario']=strtolower($_POST['user']);// validacion para maysucula
		$data['password']=sha1($_POST['password']);
		
		$this->admin_model->agregarusuario($data);

		redirect('login/index','refresh');
	}
	public function validarusuario()
	{
		$login=$_POST['usuario'];
		$password=sha1($_POST['password']);

		echo $login;
		echo $password;
		$consulta=$this->admin_model->validar($login,$password);

		echo $consulta->num_rows();

		if($consulta->num_rows()>0)
		{
			echo 'inicio de sesion';
			//usuario valido
			foreach($consulta->result() as $row)
			{

				$this->session->set_userdata('idusuario',$row->idusuario);
				$this->session->set_userdata('usuario',$row->usuario);
				//$this->session->set_userdata('tipo',$row->tipo);

				redirect('PageAdmin/main','refresh');
			}
		}
		else
		{
			//acceso incorrecto - volvemos al login
			redirect('login/index','refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/index','refresh');
	}

}
