<?php
	
	require 'vendor/autoload.php';
	require 'src/Sanitize.php';

	class SanitizeTest extends PHPUnit_Framework_TestCase{
		
		public function setUp()
		{
			parent::setUp();
		}
		
		public function tearDown()
		{
			parent::tearDown();
		}
		
		public function testStringShouldRemoveHTMLTags()
		{
			$input = "<h1>Hello, World!</h1>";
			$extepcted = "Hello, World!";
			
			$sanitize = new Sanitize();
			$output = $sanitize->string( $input );
			
			$this->assertEquals($extepcted, $output);
		}
	}