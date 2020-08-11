<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mhome');
    }

    public function index()
	{
        $banner1 = $this->Mhome->get_banner(1)->row();
        $banner2 = $this->Mhome->get_banner(2)->row();
        $banner3 = $this->Mhome->get_banner(3)->row();
        $game = $this->Mhome->get_game()->result();
        $review = $this->Mhome->get_review()->result();
        $newgame = $this->Mhome->get_newgame()->row();
        $data = array(
            'title' => 'Home | Gadogadoid',
            'banner1' => $banner1,
            'banner2' => $banner2,
            'banner3' => $banner3,
            'game' => $game,
            'review' => $review,
            'newgame' => $newgame
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
