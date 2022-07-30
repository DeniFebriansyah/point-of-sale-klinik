<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Pasien";

        if($this->input->post('simpan')){
            $data = [
                "nama" => $this->input->post('n', true),
                "alamat" => $this->input->post('a', true),
                "umur" => $this->input->post('u', true),
                "jenis_kelamin" => $this->input->post('jkel', true),
            ];
            $this->m_crud->save('pasien', $data);
            $this->session->set_flashdata('flash','data pasien behasil ditambahkan !!');
            redirect('admin/Pasien');
        }
    $data['view'] = $this->m_crud->view('pasien');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/tambah_pasien', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
      $this->m_crud->delete('pasien', 'id_pasien', $id);
      $this->session->set_flashdata('flash', 'data pasien berhasil dihapus !');
      redirect('admin/Pasien');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'Edit Pasien';
    if($this->input->post('update')){
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "umur" => $this->input->post('umur', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
        ];
        $this->m_crud->update('pasien', 'id_pasien', $id, $data);
        $this->session->set_flashdata('flash','data pasien berhasil di update !!');
        redirect('admin/pasien');
    }
    $data['view1'] = $this->m_crud->Viewget('pasien', 'id_pasien', $id);
    $data['view'] = $this->m_crud->view('pasien');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('admin/Edit_pasien', $data);
    $this->load->view('Templates/footer');
    
    }
}
