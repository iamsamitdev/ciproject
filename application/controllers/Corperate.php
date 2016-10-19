<?php 
/**
* Corperate Controller
*/
class Corperate extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['active_home'] = "class='active'";

		$this->load->view('corperate/header',$data);
		$this->load->view('corperate/index');
		$this->load->view('corperate/footer',$data);
	}

	public function about()
	{
		$data['title'] = "About";
		$data['active_about'] = "class='active'";

		$this->load->view('corperate/header',$data);
		$this->load->view('corperate/about');
		$this->load->view('corperate/footer',$data);
	}

	public function service()
	{
		$data['title'] = "Service";
		$data['active_service'] = "class='active'";

		$this->load->view('corperate/header',$data);
		$this->load->view('corperate/service');
		$this->load->view('corperate/footer',$data);
	}

	public function portfolio()
	{
		$data['title'] = "Portfolio";
		$data['active_portfolio'] = "class='active'";

		$this->load->view('corperate/header',$data);
		$this->load->view('corperate/portfolio');
		$this->load->view('corperate/footer',$data);
	}

	public function contact()
	{
		$data['title'] = "Contact";
		$data['active_contact'] = "class='active'";

		$this->load->view('corperate/header',$data);
		$this->load->view('corperate/contact');
		$this->load->view('corperate/footer',$data);
	}
}

