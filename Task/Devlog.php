<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Cascading File System
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Task_Devlog extends \app\Task_Base
{
	/**
	 * Execute task.
	 */
	function run()
	{
		\app\Task_Log_Short::instance()
			->writer_is($this->writer)
			->metadata_is($this->metadata())
			->set('erase', true)
			->run();
	}

} # class
