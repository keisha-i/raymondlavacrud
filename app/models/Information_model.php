<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Information_model extends Model {
	
    public function read() {

        return $this->db->table('rhp_users')->get_all();
    }

    public function create($rhp_last_name, $rhp_first_name, $rhp_email, $rhp_gender, $rhp_address) {
        $data = array(
            'rhp_last_name' => $rhp_last_name,
            'rhp_first_name' => $rhp_first_name,
            'rhp_email' => $rhp_email,
            'rhp_gender' => $rhp_gender,
            'rhp_address' => $rhp_address
        );

        return $this->db->table('rhp_users')->insert($data);

    }

    public function get_one($id) {
        return $this->db->table('rhp_users')->where('id', $id)->get();
    }

    public function update($rhp_last_name, $rhp_first_name, $rhp_email, $rhp_gender, $rhp_address, $id) {
        $data = array(
            'rhp_last_name' => $rhp_last_name,
            'rhp_first_name' => $rhp_first_name,
            'rhp_email' => $rhp_email,
            'rhp_gender' => $rhp_gender,
            'rhp_address' => $rhp_address
        );

        return $this->db->table('rhp_users')->where('id', $id)->update($data);
    }

    public function delete($id) {
        return $this->db->table('rhp_users')->where('id', $id)->delete();
    }
}
?>
