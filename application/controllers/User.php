<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('mpeminjaman');
	}
	
	public function index()
	{
		$this->plogin->get_login();
		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();

		 // echo "Selamat Datang ".$data['user']['name'];	
		$data['title']='Beranda';
		$this->load->view('templatesuser/header', $data);
		$this->load->view('templatesuser/sidebar', $data);
		$this->load->view('templatesuser/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templatesuser/footer');

	}
	public function barang()
	{

		$this->plogin->get_login();
		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mbarang'); 
		$data['title']='Daftar Barang';
		$data['barang']=$this->mbarang->tampil_data();
		$this->load->view('templatesuser/header', $data);
		$this->load->view('templatesuser/sidebar', $data);
		$this->load->view('templatesuser/topbar', $data);
		$this->load->view('user/vbarang', $data);
		$this->load->view('templatesuser/footer');

	}
	// public function peminjaman()
	// {

	// 	$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
	// 	 // echo "Selamat Datang ".$data['user']['name'];
	// 	$this->load->model('mpeminjaman'); 
	// 	$data['title']='Peminjaman';
	// 	$data['tr_pinjam']=$this->mpeminjaman->join('tr_pinjam','barang','tr_pinjam.id = barang.id');
	// 	$this->load->view('templatesuser/header', $data);
	// 	$this->load->view('templatesuser/sidebar', $data);
	// 	$this->load->view('templates/topbar', $data);
	// 	$this->load->view('user/vpeminjaman', $data);
	// 	$this->load->view('templatesuser/footer');

	// }
	public function peminjaman()
	{

		$this->plogin->get_login();
		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mpeminjaman'); 
		$data['title']='Peminjaman';
		$data['barang']=$this->mpeminjaman->get();
		$data['data']=$this->mpeminjaman->tampil_data();
		$this->load->view('templatesuser/header', $data);
		$this->load->view('templatesuser/sidebar', $data);
		$this->load->view('templatesuser/topbar', $data);
		$this->load->view('user/vpeminjaman', $data);
		$this->load->view('templatesuser/footer');

	}

	public function cetak_per_id($id){
		$data = [
				'title'=>'Cetak Peminjaman '.$this->session->userdata('name'),
				'data'=>$this->mpeminjaman->tampil_id($id),
			];
		$this->load->view('user/print_id',$data);
	}

			public function tambah()
	{
		$this->form_validation->set_rules('npp','Npp','required');
		$this->form_validation->set_rules('name','Nama','required');
		// $this->form_validation->set_rules('bidang','Bidang','required');
		$this->form_validation->set_rules('id_barang','Nama Barang','required');
		$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','required');
		// $this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required');
		if ($this->form_validation->run()==FALSE)
		{

		
		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mpeminjaman'); 
		$data['title']='Peminjaman';
		$data['tr_pinjam']=$this->mpeminjaman->input();
		$this->load->view('templatesuser/header', $data);
		$this->load->view('templatesuser/sidebar', $data);
		$this->load->view('templatesuser/topbar', $data);
		$this->load->view('user/vpeminjaman', $data);
		$this->load->view('templatesuser/footer');



		}else{

		$this->mpeminjaman->input();
		$this->session->set_flashdata('flash','Ditambah');
	
		redirect('user/peminjaman');

		}

	}

	public function print()
	{
	$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
	
	// $data['tr_pinjam']=$this->mpeminjaman->tampil_data();
	$this->load->view('user/tprint', $data);
	} 



}