<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keranjang extends CI_Controller {
   
    public function __construct(){
         parent::__construct();
         $this->load->model('m_crud');
         if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
         }

	public function index(){

        $data['title'] = "Keranjang";

        if($this->input->post('simpan')){
            $id=$this->input->post('o', true);
            $query = $this->db->query("SELECT * FROM obat WHERE id_obat='$id' ")->row_array();
            $jumlahlama=$query['jumlah'];
            $jumlahobat=$this->input->post('jo', true);
            
            $harga=$query['harga'];
            $totalharga=$jumlahobat*$harga;
            $jumlahuang=$this->input->post('ju', true);
            $kembalian=$jumlahuang-$totalharga;
            if($jumlahobat>$jumlahlama){
                $this->session->set_flashdata('flash','stok obat kurang !!');
                redirect('kasir/keranjang');
            }elseif($jumlahobat<=$jumlahlama){
                $jumlahbaru=$jumlahlama-$jumlahobat;
                $dat=[
                    "jumlah"=>$jumlahbaru
                ];
                $this->m_crud->update('obat','id_obat',$id, $dat);

                $data = [
                    "pasien" => $this->input->post('p', true),
                    "obat" => $this->input->post('o', true),
                    "jumlah_obat" => $this->input->post('jo', true),
                    "total_harga" => $totalharga,
                    "jumlah_uang" => $this->input->post('ju', true),
                    "kembalian" => $kembalian,
                ];
                $this->m_crud->save('keranjang', $data);
                $this->session->set_flashdata('flash','data behasil ditambahkan !!');
            redirect('kasir/keranjang');

            }
           

            
            
        }
    $data['view'] = $this->m_crud->view('keranjang');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar');
    $this->load->view('kasir/tambah_keranjang', $data);
    $this->load->view('Templates/footer');
    }
    public function hapus($id){
        $obat = $this->db->query("SELECT * FROM keranjang WHERE id_keranjang='$id' ")->row_array();
        $id_obat=$obat['obat'];
        $query = $this->db->query("SELECT * FROM obat WHERE id_obat='$id_obat' ")->row_array();
        $jumlahlama=$query['jumlah'];
        $jumlah=$obat['jumlah_obat'];
        $jumlahbaru=$jumlah+$jumlahlama;

$dat=[
                       "jumlah"=>$jumlahbaru
                   ];
                   $this->m_crud->update('obat','id_obat',$id_obat, $dat);

      $this->m_crud->delete('keranjang', 'id_keranjang', $id);
      $this->session->set_flashdata('flash', 'data berhasil dihapus !');
      redirect('kasir/keranjang');
       }

       public function bayar($id){
        $obat = $this->db->query("SELECT * FROM keranjang WHERE id_keranjang='$id' ")->row_array();
        $pasien=$obat['obat'];

        $data = [
            "pasien" => $obat['pasien'],
            "obat" => $obat['obat'],
            "jumlah_obat" => $obat['jumlah_obat'],
            "total_harga" => $obat['total_harga'],
            "tanggal" => date('d-m-Y'),
           
        ];
        $this->m_crud->save('transaksi', $data);     
      $this->m_crud->delete('keranjang', 'id_keranjang', $id);
      $this->session->set_flashdata('flash', 'sukses melakukan transaksi !');
      redirect('kasir/keranjang');
       }
    public function edit($id){
     $data['status'] = 1;
     $data['title'] = 'Keranjang';
    if($this->input->post('update')){
        $obat = $this->db->query("SELECT * FROM keranjang WHERE id_keranjang='$id' ")->row_array();
        $id_obat=$obat['obat'];
        $jumlah_keranjang=$obat['jumlah_obat'];
        $query = $this->db->query("SELECT * FROM obat WHERE id_obat='$id_obat' ")->row_array();
        $jumlahlama=$query['jumlah'];
        $jumlahobat=$this->input->post('jumlah_obat', true);     
        $harga=$query['harga'];
        $totalharga=$jumlahobat*$harga;
        $jumlahuang=$this->input->post('jumlah_uang', true);
        $kembalian=$jumlahuang-$totalharga;

        if($jumlahobat>$jumlah_keranjang){
            $jum=$jumlahobat-$jumlah_keranjang;
               
               if($jumlahlama<$jum)
               {
                   $this->session->set_flashdata('flash','stok obat kurang !!');
                   redirect('kasir/keranjang');
               }else{
                   $jumlahbaru=$jumlahlama-$jum;
                   $dat=[
                       "jumlah"=>$jumlahbaru
                   ];
                   $this->m_crud->update('obat','id_obat',$id_obat, $dat);
                   $data = [
                       "jumlah_obat" => $this->input->post('jumlah_obat', true),
                       "total_harga" => $totalharga,
                       "jumlah_uang" => $this->input->post('jumlah_uang', true),
                       "kembalian" => $kembalian,
                   ];
                   $this->m_crud->update('keranjang', 'id_keranjang', $id, $data);
                   $this->session->set_flashdata('flash','data behasil ditambahkan !!');
                   redirect('kasir/keranjang');
               
               }

            }if($jumlahobat<$jumlah_keranjang){
            $jum=$jumlah_keranjang-$jumlahobat;
            $jumlahbaru=$jumlahlama+$jum;
                   $dat=[
                       "jumlah"=>$jumlahbaru
                   ];
                   $this->m_crud->update('obat','id_obat',$id_obat, $dat);
                   $data = [
                       "jumlah_obat" => $this->input->post('jumlah_obat', true),
                       "total_harga" => $totalharga,
                       "jumlah_uang" => $this->input->post('jumlah_uang', true),
                       "kembalian" => $kembalian,
                   ];
                   $this->m_crud->update('keranjang', 'id_keranjang', $id, $data);
                   $this->session->set_flashdata('flash','data behasil ditambahkan !!');
                   redirect('kasir/keranjang');
               
        }else{
          
            $data = [
                "jumlah_obat" => $this->input->post('jumlah_obat', true),
                "total_harga" => $totalharga,
                "jumlah_uang" => $this->input->post('jumlah_uang', true),
                "kembalian" => $kembalian,
            ];
            $this->m_crud->update('keranjang', 'id_keranjang', $id, $data);
            $this->session->set_flashdata('flash','data behasil ditambahkan !!');
            redirect('kasir/keranjang');
        }
                       

    }
    $data['view1'] = $this->m_crud->Viewget('keranjang', 'id_keranjang', $id);
    $data['view'] = $this->m_crud->view('keranjang  ');
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/sidebar', $data);
    $this->load->view('kasir/Edit_keranjang', $data);
    $this->load->view('Templates/footer');
    
    }
}
