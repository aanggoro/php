<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data = array(
      'nama' => 'anggoro',
      'status' => 'mahasiswa'
    );

    $this->header();
    $this->load->view('index', $data);
    $this->footer();
  }

  public function halamanprofil()
  {
    echo "Ini adalah halaman profil";
  }

  public function controllerNama($value='')
  {
    echo "nama saya ".$value;
  }

  public function header()
  {
    $this->load->view('header');
  }

  public function footer()
  {
    $this->load->view('footer');
  }

}
