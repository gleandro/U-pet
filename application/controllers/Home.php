<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Usuario_Model', 'Catalogo_model', 'Home_model'));
  }

  public function index()
  {
    if (!$this->Catalogo_model->session_existe()) {
      $this->load->view('Home/login');
    } else {
      //print_r($_SESSION['SES_usuario']);
      $data['usuario'] = $_SESSION['SES_usuario'][0];
      $data['first_time'] = $_SESSION['SES_usuario']['first_time'];
      $data['publicaciones'] = $this->Home_model->cargar_publicacion($data['usuario']['id_login']);
      $_SESSION['SES_usuario']['first_time'] = false;
      $this->load->view('Home/index', $data);
    }
  }

  public function perfil($id = 0){
    if ($id != 0) {
      $data['usuario'] = $this->Usuario_Model->cargar_datos($id)[0];
      $data['id'] = $id;
      $data['correo'] = $this->Usuario_Model->obtener_correo($id)[0]['correo'];
      //print_r($data);
      $this->load->view('Profile/Index', $data);
    }

  }

  public function guardarpublicacion()
  {
    $result['status'] = 0;

    $id = $this->input->post('codigo', true);
    $descripcion = $this->input->post('descripcion', true);
    $privacidad  = $this->input->post('privacidad', true);

    $consulta = $this->Home_model->guardarpublicacion($id, $descripcion, $privacidad);

    if ($consulta['result'] == 1) {
      $result['status'] = 1;
      $result['publicacion'] = $this->Home_model->buscar_publicacion($consulta['id']);
      $result['publicacion']->fecha_crea = $this->Catalogo_model->intervalo_fechas($result['publicacion']->fecha_crea);
    }

    echo json_encode($result);
  }

  public function cargar_publicaciones()
  {

    $result['status'] = 0;
    $id = $this->input->post('codigo');
    $publicaciones  = $this->Home_model->cargar_publicacion($id);

    for ($i = 0; $i < count($publicaciones); $i++) {
      $publicaciones[$i]['fecha_crea'] = $this->Catalogo_model->intervalo_fechas($publicaciones[$i]['fecha_crea']);
    }

    if (!empty($publicaciones)) {
      $result['status'] = 1;
      $result['publicaciones'] = $publicaciones;
    }

    echo json_encode($result);
  }

}
