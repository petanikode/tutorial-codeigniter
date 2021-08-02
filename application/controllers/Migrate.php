<?php

class Migrate extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

	public function index()
	{

		if (!is_cli()) {
			show_error("Not Allowed", 403, "Error 403 Forbidden");
		}


		$migrate = $this->migration->latest();

		if ($migrate === FALSE) {
			show_error($this->migration->error_string());
		}

		echo "✅ DB Migration current version: " . $migrate;
	}

	public function rollback($version = null)
	{
		if (!is_cli()) {
			show_error("Not Allowed", 403, "Error 403 Forbidden");
		}

		$rollback = $this->migration->version($version);
		if ($rollback === FALSE) {
			show_error($this->migration->error_string());
		}
		echo "Rollback to version: " . $rollback;
	}
}
