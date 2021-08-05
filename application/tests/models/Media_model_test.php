<?php

class Media_model_test extends TestCase 
{
	public function setUp(): void
	{
		$this->resetInstance();
		$this->CI->load->model('Media_model');
		$this->media_model = $this->CI->Media_model;
		$this->upload_path = APPPATH.'storage/uploads';
	}

	public function test_insert_new_media()
	{
		$id = uniqid('', true);
		$media = [
			'id' => $id,
			'name' => "Test Photo",
			'file_name' => $id.".jpg"
		];

		$this->media_model->insert($media);

		$inserted_media = $this->media_model->find($id);

		$this->assertEquals($media['id'], $inserted_media->id);
		$this->assertEquals($media['name'], $inserted_media->name);
		$this->assertEquals($media['file_name'], $inserted_media->file_name);
		// $this->assertFileExists($this->upload_path.$media['file_name']);

		$this->media_model->delete($id);
	}

	public function test_delete_media()
	{
		$id = uniqid('', true);
		$media = [
			'id' => $id,
			'name' => "Test Photo",
			'file_name' => $id.".jpg"
		];

		$this->media_model->insert($media);
		$this->media_model->delete($id);
		
		$inserted_media = $this->media_model->find($id);
		$this->assertNull($inserted_media);
	}
	
}
