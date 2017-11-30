<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,
			'productos' => $this->Productos_model->getProductos(),
			"categorias" => $this->Categorias_model->getCategorias() 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio_e = $this->input->post("precio_e");
		$precio = $this->input->post("precio");
		$precio_m = $this->input->post("precio_m");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");

		$data  = array(
			'codigo' => $codigo, 
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'precio_entrada' => $precio_e,
			'precio' => $precio,
			'precio_mayoreo' => $precio_m,
			'stock' => $stock,
			'categoria_id' => $categoria,
			'estado' => "1"
		);

		if ($this->Productos_model->save($data)) {
			redirect(base_url()."mantenimiento/productos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/productos/add");
		}
	}

	public function edit($id){
		$data =array( 
			"producto" => $this->Productos_model->getProducto($id),
			"categorias" => $this->Categorias_model->getCategorias()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idproducto = $this->input->post("idproducto");
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio_e = $this->input->post("precio_e");
		$precio = $this->input->post("precio");
		$precio_m = $this->input->post("precio_m");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");
		$data  = array(
			'codigo' => $codigo, 
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'precio_entrada' => $precio_e,
			'precio' => $precio,
			'precio_mayoreo' => $precio_m,
			'stock' => $stock,
			'categoria_id' => $categoria,
		);
		if ($this->Productos_model->update($idproducto,$data)) {
			redirect(base_url()."mantenimiento/productos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/productos/edit/".$idproducto);
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