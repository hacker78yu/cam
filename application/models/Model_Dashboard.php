<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model Model_Dashboard
*/
class Model_Dashboard extends CI_Model 
{

	public function count_pop() {
		return $this->db->count_all('pop');
	}

	public function count_backbone() {
		return $this->db->count_all('backbone');
	}

	public function count_backbone_detail() {
		return $this->db->count_all('backbone_detail');
	}

	public function count_vlan() {
		return $this->db->count_all('vlan');
	}

	public function count_switch() {
		return $this->db->count_all('switch');
	}

	public function backbone_down() {
		return $this->db->where('status_link','DOWN')->get('backbone')->result();
	}

	public function switch_down() {
		return $this->db->where('status_switch','DOWN')->get('switch')->result();
	}
}

/* End of file Model_Dashboard.php */
/* Location: ./application/models/Model_Dashboard.php */