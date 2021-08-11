<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('article_model');
		$this->load->model('feedback_model');
		
		$data = [
			"article_count" => $this->article_model->count(),
			"feedback_count" => $this->feedback_model->count()
		];

		$this->load->view('admin/dashboard.php', $data);
	}
}
