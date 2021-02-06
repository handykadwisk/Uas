<?php 
class Mbarang extends CI_model
{
	//mengambil data dari data base
	public function tampil_data()
	{
		return $this->db->get('barang')->result_array();
	}

	public function input($data)
	{
		$data=
		[
			"nama_barang"   => $this->input->post('nama_barang',true),
			"stock"			=>$this->input->post('stock',true),
			"status"=>1,
		];
		$this->db->insert('barang',$data);
	}
	public function hapusdata($id)
	{
		$this->db->where('id_barang',$id);
		$this->db->delete('barang');
	}
	public function getBarangById($id)
	{
		return $this->db->get_where('barang',['id_barang'=>$id_barang])->row_array();
	}

	public function peditdata($id_barang)
	{
		$data=[
			"nama_barang" => $this->input->post('nama_barang'),
			"stock"=>$this->input->post('stock'),
		];
		$this->db->where('id_barang',$this->input->post('id_barang'));
		$this->db->update('barang',$data);
	}
	public function editstatus($data)
	{
		$this->db->where('id_barang',$data['id_barang']);
		$this->db->update('barang',$data);		
	}
}