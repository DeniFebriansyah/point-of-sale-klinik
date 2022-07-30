<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Dokter";

        if($this->input->post('simpan')){
            $data = [
                "nama_dokter" => $this->input->post('d', true),
                "spesialis" => $this->input->post('s', true),
                "kategori" => $this->input->post('st', true),
            ];
            $this->m_crud->save('dokter', $data);
            $this->session->set_flashdata('flash','data dokter behasil ditambahkan !!');
            redirect('admin/Dokter');
        }
    $data['view'] = $this->m_crud->view('dokter');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/tambah_dokter', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
      $this->m_crud->delete('dokter', 'id_dokter', $id);
      $this->session->set_flashdata('flash', 'data dokter berhasil dihapus !');
      redirect('admin/Dokter');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'Edit Dokter';
    if($this->input->post('update')){
        $data = [
            "nama_dokter" => $this->input->post('nama_dokter', true),
            "kategori" => $this->input->post('status', true),     
        ];
        $this->m_crud->update('dokter', 'id_dokter', $id, $data);
        $this->session->set_flashdata('flash','data dokter berhasil di update !!');
        redirect('admin/dokter');
    }
    $data['view1'] = $this->m_crud->Viewget('dokter', 'id_dokter', $id);
    $data['view'] = $this->m_crud->view('dokter');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('admin/Edit_dokter', $data);
    $this->load->view('Templates/footer');
    
    }
}
