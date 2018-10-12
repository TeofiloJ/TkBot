<?php

class Character_model extends CI_Model {

    public $name;
    public $proper_name;
    public $online_webpage;
    public $portrait;

    public function get($name){
        $this->db->select('*');
        $this->db->from('characters');
        if($name != null && $name != ''){
            $this->db->where('characters.name', $name);
        }
        $query = $this->db->get();
        return $query->result();
    }
}

?>