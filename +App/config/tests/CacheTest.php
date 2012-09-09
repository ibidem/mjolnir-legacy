<?php namespace mjolnir\cache;

require_once 'Cache/template.CacheTester'.EXT;

/**
 * @package    mjolnir
 * @category   Cache
 * @author     Ibidem Team
 * @copyright  (c) 2012 Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class CacheTest extends CacheTester
{
	function setUp()
	{
		static::$instance = \app\Cache::instance();
	}

} # class
