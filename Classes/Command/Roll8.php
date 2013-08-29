<?php
// Namespace
namespace Command;

/**
 * Magic 8-ball PHP implementation for IRC
 *
 * @package IRCBot
 * @subpackage Command
 * @author Bryan Maxwell <tekhneek@gmail.com>
 */
class Roll8 extends \Library\IRC\Command\Base {
	public $_advice_str = "It is certain
	● It is decidedly so
	● Without a doubt
	● Yes definitely
	● You may rely on it
	● As I see it yes
	● Most likely
	● Outlook good
	● Yes
	● Signs point to yes
	● Reply hazy try again
	● Ask again later
	● Better not tell you now
	● Cannot predict now
	● Concentrate and ask again
	● Don't count on it
	● My reply is no
	● My sources say no
	● Outlook not so good
	● Very doubtful";
	
	/**
	 * The command's help text.
	 *
	 * @var string
	 */
	protected $help = '!roll8 for some advice.';

	/**
	 * The number of arguments the command needs.
	 *
	 * @var integer
	 */
	protected $numberOfArguments = -1;

	/**
	 * Get Wikipedia URL and return it.
	 */
	public function command() {
		$this->say($this->get_advice());
	}
	
	public function get_advice() {
		$advice = explode(PHP_EOL, $this->_advice_str);
		
		shuffle($advice);
		
		return end($advice);
	}
}
?>