<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
    }
    
    public function index()
	{
        $this->load->view('login');
    }

    public function registrasi(){
        $this->load->view('registrasi');
    }

    public function proses_registrasi(){
        $input = $this->input->post(null, true);
        $this->Mlogin->proses_regis($input);
        $this->session->set_flashdata('msg', 'Registrasi Berhasil, Silahkan Login!');
        redirect('auth');
    }

    public function proses(){
        $user=$_POST['username'];
        $pass=md5($_POST['password']);
        $query=$this->Mlogin->cek_login($user,$pass);
        $cek=$query->num_rows();
        $data = $query->row();
        if($cek>0){
            if($data->role=="admin"){
                $this->session->set_userdata(array('user'=>$user, 'role'=>$data->role));
                redirect('dashboard');
            }
            else{
                $this->session->set_userdata(array('user'=>$user, 'role'=>$data->role));
                redirect('home');
            }
        }
        else{
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
