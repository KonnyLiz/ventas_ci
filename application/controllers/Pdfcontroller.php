<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfcontroller extends CI_Controller 
{
	//Controlador del reporte de Categorias
	function categorias()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulCategoria'] = $this->Pdf_model->getPdfcategoria();
 			$html= $this->load->view('pdf/categorias', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de capanas
 	function campanas()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulCampana'] = $this->Pdf_model->getPdfcampana();
 			$html= $this->load->view('pdf/campana', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de productos
 	function productos()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulProducto'] = $this->Pdf_model->getPdfproductos();
 			$html= $this->load->view('pdf/productos', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de productos
 	function clientes()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulClientes'] = $this->Pdf_model->getPdfclientes();
 			$html= $this->load->view('pdf/clientes', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de ventas
 	function ventas()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulVentas'] = $this->Pdf_model->getPdfventas();
 			$html= $this->load->view('pdf/ventas', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
}
