<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

    public function listadmins()
	{
		$lista = $this->admin_model->listadmins();
        $data['usuario'] = $lista;
        $this->load->view('tableadmins', $data);
	}

	public function modificaradmin()
	{
		$id=$_POST['id'];
		$data['infoadmin']=$this->admin_model->recuperaradmin($id);
        $this->load->view('formmoduser',$data);
		

	}
	public function modificaruserbd()
	{
		$idestudiante=$_POST['idestudiante'];
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['apellido1']=strtoupper($_POST['apellido1']);
		$data['apellido2']=strtoupper($_POST['apellido2']);
		$data['nota']=$_POST['nota'];

		$this->admin_model->modificaruser($idestudiante,$data);
		redirect('pageAdmin/listuser','refresh');
	}
	public function eliminaradmin()
	{
		$id=$_POST['id'];
		$data['estado']=0;
		$data['idUsuario']=$this->session->userdata('idusuario');
		$data['fechaActualizacion']='CURRENT_TIMESTAMP';
		$this->admin_model->eliminaradmin($id,$data);
		redirect('admins/listadmins','refresh');
	}
	
}
