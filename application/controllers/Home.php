<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  function index()
  {
    $this->load->view('Home/login');
  }

  function inicio()
  {
    $this->load->view('Home/index');
  }

}
