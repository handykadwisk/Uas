<?php 
class Mpengguna extends CI_model
{
	public function tampil_data()
	{
		return $this->db->get('user')->result_array();
	}
	public function hapusdata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
	}
	public function getuserById($id)
	{
		return $this->db->get_where('user',['id'=>$id])->row_array();
	}

	public function peditdatauser($id)
	{
		$data=[
			"npp"=>$this->input->post('npp'),
			"name" => $this->input->post('name'),
			"bidang"=>$this->input->post('bidang'),
			"nomor_hp"=>$this->input->post('nomor_hp'),
			
		];
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('user',$data);
	}
}



 ?>