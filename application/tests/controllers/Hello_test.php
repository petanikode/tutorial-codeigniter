<?php

class Hello_test extends TestCase
{
	public function test_index(){
		$output = $this->request('GET', 'hello/index');
		$this->assertStringContainsString('<h2>Hello!</h2>', $output);
	}
}
