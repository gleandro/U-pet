<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{

  function index()
  {
    $this->load->view('Message/index.php');
  }

}