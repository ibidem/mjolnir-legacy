<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Legacy
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Relay extends \mjolnir\base\Relay
{
	static function route($key)
	{
		return \app\URL::route($key);
	}

} # class
