<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoM extends CI_Model {

	public function get_alumno(){
		$this->db->select("a.id_alumno, a.nombre, a.apellido, a.edad, s.nombre_sexo, c.nombre_carrera, ci.nombre_ciudad");
		$this->db->from("alumno a");
		$this->db->join("sexo s","s.id_sexo=a.id_sexo");
		$this->db->join("carrera c","c.id_carrera=a.id_carrera");
		$this->db->join("ciudad ci","ci.id_ciudad=a.id_ciudad");
		$exe=$this->db->get();
		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where("id_alumno", $id);
		$this->db->delete("alumno");
		if($this->db->affected_rows()>0){
			return "eli";
		}else{
			return false;
		}
	}

	public function get_sexo(){
		$exe=$this->db->get("sexo");
		return $exe->result();
	}

	public function get_carrera(){
		$exe=$this->db->get("carrera");
		return $exe->result();
	}


	public function get_ciudad(){
		$exe=$this->db->get("ciudad");
		return $exe->result();
	}

	public function set_alumno($datos){
		$this->db->set("nombre", $datos["nombre"]);
		$this->db->set(	"apellido", $datos["apellido"]);
		$this->db->set(	"edad", $datos["edad"]);
		$this->db->set("id_sexo", $datos["sexo"]);
		$this->db->set("id_carrera", $datos["carrera"]);
		$this->db->set("id_ciudad" , $datos["ciudad"]);
		$this->db->insert("alumno");

		if($this->db->affected_rows()>0){
			return "add";
		}else{
			return false;
		}
	}

	public function get_datos($id){
		$this->db->where("id_alumno", $id);
		$exe=$this->db->get("alumno");
		return $exe->result();
	}

	public function actualizar($datos){
		
		$this->db->set("nombre", $datos["nombre"]);
		$this->db->set(	"apellido", $datos["apellido"]);
		$this->db->set(	"edad", $datos["edad"]);
		$this->db->set("id_sexo", $datos["sexo"]);
		$this->db->set("id_carrera", $datos["carrera"]);
		$this->db->set("id_ciudad" , $datos["ciudad"]);
		$this->db->where("id_alumno", $datos["id_alumno"]);
		$this->db->update("alumno");

		if($this->db->affected_rows()>0){
			return "edi";
		}else{
			return false;
		}
	}



}