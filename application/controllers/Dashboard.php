<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Mdashboard');

		if($this->session->userdata('user') && $this->session->userdata('role')=="admin"){
            
        }
        else{
            redirect('auth');
        }
    }
    
    public function index()
	{
        $data = array(
            'title' => 'Dashboard | Gadogadoid'
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/_footer');
    }

    public function game(){
        $game = $this->Mdashboard->getgame()->result();
        $data = array(
            'title' => 'Game | Gadogadoid',
            'game' => $game
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/game');
        $this->load->view('admin/_footer');
    }
}
