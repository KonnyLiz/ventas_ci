<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Calendarios_model');
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
	}
	
	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/dashboard");
		$this->load->view("layouts/footer");

	}

	public function getEventos()
	{
		$r = $this->Calendarios_model->getEventos();
		echo json_encode($r);

	}
	public function updEvento(){
		$param['id'] = $this->input->post('id');
		$param['fecini'] = $this->input->post('fecini');
		$param['fecfin'] = $this->input->post('fecfin');

		$r = $this->Calendarios_model->updEvento($param);

		echo $r;
	}

	public function deleteEvento($id){
		$id = $this->input->post('id');

		if ($this->Calendarios_model->deleteEvento($id)) {
			redirect(base_url()."dashboard");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."dashboard");
		}
	}

	public function updEvento2(){
		$param['id'] = $this->input->post('id');
		$param['nome'] = $this->input->post('nom');
		$param['fi'] = $this->input->post('fecini');
		$param['ff'] = $this->input->post('fecfin');

		$r = $this->Calendarios_model->updEvento2($param);

		echo $r;
	}


	public function gdevento(){
		$nombre = $this->input->post("nom");
		$fechai = $this->input->post('fecini');
		$fechaf = $this->input->post("fecfin");
		

		$data1  = array(
			'nombre' => $nombre,
			'fecha_i' => $fechai,
			'fecha_f' => $fechaf,
		);

		if ($this->Calendarios_model->save1($data1)) {
			redirect(base_url()."dashboard");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."dashboard");
		}
	}

}
