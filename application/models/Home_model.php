<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!isset($_SESSION)) {
		session_start();
}

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	function cargar_publicacion($id){
		$sql = "select * from publicacion where id_usuario =$id order by fecha_crea desc";
		$consulta = $this->db->query($sql);
		//print_r($consulta->result_array());
		return $consulta->result_array();
	}

	function buscar_publicacion($id){
		$sql = "select * from publicacion where idpublicacion =$id";
		$consulta = $this->db->query($sql);
		//print_r($consulta->result_array());
		return $consulta->row();
	}

	function guardarpublicacion($id, $descripcion, $privacidad){
		$publicacion = array(
			'id_usuario' => $id,
			'descripcion' => $descripcion,
			'bl_priv' => $privacidad
		);
		$this->db->trans_begin();
		$this->db->insert('publicacion', $publicacion);
		$id = $this->db->insert_id('publicacion', $publicacion);
		$result['id'] = $id;
		//$result = $this->db->insert_string('publicacion', $publicacion);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$result['result']=0;
		}else{
			$this->db->trans_commit();
			$result['result']=1;
		}

		return $result;
	}
}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */
