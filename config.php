<?php
return array(
    'server'   => 'irc.freenode.org',
    'port'     => 6667,
    'name'     => 'MeinButler',
    'nick'     => 'MeinButler',
    'channels' => array(
        '#austinphp',
    ),
    'max_reconnects' => 1,
    'log_file'       => 'log.txt',
    'commands'       => array(
        'Command\Say'     => array(),
        'Command\Weather' => array(
            'yahooKey' => 'C2SBOPV34HZKKctkc0VRphk0RR3JiLysYygImuPb5MisVySRuT2w3aXbUkYUwxMMLtzNVRx',
        ),
        'Command\Joke'    => array(),
        'Command\Ip'      => array(),
        'Command\Imdb'    => array(),
        'Command\Poke'    => array(),
        'Command\Join'    => array(),
        'Command\Restart' => array(),
				'Command\Imgur' 	=> array(),
				'Command\Mathfact' 	=> array(),
				'Command\Paste' 	=> array(),
				'Command\Docs' 	=> array(),
        // 'Command\Part'    => array(),
        // 'Command\Timeout' => array(),
        // 'Command\Quit'    => array(),
    ),
    'listeners' => array(
        'Listener\Joins' => array(),
    ),
);