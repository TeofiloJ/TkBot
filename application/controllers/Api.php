<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('character_model');
        $this->load->model('moveset_model');
    }

	public function index(){
        $this->load->view('header');
        $this->load->view('menu');		
        $this->load->view('api_index');
		$this->load->view('footer');

    }
    
    public function characters($name = null){
        if($name != null){
            $name = urldecode($name);
        }

        $character_result = $this->character_model->get($name);
        $data = array(
            'data' => json_encode($character_result)
        );
        $this->load->view('data', $data);
    }

    public function movesets($fParam = null, $sParam = null){
        $moveset_result = array();

        if($fParam != null){
            $fParam = urldecode($fParam);
        }
        if($sParam != null){
            $sParam = urldecode($sParam);
        }

        if($sParam == null){
            //check if fParam is a name
            $character_result = $this->character_model->get($fParam);
            if(count($character_result)>0){
                //fParam is a name
                $moveset_result = $this->moveset_model->get_by_character_name_by_input($fParam, $sParam);
            }else{
                //fParam is the command
                $moveset_result = $this->moveset_model->get_by_character_name_by_input(null, $fParam);
            }
        }else{
            $moveset_result = $this->moveset_model->get_by_character_name_by_input($fParam, $sParam);
        }
        $data = array(
            'data' => json_encode($moveset_result)
        );

        $this->load->view('data', $data);
    }
}
