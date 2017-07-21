<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

  function index()
  {
    //$nombre = $this->input->get('name');

    $this->load->view('Profile/index');
  }

}
