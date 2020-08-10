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

    public function banner(){
        $banner = $this->Mdashboard->get_banner()->result();
        $data = array(
            'title' => 'Banner | Gadogadoid',
            'banner' => $banner
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/banner');
        $this->load->view('admin/_footer');
    }

    public function editbanner($id){
        $banner = $this->Mdashboard->get_banner($id)->row();
        $data = array(
            'title' => 'Edit Banner | Gadogadoid',
            'banner' => $banner
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/edit_banner');
        $this->load->view('admin/_footer');
    }

    public function proses_editbanner(){
        $config['upload_path']          = './asset/images/banner';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        $id = $this->input->post('id');

        if ( ! $this->upload->do_upload('foto'))
        {
            $data = array(
                'nama' => $this->input->post('nama')
            );

            $this->Mdashboard->edit_banner($data, $id);
            $this->session->set_flashdata('msg', 'Banner berhasil diubah!');
            redirect('dashboard/banner');
        }
        else
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'foto' => $_FILES['foto']['name']
            );

            $this->Mdashboard->edit_banner($data, $id);
            $this->session->set_flashdata('msg', 'Banner berhasil diubah!');
            redirect('dashboard/banner');
        }
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

    public function addgame(){
        $config['upload_path']          = './asset/images/game';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            echo "Gagal! Ukuran Foto Terlalu Besar, max 2mb";
        }
        else
        {
            $data = array(
                'nama_game' => $this->input->post('nama_game'),
                'foto' => $_FILES['foto']['name'],
                'keterangan' => $this->input->post('keterangan'),
                'developer' => $this->input->post('developer'),
                'publisher' => $this->input->post('publisher'),
                'realease' => $this->input->post('realease'),
                'tag' => $this->input->post('tag'),
                'rating' => $this->input->post('rating')
            );

            $this->Mdashboard->insert_game($data);
            $this->session->set_flashdata('msg', 'Data berhasil ditambahkan!');
            redirect('dashboard/game');
        }
    }

    public function editgame($id){
        $game = $this->Mdashboard->getgame($id)->row();
        $data = array(
            'title' => 'Edit Game | Gadogadoid',
            'game' => $game
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/edit_game');
        $this->load->view('admin/_footer');
    }

    public function proses_editgame(){
        $config['upload_path']          = './asset/images/game';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $id = $this->input->post('id');

        if ( ! $this->upload->do_upload('foto'))
        {
            $data = array(
                'nama_game' => $this->input->post('nama_game'),
                'keterangan' => $this->input->post('keterangan'),
                'developer' => $this->input->post('developer'),
                'publisher' => $this->input->post('publisher'),
                'realease' => $this->input->post('realease'),
                'tag' => $this->input->post('tag'),
                'rating' => $this->input->post('rating')
            );

            $this->Mdashboard->update_game($data, $id);
            $this->session->set_flashdata('msg', 'Data berhasil diedit!');
            redirect('dashboard/game');
        }
        else
        {
            $data = array(
                'nama_game' => $this->input->post('nama_game'),
                'foto' => $_FILES['foto']['name'],
                'keterangan' => $this->input->post('keterangan'),
                'developer' => $this->input->post('developer'),
                'publisher' => $this->input->post('publisher'),
                'realease' => $this->input->post('realease'),
                'tag' => $this->input->post('tag'),
                'rating' => $this->input->post('rating')
            );

            $this->Mdashboard->update_game($data, $id);
            $this->session->set_flashdata('msg', 'Data berhasil diedit!');
            redirect('dashboard/game');
        }
    }

    public function delgame($id){
        $this->Mdashboard->deletegame($id);
        $this->session->set_flashdata('msg', 'Data telah dihapus!');
        redirect('dashboard/game');
    }

    public function spesifikasi(){
        $spek = $this->Mdashboard->getspek()->result();
        $game = $this->Mdashboard->getgame()->result();
        $data = array(
            'title' => 'Spesifikasi | Gadogadoid',
            'spek' => $spek,
            'game' => $game
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/spesifikasi');
        $this->load->view('admin/_footer');
    }

    public function addspek(){
        $input = $this->input->post(null, false);
        $this->Mdashboard->insertspek($input);
        $this->session->set_flashdata('msg', 'Data berhasil ditambahkan!');
        redirect('dashboard/spesifikasi');
    }

    public function editspek($id){
        $spek = $this->Mdashboard->getspek($id)->row();
        $game = $this->Mdashboard->getgame()->result();
        $data = array(
            'title' => 'Spesifikasi | Gadogadoid',
            'spek' => $spek,
            'game' => $game
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/edit_spek');
        $this->load->view('admin/_footer');
    }

    public function proses_editspek(){
        $id = $this->input->post('id');
        $input = $this->input->post(null, false);
        $this->Mdashboard->editspek($input, $id);
        $this->session->set_flashdata('msg', 'Data berhasil diedit!');
        redirect('dashboard/spesifikasi');
    }

    public function new(){
        $new_game = $this->Mdashboard->get_newgame()->result();
        $data = array(
            'title' => 'New Game | Gadogadoid',
            'new' => $new_game
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/newgame');
        $this->load->view('admin/_footer');
    }

    public function editnew($id){
        $new_game = $this->Mdashboard->get_newgame($id)->row();
        $data = array(
            'title' => 'Edit New Game | Gadogadoid',
            'new' => $new_game
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/edit_newgame');
        $this->load->view('admin/_footer');
    }

    public function proses_editngame(){
        $config['upload_path']          = './asset/images/new';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        $id = $this->input->post('id');

        if ( ! $this->upload->do_upload('foto'))
        {
            $data = array(
                'nama' => $this->input->post('nama')
            );

            $this->Mdashboard->edit_ngame($data, $id);
            $this->session->set_flashdata('msg', 'Data berhasil diubah!');
            redirect('dashboard/new');
        }
        else
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'foto' => $_FILES['foto']['name']
            );

            $this->Mdashboard->edit_ngame($data, $id);
            $this->session->set_flashdata('msg', 'Data berhasil diubah!');
            redirect('dashboard/new');
        }
    }

    public function user(){
        $user = $this->Mdashboard->get_user()->result();
        $data = array(
            'title' => 'User | Gadogadoid',
            'user' => $user
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/_footer');
    }

    public function adduser(){
        $input = $this->input->post(null, false);
        $this->Mdashboard->insert_user($input);
        $this->session->set_flashdata('msg', 'Data user telah ditambahkan!');
        redirect('dashboard/user');
    }

    public function deluser($id){
        $this->Mdashboard->del_user($id);
        $this->session->set_flashdata('msg', 'Data user berhasil dihapus!');
        redirect('dashboard/user');
    }
    
}
