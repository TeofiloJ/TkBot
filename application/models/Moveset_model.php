<?php

class Moveset_model extends CI_Model {

    public $id;
    public $command;
    public $hit_level;
    public $damage;
    public $start_up_frame;
    public $block_frame;
    public $hit_frame;
    public $counter_hit_frame;
    public $notes;
    public $character_name;

    public function get_by_character_name_by_input($character_name, $input){
        $this->db->select('*');
        $this->db->from('movesets');

        if($character_name != null && $character_name != ''){
            $this->db->where('movesets.character_name', $character_name);
        }

        if($character_name != null && $character_name != ''){
            $this->db->like('movesets.command', $input);
        }
        $query = $this->db->get();
        return $query->result();
    }
}

?>