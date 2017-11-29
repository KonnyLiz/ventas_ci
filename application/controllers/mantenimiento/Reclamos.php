<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Reclamos_model");
	}

	public function index()
	{
		$data  = array(
			'reclamo' => $this->Clientes_model->getReclamos(),
	
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reclamos/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombres = $this->input->post("nombre2");
		$grupo  =  $this->input->post("grupo");
		$apellidos = $this->input->post("r2");
		$telefono = $this->input->post("r3");
		$dui = $this->input->post("r4");
		$nit = $this->input->post("r5");
		$direccion = $this->input->post("r6");
		$registro = $this->input->post("r7");
		$empresa = $this->input->post("r8");
		$estado = $this->input->post("r9");


		$data  = array(
			'grupo' => $grupo, 
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'dui' => $dui,
			'nit' => $nit,
			'direccion' => $direccion,
			'registro' => $registro,
			'empresa' => $empresa,
			'estado' => $estado
		);

		if ($this->Clientes_model->save($data)) {
			redirect(base_url()."mantenimiento/clientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/clientes/add");
		}
	}

	public function edit($id){
		$data  = array(
			'cliente' => $this->Clientes_model->getCliente($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idcliente = $this->input->post("id_cliente");
		$nombres = $this->input->post("nombre2");
		$grupo  =  $this->input->post("grupo");
		$apellidos = $this->input->post("r2");
		$telefono = $this->input->post("r3");
		$dui = $this->input->post("r4");
		$nit = $this->input->post("r5");
		$direccion = $this->input->post("r6");
		$registro = $this->input->post("r7");
		$empresa = $this->input->post("r8");
		$estado = $this->input->post("r9");


		$data  = array(
			'grupo' => $grupo, 
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'dui' => $dui,
			'nit' => $nit,
			'direccion' => $direccion,
			'registro' => $registro,
			'empresa' => $empresa,
			'estado' => $estado
		);

		if ($this->Clientes_model->update($idcliente,$data)) {
			redirect(base_url()."mantenimiento/clientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/clientes/edit/".$idcliente);
		}
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Clientes_model->update($id,$data);
		echo "mantenimiento/clientes";
	}
}