<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Usuario_Model'));
	}

	public function validar_usuario()
	{
		$result['status']=0;

		$email = $this->input->get_post('correo');
		$pass = $this->input->get_post('pass');

		$usuario = $this->Usuario_Model->valida_usuario($email,$pass);

		if (!empty($usuario)) {
			$_SESSION['SES_usuario'] = $usuario;
			$_SESSION['SES_usuario']['first_time'] = true;
			$result['status']=1;
		}

		echo json_encode($result);
	}

	public function CerrarSession()
	{
		if (!empty($_SESSION['SES_usuario']))
		{
			session_destroy();
		}
		Redirect("");
	}

	public function registro_usuario()
	{
		$result['status']=0;

		$correo = trim($this->input->get_post('correo'));
		$pass = trim($this->input->get_post('pass'));
		$nombre = trim($this->input->get_post('nombre'));
		$fecha_nac = trim($this->input->get_post('fecha_nac'));
		$sexo = trim($this->input->get_post('sexo'));
		$fono = trim($this->input->get_post('fono'));
		$raza = trim($this->input->get_post('raza'));
		$dueno = trim($this->input->get_post('dueno'));

		$consulta = $this->Usuario_Model->registro_usuario($correo,$pass,$nombre,$fecha_nac,$sexo,$fono,$raza,$dueno);

		if ($consulta['result']==0) {
			$result['status'] = 0;
		}
		else if ($consulta['result']==1) {
			$result['status'] = 1;
		}
		else {
			$result['status'] = 2;
		}

		echo json_encode($result);

	}

}

/* End of file Usuario.php */
/* Location: ./application/controllers/Usuario.php */
