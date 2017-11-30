<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_model extends CI_Model {
	public function getPermisos(){
		$this->db->select("p.*,m.nombre as menu, r.nombre as rol");
		$this->db->from("permisos p");
		$this->db->join("roles r", "p.rol_id = r.id");
		$this->db->join("menus m", "p.menu_id = m.id");
		$this->db->where("estado=1"); 
		$resultados=$this->db->get();
		return $resultados->result();
	}
			public function getMenus(){
		$resultados = $this->db->get("menus");
		return $resultados ->result();
	}

	public function save($data){
		return $this->db->insert("permisos",$data);
	}

	public function getPermiso($id){
		$this->db->where("id",$id);
		$resultados = $this->db->get("permisos");
		return $resultados->row();
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("permisos",$data);
	}
	public function delete($id){
		$this->db->where("id",$id);
		return $this->db->delete ("permisos");
	}
}