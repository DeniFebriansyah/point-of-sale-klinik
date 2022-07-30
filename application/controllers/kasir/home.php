<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_crud');
        if($this->session->userdata('masuk') != TRUE){
           $url=base_url();
           redirect($url);
       }
        }
	public function index()
	{
    $data['title'] = "Dashboard";
    $data['dokter'] =$this->m_crud->countData('dokter');
    $data['pegawai'] =$this->m_crud->countData('pegawai');
    $data['obat'] =$this->m_crud->countData('obat');
    $data['pasien'] =$this->m_crud->countData('pasien');
    if($this->session->userdata('akses')=='3'){
    $data['view'] = $this->m_crud->Viewwhere('user', 'id_level', '5');
    $data['view'] = $this->m_crud->Viewwhere('dokter', 'kategori', '1');
    $this->load->view('Templates/header',$data);
    $this->load->view('Templates/sidebar');
    $this->load->view('kasir/dashboard',$data);
    $this->load->view('Templates/footer');
}else{
    echo "Anda tidak berhak mengakses halaman ini";
  }
	}
}
