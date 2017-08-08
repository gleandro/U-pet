<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!isset($_SESSION)) { 
		session_start(); 
} 

class Catalogo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function session_existe(){

		if(!empty($_SESSION['SES_usuario']))
		{	
            return true;
        }
        return false;
	}	

	public function obtener_fecha_texto($fecha,$flag = 0){

		$anio = date("Y", strtotime($fecha));
		$mes = date("m", strtotime($fecha));  
		$dia = date("d", strtotime($fecha)); 
		$hora = date("H", strtotime($fecha)); 
		$minuto = date("i", strtotime($fecha)); 

		switch ($mes) {
			case '01':
				$mes = "Enero";
				break;
			case '02':
				$mes = "Febrero";
				break;
			case '03':
				$mes = "Marzo";
				break;
			case '04':
				$mes = "Abril";
				break;
			case '05':
				$mes = "Mayo";
				break;
			case '06':
				$mes = "Junio";
				break;
			case '07':
				$mes = "Julio";
				break;
			case '08':
				$mes = "Agosto";
				break;
			case '09':
				$mes = "Septiembre";
				break;
			case '10':
				$mes = "Octubre";
				break;
			case '11':
				$mes = "Noviembre";
				break;
			case '12':
				$mes = "Diciembre";
				break;	
		}
		if ($flag == 0) {
			return $dia." de ".$mes." de ".$anio;  
		}else{
			return $dia." de ".$mes." a las ".$hora.":".$minuto;  
		}
		
	}

	public function intervalo_fechas($fecha){
		date_default_timezone_set('America/Lima');

		$datei = $fecha;
		$datetimei = new datetime($datei);

		$datef = strftime( "%Y-%m-%d %H:%M:%S",time());
		$datetimef = new datetime($datef);

		$intervalo = $datetimef->diff($datetimei);

		if (date("Y", strtotime($datei)) != date("Y", strtotime($datef))) {
			$hora = $this->Catalogo_model->obtener_fecha_texto($fecha);
		}
		else if ($intervalo->d != 0) {
			$hora = $this->Catalogo_model->obtener_fecha_texto($fecha,1);
		}else{
			if ($intervalo->h !=0) {
				$hora = "Hace ".$intervalo->h." h";
			}
			else if ($intervalo->i !=0) {
				$hora = "Hace ".$intervalo->i." m";
			}
			else{
				$hora = "Hace un momento";
			}
		}
		return $hora;
	}

}

/* End of file Catalogo_model.php */
/* Location: ./application/models/Catalogo_model.php */