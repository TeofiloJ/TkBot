<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('character_model');
        $this->load->model('moveset_model');
    }

	public function index(){
		$this->load->view('api_index');
    }
    
    public function characters($name = null){
        $character_result = $this->character_model->get($name);

        $data = array(
            'character_result' => $character_result
        );

        $this->load->view('character_data', $data);
    }
}
