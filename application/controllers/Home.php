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
    
    public function detail($id){
        $detail = $this->Mhome->get_game($id)->row();
        $komentar = $this->Mhome->get_komentar($id);
        $user = $this->session->userdata('user');
        $getuser = $this->Mhome->get_user($user)->row();
        $jmlkomen = $komentar->num_rows();
        $data = array(
            'title' => 'Detail | Gadogadoid',
            'detail' => $detail,
            'komentar' => $komentar->result(),
            'user' => $getuser,
            'jml' => $jmlkomen
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/detail');
        $this->load->view('home/_footer');
    }

    public function addkomen(){
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'id_game' => $this->input->post('id_game'),
            'komentar' => $this->input->post('komentar'),
            'tanggal' => date('Y-m-d')
        );
        $this->Mhome->insertkomen($data);
        $this->session->set_flashdata('msg', 'Komentar berhasil ditambahkan!');
        redirect('home/detail/'.$this->input->post('id_game'));
    }

    public function profil(){
        $user = $this->session->userdata('user');
        $getuser = $this->Mhome->get_user($user)->row();
        $data = array(
            'title' => 'Profil | Gadogadoid',
            'user' => $getuser
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/profil');
        $this->load->view('home/_footer');
    }

    public function lainnya(){
        $row=$this->db->get('game')->num_rows();
                
		$config['base_url'] = base_url('home/lainnya');
		$config['total_rows'] = $row;
		$config['per_page'] = 8;

		$config['first_link']       = 'First';
                $config['last_link']        = 'Last';
                $config['next_link']        = 'Next';
                $config['prev_link']        = 'Prev';
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
                $config['full_tag_close']   = '</ul></nav></div>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';

		$start=$this->uri->segment(3);
		$this->pagination->initialize($config);

		$par=array(
			'perpage'=>$config['per_page'],
			'start'=>$start
		);

        $game = $this->Mhome->get_gamelainnya($par)->result();
        $data = array(
            'title' => 'Game | Gadogadoid',
            'game' => $game
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/lainnya');
        $this->load->view('home/_footer');
    }

}
