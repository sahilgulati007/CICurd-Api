<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stud_model extends CI_Model {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function insert($data)
    {
        if ($this->db->insert("stud", $data)) {
            return true;
        }
    }
    public function get(){
        $query = $this->db->get("stud");
        $data['records'] = $query->result();
        return $data;
    }
    public function delete($id){
        if ($this->db->delete("stud", "sid = ".$id)) {
            return true;
        }
    }
    public function update($data,$old_roll_no) {
        $this->db->set($data);
        $this->db->where("sid", $old_roll_no);
        $this->db->update("stud", $data);
    }
}