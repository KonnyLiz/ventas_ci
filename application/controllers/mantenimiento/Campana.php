<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campana extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Campana_model");
		$this->load->model("Productos_model");
		
	}

	public function index()
	{
		$data  = array(
			'campanas' => $this->Campana_model->getCampanas(), 
			'productos' => $this->Productos_model->getProductos(),
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/campana/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombre = $this->input->post("nombre");
		$producto = $this->input->post("producto");
		$fechai = $this->input->post("fecha_i");
		$fechaf = $this->input->post("fecha_f");

		$data  = array(
			'nombre' => $nombre,
			'producto' => $producto,
			'fecha_i' => $fechai,
			'fecha_f' => $fechaf,
			'estado' => "1"
		);

		if ($this->Campana_model->save($data)) {
			redirect(base_url()."mantenimiento/campana");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/campana #profile1");
		}
	}

	public function edit($id){
		$data =array( 
			'campanas' => $this->Campana_model->getCampana($id),
			'productos' => $this->Productos_model->getProductos(),
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/campana/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$id = $this->input->post("idCampana");
		$nombre = $this->input->post("nombre");
		$producto = $this->input->post("producto");
		$fechai = $this->input->post("fecha_i");
		$fechaf = $this->input->post("fecha_f");

		$data  = array(
			'nombre' => $nombre,
			'producto' => $producto,
			'fecha_i' => $fechai,
			'fecha_f' => $fechaf,
			'estado' => "1"
		);
		if ($this->Campana_model->update($id,$data)) {
			redirect(base_url()."mantenimiento/campana");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/campana/edit/".$id);
		}
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Productos_model->update($id,$data);
		echo "mantenimiento/productos";
	}

}