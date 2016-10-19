<?php 
/**
* Test
*/
class Test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('My_model');
	}

	public function index()
	{
		$data['content'] = $this->My_model->loadData();

		$data['title'] = "My web page";

		$this->load->view('head',$data);
		$this->load->view('test',$data);
	}

	public function about()
	{
		echo "Hello from about method";
	}

}
