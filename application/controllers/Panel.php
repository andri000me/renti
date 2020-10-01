<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

		$this->load->model('Panelmodel');
	}

    public function index()
    {

    	if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    		$this->load->view('templates/panel_header');
		    $this->load->view('templates/panel_menu');
		    $this->load->view('pub/home');
		    $this->load->view('templates/panel_footer');
    	}
    	
    }

    public function prodi(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role_id') != '2') {
    		redirect('Auth');
    	}else{

    		$data['prodi'] = $this->Panelmodel->getprodi()->result();
    		$this->load->view('templates/panel_header');
		    $this->load->view('templates/panel_menu');
		    $this->load->view('prodi/index',$data);
		    $this->load->view('templates/panel_footer');
    	}
    }

    public function mahasiswa(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role_id') != '2') {
    		redirect('Auth');
    	}else{
    		
    		$this->load->view('templates/panel_header');
		    $this->load->view('templates/panel_menu');
		    $this->load->view('templates/panel_footer');
    	}
    }
    public function univ(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role_id') != '2') {
    		redirect('Auth');
    	}else{
    		
    		$this->load->view('templates/panel_header');
		    $this->load->view('templates/panel_menu');
		    $this->load->view('templates/panel_footer');
    	}
    }
}
