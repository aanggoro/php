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
    echo "Selamat datang di codeigniter";
  }

  public function halamanprofil()
  {
    echo "Ini adalah halaman profil";
  }

}
