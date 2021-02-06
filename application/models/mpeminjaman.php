<?php 
class Mpeminjaman extends CI_model
{
	// public function get($id = null)
	// { 
	// 	$this->db->from('tr_pinjam');
	// 	$this->db->join('barang','barang.id_barang=tr_pinjam.id_barang');
	// 		if ($id != null) {
	// 			$this->db->where('id_pinjam',$id);
	// 		}
	// 		$query


	// 	// return $this->db->get('tr_pinjam')->result_array();
	// }
	public function tampil_data(){
		return $this->db->select('tr_pinjam.*,barang.nama_barang')
						->from('tr_pinjam')
						->join('barang','barang.id_barang = tr_pinjam.id_barang','LEFT')
						->order_by('tr_pinjam.id_pinjam','DESC')
						->get()->result();
	}

	public function tampil_id($id){
		return $this->db->select('tr_pinjam.*,barang.nama_barang')
						->from('tr_pinjam')
						->join('barang','barang.id_barang = tr_pinjam.id_barang','LEFT')
						->where('tr_pinjam.id_pinjam',$id)
						->get()->row();
	}

	public function join($table,$tbljoin,$join)
	{
		$this->db->join($tbljoin,$join);
		return $this->db->get($table);
	}
	 public function get()
	 {
	 	$query = $this->db->query("SELECT * FROM barang ORDER BY nama_barang ASC");
	 	return $query->result();
	 }
	public function input()
	{
		$data=
		[
			"npp"   => $this->input->post('npp',true),
			"name"			=>$this->input->post('name',true),
			// "bidang"   => $this->input->post('bidang',true),
			"id_barang"   => $this->input->post('id_barang',true),
			"tgl_pinjam"   => $this->input->post('tgl_pinjam',true),
			// "tgl_kembali"   => $this->input->post('tgl_kembali',true),
			"status"=>0,
		];
		$this->db->insert('tr_pinjam',$data);
		

	}
	public function editstatus($data)
	{
		$this->db->where('id_pinjam',$data['id_pinjam']);
		$this->db->update('tr_pinjam',$data);		
	}
	public function hapuspinjam($id)
	{
		$this->db->where('id_pinjam',$id);
		$this->db->delete('tr_pinjam');
	}
}



 ?>