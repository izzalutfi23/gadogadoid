<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => 'Home | Gadogadoid'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/home');
        $this->load->view('home/_footer');
    }
    
    public function detail(){
        $data = array(
            'title' => 'Detail | Gadogadoid'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/detail');
        $this->load->view('home/_footer');
    }

    public function profil(){
        $data = array(
            'title' => 'Profil | Gadogadoid'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/profil');
        $this->load->view('home/_footer');
    }
}
