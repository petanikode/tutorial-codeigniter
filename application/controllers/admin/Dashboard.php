<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$this->load->model('article_model');
		$this->load->model('feedback_model');
		
		$data = [
			"current_user" => $this->auth_model->current_user(),
			"article_count" => $this->article_model->count(),
			"feedback_count" => $this->feedback_model->count()
		];

		$this->load->view('admin/dashboard.php', $data);
	}
}
