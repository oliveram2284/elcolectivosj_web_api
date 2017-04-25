<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {
	protected $allowed_http_methods = array('get', 'delete', 'post', 'put');
	public function __construct()  {


		parent::__construct();
		$this->load->model('companies_model');
    $this->load->library('form_validation');
          //$this->load->helper('url_helper');
  }

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
	public function index()
	{ $data=array();
		$result= $this->companies_model->getAll();

    $data['companies']=$result;
    $this->load->view('layout/header');
    $this->load->view('companies/index', $data);
    $this->load->view('layout/footer');
		//$this->load->view('welcome_message');
	}

  public function add(){
    $data=array();



    $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[12]');
    $this->form_validation->set_rules('overview', 'Overview', 'required');
    $this->form_validation->set_rules('email', 'Email', 'valid_email');

    if ($this->form_validation->run() === true){
      $result=$this->do_upload();
      $data=$this->input->post();
      $data['image']=$result['upload_data']['file_name'];

      if(  $this->companies_model->insert($data)){
        $this->session->set_flashdata('message', "Se agrego una nueva Empresa exitosamente");
        redirect('/companies', 'refresh');
      }else{
          $this->session->set_flashdata('message', "Error al intentar agregar una empresa");
      }
    }


    $this->load->view('layout/header');
    $this->load->view('companies/add', $data);
    $this->load->view('layout/footer');

  }


  function do_upload()
{

    $config['upload_path'] = './uploads/';
    $config['max_width']  = '1024';
    $config['max_height']  = '1024';
    $config["allowed_types"] = 'jpg|jpeg|png|gif';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = true;
    $config['remove_spaces'] = TRUE;
    if ( ! is_dir($config['upload_path']) ){
      mkdir($config['upload_path']);
      //die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    };
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('image')) {
        $this->upload->display_errors();
    } else {
        return array('upload_data' => $this->upload->data());
    }
}






}
