<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoC extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("alumnoM");
	}

	public function index(){
		$datos["alumno"]=$this->alumnoM->get_alumno();
		$datos["sexo"]=$this->alumnoM->get_sexo();
		$datos["carrera"]=$this->alumnoM->get_carrera();
		$datos["ciudad"]=$this->alumnoM->get_ciudad();

		$datos["title"] = "ALUMNO Basico || Basico";
		$this->load->view("template/header",$datos);
		$this->load->view("alumnoV");
		$this->load->view("template/footer");
	}

	public function get_alumno(){
		$respuesta=$this->alumnoM->get_alumno();
		echo json_encode($respuesta);
	}

	public function eliminar($id){
		$respuesta=$this->alumnoM->eliminar($id);
		if($respuesta=="eli"){
			echo "<script>alert('Eliminado Exitosamente!');</script>";
		}else{
			echo "<script>alert('Error al Eliminar!');</script>";
		}
		redirect("alumnoC/index", "refresh");

	}

	public function get_sexo(){
		$respuesta=$this->alumnoM->get_sexo();
		echo json_encode($respuesta);
	}


	public function get_carrera(){
		$respuesta=$this->alumnoM->get_carrera();
		echo json_encode($respuesta);
	}

	public function get_ciudad(){
		$respuesta=$this->alumnoM->get_ciudad();
		echo json_encode($respuesta);
	}

	public function get_datos($id){
		$datos["alumno"]=$this->alumnoM->get_datos($id);
		$datos["sexo"]=$this->alumnoM->get_sexo();
		$datos["carrera"]=$this->alumnoM->get_carrera();
		$datos["ciudad"]=$this->alumnoM->get_ciudad();

		$datos["title"] = "ALUMNO || Basico";
		$this->load->view("template/header",$datos);
		$this->load->view("alumnoVact");
		$this->load->view("template/footer");
	}

	public function ingresar(){
		$datos["nombre"] =$this->input->post("nombre");
		$datos["apellido"] =$this->input->post("apellido");
		$datos["edad"] =$this->input->post("edad");
		$datos["sexo"] =$this->input->post("sexo");
		$datos["carrera"] =$this->input->post("carrera");
		$datos["ciudad"] =$this->input->post("ciudad");
		$respuesta=$this->alumnoM->set_alumno($datos);
		if($respuesta=="add"){
			echo "<script>alert('Ingresado Exitosamente!');</script>";
		}else{
			echo "<script>alert('Error al Insertar!');</script>";
		}
		redirect("alumnoC/index", "refresh");
	}



	public function actualizar(){
		$datos["id_alumno"] =$this->input->post("id_alumno");
		$datos["nombre"] =$this->input->post("nombre");
		$datos["apellido"] =$this->input->post("apellido");
		$datos["edad"] =$this->input->post("edad");
		$datos["sexo"] =$this->input->post("sexo");
		$datos["carrera"] =$this->input->post("carrera");
		$datos["ciudad"] =$this->input->post("ciudad");
		$respuesta=$this->alumnoM->actualizar($datos);
		if($respuesta=="edi"){
			echo "<script>alert('Actualizado Exitosamente!');</script>";
		}else{
			echo "<script>alert('Error al actualizar!');</script>";
		}
		redirect("alumnoC/index", "refresh");
	}






}