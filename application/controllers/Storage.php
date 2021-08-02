<?php

class Storage extends CI_Controller
{
	public function index($file_name = null)
	{

		if (!$file_name) {
			show_error("You are not allowed to show this path", 403, "Error 403: Forbidden");
		}

		$file_path = APPPATH . 'storage/' . $file_name;

		if (!file_exists($file_path)) {
			show_404();
		}

		$file_name_array = explode(".", $file_name);
		$file_ext = end($file_name_array);

		$this->output
			->set_content_type($file_ext) // You could also use ".jpeg" which will have the full stop removed before looking in config/mimes.php
			->set_output(file_get_contents($file_path));
	}

	public function uploads($file_name = null)
	{

		
		if (!$file_name) {
			show_error("You are not allowed to show this path", 403, "Error 403: Forbidden");
		}
		
		$file_path = APPPATH . 'storage/uploads/' . $file_name;

		if (!file_exists($file_path)) {
			show_404();
		}

		$file_name_array = explode(".", $file_name);
		$file_ext = end($file_name_array);

		$this->output
			->set_content_type($file_ext) // You could also use ".jpeg" which will have the full stop removed before looking in config/mimes.php
			->set_output(file_get_contents($file_path));
	}

	
}
