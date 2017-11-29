<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_model extends CI_Model
{

 	function getPdfcategoria()
 	{
   		$this->db->from('categorias');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfcampana()
 	{
   		$this->db->from('campanas');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfproductos()
 	{
   		$this->db->from('productos');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfclientes()
 	{
   		$this->db->from('clientes');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfventas()
 	{
   		$this->db->from('ventas');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
}
