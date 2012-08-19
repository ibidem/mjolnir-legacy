<?php namespace ibidem\legacy;

/**
 * @package    ibidem
 * @category   Legacy
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Relay extends \ibidem\base\Relay
{
	static function route($key)
	{
		return \app\URL::route($key);
	}

} # class
