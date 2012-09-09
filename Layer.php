<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Legacy
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Layer extends \mjolnir\base\Layer
{
	/**
	 * Captures a broadcast Event.
	 * 
	 * @deprecated
	 * @param \mjolnir\types\Event
	 */
	function capture($event)
	{
		if ($this->layer)
		{
			$this->layer->capture($event);
		}
	}
	
	/**
	 * Sends an Event to the parent of the current layer.
	 * 
	 * @deprecated
	 * @param \mjolnir\types\Event
	 */
	function dispatch($event)
	{
		if ($this->parent)
		{
			$this->parent->dispatch($event);
		}
	}
	
	/**
	 * Send an Event to the top layer and then down
	 * 
	 * @deprecated
	 * @param \mjolnir\types\Event
	 */
	static function broadcast($event)
	{
		static::$top->capture($event);
	}

} # class
