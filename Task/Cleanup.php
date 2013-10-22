<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Task
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Task_Cleanup extends next\Task_Cleanup
{
	/**
	 * ...
	 */
	function run()
	{
		$this->set('cache', $this->get('cache-only', false) || $this->get('cache', false));

		return parent::run();
	}

} # class
