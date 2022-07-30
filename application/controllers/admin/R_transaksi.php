<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_transaksi extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Riwayat Transaksi";

        if($this->input->post('simpan')){
            $data = [
                "pasien" => $this->input->post('p', true),
                "obat" => $this->input->post('o', true),
                "jumlah_obat" => $this->input->post('jo', true),
                "total_harga" => $this->input->post('th', true),
                "tanggal" => $this->input->post('tgl', true),
            ];
            $this->m_crud->save('transaksi', $data);
            $this->session->set_flashdata('flash','transaksi behasil ditambahkan !!');
            redirect('admin/R_transaksi');
        }
    $data['view'] = $this->m_crud->view('transaksi');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('admin/riwayat_transaksi', $data);
    $this->load->view('Templates/footer');
    }
    // public function faktur($id)
    // {
    //     if($this->session->userdata('akses')=='1'){
    //         $data['title'] = "Transaksi";
    //         $data['view'] = $this->m_crud->Viewwhere('transaksi','id_transaksi', $id);
    //         // $data['view_detail_order'] = $this->m_crud->Viewwhere('query_detail_order', 'id_order', $id);
    //         $this->load->view('admin/lap_transaksi2_1', $data);
    //     }else{
    //         echo "Anda tidak berhak mengakses halaman ini";
    //     } 
    // }
    // public function print_laporan(){ 
    //     if($this->input->get('mulai')){
    //         $mulai = $this->input->get('mulai');
    //         $selesai = $this->input->get('selesai');
    //         $data['transaksi'] = $this->m_crud->Viewwhere('laporan_transaksi',"tanggal BETWEEN '$mulai 00:00:00' AND '$selesai 23:59:59'", '');
    //     }else{
    //         $data['transaksi'] = $this->m_crud->view('laporan_transaksi');
    //     }
    //     $this->load->view('admin/lap_transaksi2_1', $data);
    // }
    // public function hapus($id){
    //   $this->m_crud->delete('rekam_medis', 'id_data', $id);
    //   $this->session->set_flashdata('flash', 'rekam medis berhasil dihapus !');
    //   redirect('admin/Rekam_medis');
    //    }
    // public function edit($id){
    //  $data['status'] = 1;
    //  $data['title'] = 'Edit Rekam Medis';
    // if($this->input->post('update')){
    //     $data = [
    //         "pasien" => $this->input->post('pasien', true),
    //         "tanggal" => $this->input->post('tanggal', true),
    //         "subjektif" => $this->input->post('subjektif', true),
    //         "objektif" => $this->input->post('objektif', true),
    //         "asesmen" => $this->input->post('asesmen', true),
    //         "keluhan" => $this->input->post('keluhan', true),
    //         "keterangan" => $this->input->post('keterangan', true),
    // ];
    //     $this->m_crud->update('rekam_medis', 'id_data', $id, $data);
    //     $this->session->set_flashdata('flash','rekam medis berhasil di update !!');
    //     redirect('admin/Rekam_medis');
    // }
    // $data['view1'] = $this->m_crud->Viewget('rekam_medis', 'id_data', $id);
    // $data['view'] = $this->m_crud->view('rekam_medis');
    // $this->load->view('Templates/header', $data);
    // $this->load->view('Templates/sidebar', $data);
    // $this->load->view('admin/Edit_rm', $data);
    // $this->load->view('Templates/footer');
    
    // }
}
