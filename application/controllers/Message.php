<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Usuario_Model','Catalogo_model'));
	}

	function index()
	{
		if (!$this->Catalogo_model->session_existe()){
			$this->load->view('Home/login');
		}else{
			$data['usuario'] = $_SESSION['SES_usuario'][0];
			//print_r($data);
			$this->load->view('Message/index.php',$data);
		}
		
	}

}
