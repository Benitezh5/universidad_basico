function validaralumno(){
var nombre = document.getElementById("nombre").value;
var apellido = document.getElementById("apellido").value;
var edad = document.getElementById("edad").value;
var sexo = document.getElementById("sexo").value;
var carrera = document.getElementById("carrera").value;
var ciudad = document.getElementById("ciudad").value;

if(nombre.length==0){
	document.getElementById("nombre").style.boxShadow="0px 0px 15px red";
	document.getElementById("nombre").placeholder="Campo Requerido";
	return false;
}else{
	document.getElementById("nombre").style.boxShadow="0px 0px 15px green";
}

if(apellido.length==0){
	document.getElementById("apellido").style.boxShadow="0px 0px 15px red";
	document.getElementById("apellido").placeholder="Campo Requerido";
	return false;
}else{
	document.getElementById("apellido").style.boxShadow="0px 0px 15px green";
}

if(edad.length==0){
	document.getElementById("edad").style.boxShadow="0px 0px 15px red";
	document.getElementById("edad").placeholder="Campo Requerido";
	return false;
}else{
	document.getElementById("edad").style.boxShadow="0px 0px 15px green";
}

if(sexo==0){
	document.getElementById("sexo").style.boxShadow="0px 0px 15px red";
	return false;
}else{
	document.getElementById("sexo").style.boxShadow="0px 0px 15px green";
}

if(carrera==0){
	document.getElementById("carrera").style.boxShadow="0px 0px 15px red";

	return false;
}else{
	document.getElementById("carrera").style.boxShadow="0px 0px 15px green";
}

if(ciudad==0){
	document.getElementById("ciudad").style.boxShadow="0px 0px 15px red";

	return false;
}else{
	document.getElementById("ciudad").style.boxShadow="0px 0px 15px green";
}

	return true;
}