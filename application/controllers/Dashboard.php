<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  var $template  = array();
  var $data      = array();
	public function index()
	{
    $this->load->add_package_path(APPPATH.'third_party/ion_auth/');
    $this->load->library('ion_auth');

    if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
	
		//$this->load->view('welcome_message');
    $this->template['header']   = $this->load->view('layout/header', $this->data, true);
    $this->template['left']   = $this->load->view('layout/left', $this->data, true);
    //$this->template['content']   = $this->load->view('index', $this->data, true);
    $this->template['footer']   = $this->load->view('layout/footer', $this->data, true);

    $this->load->view('layout/header');
    $this->load->view('index', $this->template);
    $this->load->view('layout/footer');

	}

	public function alt(){
		die("DIE");
	}
}
