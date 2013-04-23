<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Legacy
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
abstract class Puppet extends next\Puppet
{
	/**
	 * @return string corresponding model
	 */
	static function modelclass()
	{
		return '\app\Model_'.\app\Text::camelcase_from(static::singular());
	}

} # class
