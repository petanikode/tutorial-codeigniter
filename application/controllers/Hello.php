<?php

class Hello extends CI_Controller
{
	public function index()
	{
		$this->load->view('hello_view');
	}
}
