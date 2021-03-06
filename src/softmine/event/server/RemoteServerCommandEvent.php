<?php

namespace softmine\event\server;

use softmine\command\CommandSender;

/**
 * This event is called when a command is received over RCON.
 */
class RemoteServerCommandEvent extends ServerCommandEvent{
	public static $handlerList = null;

	/**
	 * @param CommandSender $sender
	 * @param string        $command
	 */
	public function __construct(CommandSender $sender, $command){
		parent::__construct($sender, $command);
	}

}