<?php
// Namespace
namespace Command;

/**
 * Returns a random mathematical fact.
 *
 * @package IRCBot
 * @subpackage Command
 * @author Bryan Maxwell <tekhneek@gmail.com>
 */
class Mathfact extends \Library\IRC\Command\Base {
		public $_random_path = 'http://numbersapi.com/random/math';
		
    /**
     * The command's help text.
     *
     * @var string
     */
    protected $help = '!mathfact for a random math fact.';

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
        $this->say($this->random_math());
    }

		public function random_math() {
			$response = file_get_contents($this->_random_path);
			
			return $response;
		}
}
?>