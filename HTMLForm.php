<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Legacy
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class HTMLForm extends next\HTMLForm
{
	/**
	 * The given values will be used to autofill the form. They may be however
	 * ignored depending on context.
	 *
	 * @return static $this
	 */
	function autocomplete(array &$hints = null)
	{
		return $this->autocomplete_array($hints);
	}

} # class
