<?php

class Welcome extends MY_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model("tabungan");
	}
	
	function index()
	{
		$tabungan = $this->tabungan->get_record(date("Y-m-d"),date("Y-m-d"));
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */