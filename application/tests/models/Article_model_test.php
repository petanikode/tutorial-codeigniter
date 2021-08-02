<?php

class Article_model_test extends TestCase
{
	public function setUp(): void
	{
		$this->resetInstance();
		$this->CI->load->model('Article_model');
		$this->article_model = $this->CI->Article_model;
	}

	public function test_insert_new_article()
	{

		$article = [
			'id' => uniqid('', true),
			'title' => "hello world"
		];

		$this->article_model->insert($article);

		$inserted_article = $this->article_model->find($article['id']);

		$this->assertIsObject($inserted_article);
		$this->assertEquals($article['id'], $inserted_article->id);
		$this->assertEquals($article['title'], $inserted_article->title);
		$this->article_model->delete($article['id']);
	}

	public function test_update_article()
	{
		$id = uniqid('', true);

		$article = [
			'id' => $id,
			'title' => 'Hello World!',
			'content' => 'This is article content'
		];

		$this->article_model->insert($article);

		$new_article = [
			'id' => $id,
			'title' => 'Update Test!',
			'content' => 'This is article content was updated'
		];

		$this->article_model->update($new_article);

		$updated_article = $this->article_model->find($id);

		$this->assertEquals($new_article['id'], $updated_article->id);
		$this->assertEquals($new_article['title'], $updated_article->title);
		$this->assertEquals($new_article['content'], $updated_article->content);
		$this->article_model->delete($article['id']);
	}

	public function test_update_article_with_empty_id()
	{
		$id = uniqid('', true);

		$article = [
			'id' => $id,
			'title' => 'Hello World!',
			'content' => 'This is article content'
		];

		$this->article_model->insert($article);

		$new_article = [
			'title' => 'Update Test!',
			'content' => 'This is article content was updated'
		];

		$this->article_model->update($new_article);

		$updated_article = $this->article_model->find($id);

		$this->assertEquals($article['id'], $updated_article->id);
		$this->assertNotEquals($new_article['title'], $updated_article->title);
		$this->assertNotEquals($new_article['content'], $updated_article->content);
		$this->article_model->delete($article['id']);
	}

	public function test_delete_article()
	{
		$id = uniqid('', true);

		$article = [
			'id' => $id,
			'title' => 'Hello World!',
			'content' => 'This is article content'
		];

		$this->article_model->insert($article);
		$this->article_model->delete($id);

		$deleted_article = $this->article_model->find($id);

		$this->assertEquals(null, $deleted_article);
	}
}
