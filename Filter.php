<?php 

	/**
	* @author Tiago Oliveira de Farias
	**/
	class Filter{

		public function sanitizeString($string)
		{
			return filter_var($string, FILTER_SANITIZE_STRING);
		}

		public function sanitizeEmail($email)
		{
			return filter_var($email, FILTER_SANITIZE_EMAIL);
		}

		public function sanitizeURL($url)
		{
			return filter_var($url, FILTER_SANITIZE_URL);
		}

		/**
		* @return bool
		**/
		public function isValidIP($string)
		{
			return filter_var($string, FILTER_VALIDATE_IP);
		}

		public function isValidEmail($email)
		{
	        if (filter_var($this->sanitizeEmail($email), FILTER_VALIDATE_EMAIL)) {
	            return true;
	        }

	        return false;
		}

		public function isValidURL($url)
		{	        
	        if (filter_var($this->sanitizeURL($url), FILTER_VALIDATE_URL)) {
	            return true;
	        }
	        return false;
		}



		
	}