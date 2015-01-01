<?php 

	/**
	* @author Tiago Oliveira de Farias
	**/
	class Sanitize
	{
		/**
		 * Strip tags, optionally strip or encode special characters.
		 * @param string $string
		 * @return string
		 */
		public function string($string)
		{
			return filter_var($string, FILTER_SANITIZE_STRING);
		}

		/**
		 * Remove all characters except letters, digits and !#$%&'*+-/=?^_`{|}~@.[].
		 * @param string $email
		 * @return mixed
		 */
		public function email($email)
		{
			return filter_var($email, FILTER_SANITIZE_EMAIL);
		}

		/**
		 * Remove all characters except letters, digits and $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
		 * @param string $url
		 * @return mixed
		 */
		public function url($url)
		{
			return filter_var($url, FILTER_SANITIZE_URL);
		}
		
		/**
		 * Remove all characters except digits, +-
		 * @param float $number
		 * @return mixed
		 */
		public function float($number)
		{
			return filter_var($number,FILTER_SANITIZE_NUMBER_FLOAT);
		}
		
		/**
		 * Remove all characters except digits, +-.
		 * @param float $number
		 * @return mixed
		 */
		public function floatAllowFraction($number)
		{
			return filter_var($number,FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		}
		
		/**
		 * Remove all characters except digits, +-.
		 * @param float $number
		 * @return mixed
		 */
		public function floatAllowThousand($number)
		{
			return filter_var($number,FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
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
