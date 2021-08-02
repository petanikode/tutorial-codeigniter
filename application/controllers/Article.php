<?php

class Article extends CI_Controller 
{
	public function index()
	{
		// @TODO: get article from model
		$data['articles'] = [
			[
				'title' => 'Foo',
				'content' => 'Ini artikel tentang foo',
			],
			[
				'title' => 'Bar',
				'content' => 'Ini artikel tentang Bar',
			],
		];

		if(count($data['articles']) > 0){
			$this->load->view('articles/list_article.php', $data);
		} else {
			$this->load->view('articles/empty_article.php');
		}
	}

	public function show($slug = null)
	{
		// @TODO: get article from model
		$this->load->view('articles/show_article.php');
	}
}
