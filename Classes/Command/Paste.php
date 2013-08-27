<?php
// Namespace
namespace Command;

/**
 * Returns pastebin URL
 *
 * @package IRCBot
 * @subpackage Command
 * @author Bryan Maxwell <tekhneek@gmail.com>
 */
class Paste extends \Library\IRC\Command\Base {
		public $_paste_path = 'http://paste.laravel.com';
		
    /**
     * The command's help text.
     *
     * @var string
     */
    protected $help = '!paste returns path to pastebin';

    /**
     * The number of arguments the command needs.
     *
     * @var integer
     */
    protected $numberOfArguments = 0;

    public function command() {
        $this->say($this->_paste_path);
    }
}
?>