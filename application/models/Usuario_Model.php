<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!isset($_SESSION)) { 
    session_start(); 
} 

class Usuario_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function valida_usuario($correo,$contrasena){

    $sql = "select * from login where correo='$correo' and contrasena='$contrasena'";
    $consulta = $this->db->query($sql);

    return $consulta->result_array();
  }

  function registro_usuario($correo,$pass,$nombre,$fecha_nac,$sexo,$fono,$raza,$dueno){

    $result['result']=0;

    $usu = $this->db->query("select * from login where correo ='$correo'")->num_rows();

    if ($usu != 0) {
      $result['result']=2;
    }
    else {
      $usuario = array(
        'correo' => $correo,
        'contrasena' => $pass,
        'nombre' => $nombre,
        'fecha_nac' => $fecha_nac,
        'sexo' => $sexo,
        'telefono' => $fono,
        'raza' => $raza,
        'dueno' => $dueno,
      );
      $this->db->trans_begin();

      $this->db->insert('login', $usuario);

      if ($this->db->trans_status() === FALSE)
      {
        $this->db->trans_rollback();
        $result['result']=0;
      }
      else
      {
        $this->db->trans_commit();
        $result['result']=1;
      }

    }
    return $result;

  }

}
