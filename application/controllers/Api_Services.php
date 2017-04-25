<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_Services extends CI_Controller {
	protected $allowed_http_methods = array('get', 'delete', 'post', 'put');
	public function __construct()
  {

		header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
		parent::__construct();
		$this->load->model('companies_model');
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
	{
		$result= $this->companies_model->getAll();
		echo json_encode($result);
		//$this->load->view('welcome_message');
	}

	public function getLines($companyId){
		$company= $this->companies_model->getById($companyId);
		$lines=$this->companies_model->getLinesByCompanyId($companyId,true);
		echo json_encode(array("company"=>$company,"lines"=>$lines));
	}

	public function getPaths($lineId=0){
		$line = $this->companies_model->getLineById($lineId);
		$paths= $this->companies_model->getPathsByLineId($lineId,true);
		echo json_encode(array("line"=>$line,"paths"=>$paths));
	}





}
