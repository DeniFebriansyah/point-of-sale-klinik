<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_medis extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Rekam_medis";

        if($this->input->post('simpan')){
            $data = [
                "pasien" => $this->input->post('p', true),
                "tanggal" => $this->input->post('tgl', true),
                "subjektif" => $this->input->post('sb', true),
                "objektif" => $this->input->post('ob', true),
                "asesmen" => $this->input->post('ass', true),
                "keluhan" => $this->input->post('kl', true),
                "keterangan" => $this->input->post('ket', true),
            ];
            $this->m_crud->save('rekam_medis', $data);
            $this->session->set_flashdata('flash','rekam medis behasil ditambahkan !!');
            redirect('admin/Rekam_medis');
        }
    $data['view'] = $this->m_crud->view('rekam_medis');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/tambah_rm', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
      $this->m_crud->delete('rekam_medis', 'id_data', $id);
      $this->session->set_flashdata('flash', 'rekam medis berhasil dihapus !');
      redirect('admin/Rekam_medis');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'Edit Rekam Medis';
    if($this->input->post('update')){
        $data = [
            "pasien" => $this->input->post('pasien', true),
            "tanggal" => $this->input->post('tanggal', true),
            "subjektif" => $this->input->post('subjektif', true),
            "objektif" => $this->input->post('objektif', true),
            "asesmen" => $this->input->post('asesmen', true),
            "keluhan" => $this->input->post('keluhan', true),
            "keterangan" => $this->input->post('keterangan', true),
    ];
        $this->m_crud->update('rekam_medis', 'id_data', $id, $data);
        $this->session->set_flashdata('flash','rekam medis berhasil di update !!');
        redirect('admin/Rekam_medis');
    }
    $data['view1'] = $this->m_crud->Viewget('rekam_medis', 'id_data', $id);
    $data['view'] = $this->m_crud->view('rekam_medis');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('admin/Edit_rm', $data);
    $this->load->view('Templates/footer');
    
    }
}
