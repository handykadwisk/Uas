<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('mbarang');
		$this->load->model('mpeminjaman');
	}
	
	public function index()
	{

		$this->plogin->get_admin();
		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();

		 // echo "Selamat Datang ".$data['user']['name'];	
		$data['title']='Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');

	}

	//control load tabel barang
	public function barang()
	{

		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mbarang'); 
		$data['title']='Barang';
		$data['barang']=$this->mbarang->tampil_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/vbarang', $data);
		$this->load->view('templates/footer');

	}
		public function tambah()
	{
		$this->form_validation->set_rules('nama_barang','Nama Barang','required');
		$this->form_validation->set_rules('stock','Stock','required');
		if ($this->form_validation->run()==FALSE)
		{
	
		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mbarang'); 
		$data['title']='Barang';
		$data['barang']=$this->mbarang->tampil_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/vbarang', $data);
		$this->load->view('templates/footer');




		}else{

		$this->mbarang->input($data);
		$this->session->set_flashdata('flash','Ditambah');
	
		redirect('admin/barang');

		}
	}


		public function hapus($id)
	{
	$this->mbarang->hapusdata($id);
	$this->session->set_flashdata('flash','Dihapus');
	redirect('admin/barang');

	}
public function hapuspinjam($id)
	{
	$this->mpeminjaman->hapuspinjam($id);
	$this->session->set_flashdata('flash','Dihapus');
	redirect('admin/peminjaman');

	}
		public function editdata($id)
	{
		// $data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		//  // echo "Selamat Datang ".$data['user']['name'];
		// $this->load->model('M_barang'); 
		// $data['title']='Barang';
		
		$data['barang']=$this->mbarang->getBarangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/vbarang', $data);
		$this->load->view('templates/footer');
	}
	public function proses_editdata()
	{

		$this->mbarang->peditdata($id_barang);
		$this->session->set_flashdata('flash','Di Ubah');
		redirect('admin/barang');
	}
	public function peminjaman()
	{

		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mpeminjaman'); 
		$data['title']='Peminjaman';
		$data['data']=$this->mpeminjaman->tampil_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/vpeminjaman', $data);
		$this->load->view('templates/footer');

	}


	public function pengguna()
	{

		$data['user']=$this->db->get_where('user',['name'=>$this->session->userdata('name')])->row_array();
		 // echo "Selamat Datang ".$data['user']['name'];
		$this->load->model('mpengguna'); 
		$data['title']='Pengguna';
		$data['user']=$this->mpengguna->tampil_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates1/topbar', $data);
		$this->load->view('admin/vuser', $data);
		$this->load->view('templates/footer');

	}
	public function hapususer($id)
	{
	$this->mpengguna->hapusdata($id);
	$this->session->set_flashdata('flash','Dihapus');
	redirect('admin/pengguna');

	}
	public function proses_editdatauser()
	{

		$this->mpengguna->peditdatauser($id);
		$this->session->set_flashdata('flash','Di Ubah');
		redirect('admin/pengguna');
	}
	public function updatestatus($id_barang)
	{
		$data=array(
			'id_barang'=>$id_barang,
			'status'=>1

		);
		$this->mbarang->editstatus($data);
		$this->session->set_flashdata('flash','Status DiUbah');
		redirect('admin/barang');
	}
	public function updatestatuss($id_barang)
	{
		$data=array(
			'id_barang'=>$id_barang,
			'status'=>0

		);
		$this->mbarang->editstatus($data);
		$this->session->set_flashdata('flash','Status DiUbah');
		redirect('admin/barang');
	}

	public function acc($id_pinjam)
	{
		$data=array(
			'id_pinjam'=>$id_pinjam,
			'status'=>1

		);

		$this->mpeminjaman->editstatus($data);
		$pinjam=$this->db->get_where('tr_pinjam',['id_pinjam'=> $id_pinjam])->row();
		$barang=$this->db->get_where('barang',['id_barang'=> $pinjam->id_barang])->row();
		$stock = [
			'id_barang'=> $pinjam->id_barang,
			'stock'=>$barang->stock - 1,
		];
		$this->db->where('id_barang',$stock['id_barang']);
		$this->db->update('barang',$stock);



		$this->session->set_flashdata('flash','Status DiUbah');

		redirect('admin/peminjaman');
	}
	public function finish($id_pinjam)
	{
		$data=array(
			'id_pinjam'=>$id_pinjam,
			'status'=>2,
			'tgl_kembali'=>date('Y-m-d')

		);
		$this->mpeminjaman->editstatus($data);
		$pinjam=$this->db->get_where('tr_pinjam',['id_pinjam'=> $id_pinjam])->row();
		$barang=$this->db->get_where('barang',['id_barang'=> $pinjam->id_barang])->row();
		$stock = [
			'id_barang'=> $pinjam->id_barang,
			'stock'=>$barang->stock + 1,
		];
		$this->db->where('id_barang',$stock['id_barang']);
		$this->db->update('barang',$stock);
		$this->session->set_flashdata('flash','Status DiUbah');
		redirect('admin/peminjaman');
	}
	public function reject($id_pinjam)
	{
		$data=array(
			'id_pinjam'=>$id_pinjam,
			'status'=>3

		);
		$this->mpeminjaman->editstatus($data);
		$this->session->set_flashdata('flash','Status DiUbah');
		redirect('admin/peminjaman');
	}
	public function print()
	{
	$data['data']= $this->mpeminjaman->tampil_data();
	$this->load->view('admin/tprint', $data);
	} 
	public function printbarang()
	{
	$data['data']= $this->mbarang->tampil_data();
	$this->load->view('admin/tprintbarang', $data);
	} 
}