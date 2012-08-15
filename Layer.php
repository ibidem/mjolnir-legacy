<?php namespace ibidem\legacy;

/**
 * @package    ibidem
 * @category   Legacy
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Layer extends \ibidem\base\Layer
{
	/**
	 * Captures a broadcast Event.
	 * 
	 * @deprecated
	 * @param \ibidem\types\Event
	 */
	public function capture($event)
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
	 * @param \ibidem\types\Event
	 */
	public function dispatch($event)
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
	 * @param \ibidem\types\Event
	 */
	public static function broadcast($event)
	{
		static::$top->capture($event);
	}

} # class
