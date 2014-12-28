<?php 

	/**
	* @author Tiago Oliveira de Farias
	**/
	class Sanitize
	{
		/**
		 * @return string
		 */
		public function string($string)
		{
			return filter_var($string, FILTER_SANITIZE_STRING);
		}

		public function email($email)
		{
			return filter_var($email, FILTER_SANITIZE_EMAIL);
		}

		public function url($url)
		{
			return filter_var($url, FILTER_SANITIZE_URL);
		}

		/**
		* @return bool
		**/
		public function isValidIP($ip)
		{
			return !filter_var($ip, FILTER_VALIDATE_IP) ? false : true;
		}

		/**
		 * @return bool
		 **/
		public function isValidEmail($email)
		{
	        return !filter_var($this->email($email), FILTER_VALIDATE_EMAIL) ? false : true;
		}

		/**
		 * @return bool
		 **/
		public function isValidURL($url)
		{	        
	        return !filter_var($this->url($url), FILTER_VALIDATE_URL) ? false : true;
		}
	}