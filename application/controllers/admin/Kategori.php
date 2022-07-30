<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Kategori";

        if($this->input->post('simpan')){
            $data = [
                "status" => $this->input->post('s', true),
            ];
            $this->m_crud->save('kategori', $data);
            $this->session->set_flashdata('flash','data behasil ditambahkan !!');
            redirect('admin/Kategori');
        }
    $data['view'] = $this->m_crud->view('kategori');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/tambah_kategori', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
      $this->m_crud->delete('kategori', 'id_kategori', $id);
      $this->session->set_flashdata('flash', 'data berhasil dihapus !');
      redirect('admin/Kategori');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'Edit Kategori';
    if($this->input->post('update')){
        $data = [
            "status" => $this->input->post('status', true),   
        ];
        $this->m_crud->update('kategori', 'id_kategori', $id, $data);
        $this->session->set_flashdata('flash','data berhasil di update !!');
        redirect('admin/Kategori');
    }
    $data['view1'] = $this->m_crud->Viewget('kategori', 'id_kategori', $id);
    $data['view'] = $this->m_crud->view('kategori');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('admin/Edit_kategori', $data);
    $this->load->view('Templates/footer');
    
    }
}
