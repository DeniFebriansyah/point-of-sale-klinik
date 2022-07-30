<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Pegawai";

        if($this->input->post('simpan')){
            $data = [
                "nama_pegawai" => $this->input->post('np', true),
                "gender" => $this->input->post('g', true),
                "jabatan" => $this->input->post('j', true),
            ];
            $this->m_crud->save('pegawai', $data);
            $this->session->set_flashdata('flash','data pegawai behasil ditambahkan !!');
            redirect('admin/Pegawai');
        }
    $data['view'] = $this->m_crud->view('pegawai');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/tambah_pegawai', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
      $this->m_crud->delete('pegawai', 'id_pegawai', $id);
      $this->session->set_flashdata('flash', 'data pegawai berhasil dihapus !');
      redirect('admin/Pegawai');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'Edit Pegawai';
    if($this->input->post('update')){
        $data = [
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "gender" => $this->input->post('gender', true),
            "jabatan" => $this->input->post('jabatan', true),
    ];
        $this->m_crud->update('pegawai', 'id_pegawai', $id, $data);
        $this->session->set_flashdata('flash','data pegawai berhasil di update !!');
        redirect('admin/pegawai');
    }
    $data['view1'] = $this->m_crud->Viewget('pegawai', 'id_pegawai', $id);
    $data['view'] = $this->m_crud->view('pegawai');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('admin/Edit_pegawai', $data);
    $this->load->view('Templates/footer');
    
    }
}
