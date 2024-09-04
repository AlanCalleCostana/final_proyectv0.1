<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empleados extends CI_Controller
{
    public function formproduct()
    {
        $this->load->view('formproduct');
    }
    public function agregaremple()
    {
        $data['nombre'] = strtoupper($_POST['nombre']);
        $data['apellido1'] = strtoupper($_POST['apellido1']);
        $data['apellido2'] = strtoupper($_POST['apellido2']);
        $data['email'] = ($_POST['email']);
        $data['telefono'] = $_POST['telefono'];
        $data['ci'] = $_POST['ci'];
        $data['usuario'] = strtolower($_POST['usuario']);
        $data['password'] = sha1($_POST['password']);
        $data['rol'] = 2;
        $data['idUsuario'] = $this->session->userdata('idusuario');

        $this->emple_model->agregaremple($data);

        redirect('empleados/listempleados', 'refresh');
    }
    public function cambio()
    {
        $id = $this->session->userdata('idusuario');
        $data['usuario'] = strtolower($_POST['usuario']);
        $data['password'] = sha1($_POST['password']);
        $data['idUsuario'] = ($this->session->userdata('idusuario'));
        $this->emple_model->cambio($id,$data);
        $this->load->view('main');
    }
    public function listempleados()
    {
        $lista = $this->emple_model->listempleados();
        $data['usuario'] = $lista;
        $this->load->view('tableempleados', $data);
    }
    public function listeliminados()
    {
        $lista = $this->emple_model->listeliminados();
        $data['usuario'] = $lista;
        $this->load->view('tableeliminados', $data);
    }
    public function Modificar()
    {
        $id = $_POST['id'];
        $data['infoempleado'] = $this->emple_model->recuperarempleado($id);

        $this->load->view('formmodemple', $data);

    }
    public function Modificarbd()
    {
        $id=$_POST['id'];
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['apellido1']=strtoupper($_POST['apellido1']);
		$data['apellido2']=strtoupper($_POST['apellido2']);
        $data['email']=strtolower($_POST['email']);
        $data['telefono']=$_POST['telefono'];
		$data['ci']=$_POST['ci'];
        $data['idUsuario']=$this->session->userdata('idusuario');
		$this->emple_model->modificarempleado($id,$data);
		redirect('empleados/listempleados','refresh');
    }
    public function eliminarempleado()
	{
		$id=$_POST['id'];
		$data['estado']=0;
		$data['idUsuario']=$this->session->userdata('idusuario');
		$this->emple_model->eliminarempleado($id,$data);
		redirect('empleados/listempleados','refresh');
	}
}
