<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obat extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Obat";

        if($this->input->post('simpan')){
            $data = [
                "nama_obat" => $this->input->post('nama_obat', true),
                "status_obat" => $this->input->post('status_obat', true),
                "harga" => $this->input->post('harga', true),
                "jumlah" => $this->input->post('jumlah', true),
            ];
            $this->m_crud->save('obat', $data);
            $this->session->set_flashdata('flash','data behasil ditambahkan !!');
            redirect('admin/obat');
        }
    $data['view'] = $this->m_crud->view('obat');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/tambah_obat', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
      $this->m_crud->delete('obat', 'id_obat', $id);
      $this->session->set_flashdata('flash', 'data obat berhasil dihapus !');
      redirect('admin/obat');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'obat';
    if($this->input->post('update')){
        $data = [
            "nama_obat" => $this->input->post('nama_obat', true),
            "status_obat" => $this->input->post('status_obat', true),
            "harga" => $this->input->post('harga', true),
            "jumlah" => $this->input->post('jumlah', true),
        ];
        $this->m_crud->update('obat', 'id_obat', $id, $data);
        $this->session->set_flashdata('flash','data obat berhasil di update !!');
        redirect('admin/obat');
    }
    $data['view1'] = $this->m_crud->Viewget('obat', 'id_obat', $id);
    $data['view'] = $this->m_crud->view('obat');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('admin/Edit_obat', $data);
    $this->load->view('Templates/footer');
    
    }
}
