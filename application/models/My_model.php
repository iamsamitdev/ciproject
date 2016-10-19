<?php 
/**
* Model My_model
*/
class My_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function loadData()
	{
		return "Hello data from Model";
	}
}


