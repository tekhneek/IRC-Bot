<?php
// Namespace
namespace Command;

/**
 * Returns a random Imgur.com URL to the chat
 *
 * @package IRCBot
 * @subpackage Command
 * @author Bryan Maxwell <tekhneek@gmail.com>
 */
class Imgur extends \Library\IRC\Command\Base {
		public $_random_path = 'http://imgur.com/gallery/random';
		
    /**
     * The command's help text.
     *
     * @var string
     */
    protected $help = '!imgur and get a random image from imgur.';

    /**
     * The number of arguments the command needs.
     *
     * @var integer
     */
    protected $numberOfArguments = 0;

    /**
     * Get random Imgur URL and return it.
		 */
    public function command() {
        $this->say($this->random_imgur());
    }

		public function random_imgur() {
			$handle = curl_init($this->_random_path);
			
			$options = array(
				CURLOPT_HEADER => TRUE
			);
			
			curl_setopt_array($handle, $options);
			
			$response = curl_exec($handle);
			$redirected_url = curl_getinfo($handle, CURLINFO_REDIRECT_URL);
			
			return $redirected_url;
		}
}
?>