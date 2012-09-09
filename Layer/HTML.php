<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Layer
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Layer_HTML extends \mjolnir\html\Layer_HTML
{
	/**
	 * @param \mjolnir\types\Event
	 */
	function dispatch($event)
	{
		switch ($event->get_subject())
		{
			case \mjolnir\types\Event::canonical_url:
				$this->canonical($event->get_contents());
				break;
			
			case \mjolnir\types\Event::title:
				$this->title($event->get_contents());
				break;
			
			case \mjolnir\types\Event::tags:
				$this->add_keywords($event->get_contents());
				break;
			
			case \mjolnir\types\Event::css_style:
				$this->add_stylesheet($event->get_contents());
				break;
			
			case \mjolnir\types\Event::js_script:
				$this->add_script($event->get_contents());
				break;
			
			case \mjolnir\types\Event::head_tag:
				$this->add_extra_markup($event->get_contents());
		}
		
		// pass to default handling
		parent::dispatch($event);
	}

} # class
