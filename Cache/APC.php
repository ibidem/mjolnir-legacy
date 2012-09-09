<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Cache
 * @author     Ibidem Team
 * @copyright  (c) 2012 Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Cache_APC extends \app\Instantiatable
{
	/**
	 * @var \mjolnir\cache\Cache_APC
	 */
	private static $instance;
	
	/**
	 * @return \mjolnir\cache\Cache_APC 
	 */
	static function instance()
	{
		if (self::$instance)
		{
			return self::$instance;
		}
		else # uninitialized
		{
			if ( ! \extension_loaded('APC'))
			{
				throw new \app\Exception_NotApplicable('APC extention not loaded.');
			}

			return self::$instance = parent::instance();
		}
	}
	
	/**
	 * @param string key
	 * @param mixed default
	 * @return mixed
	 */
	function fetch($tag, $key, $default = null)
	{
		$key = $tag.'/'.$key;
		$data = \apc_fetch(\str_replace(array('/', '\\', ' '), '_', $key), $success);

		return $success ? $data : $default;
	}
	
	/**
	 * @param string key
	 * @return \mjolnir\cache\Cache_APC $this
	 */
	function delete($tag, $key = null)
	{
		$key = $tag.'/'.$key;
		\apc_delete(\str_replace(array('/', '\\', ' '), '_', $key));
		
		return $this;
	}
	
	/**
	 * @param string key
	 * @param mixed data
	 * @param integer lifetime (seconds)
	 * @return \mjolnir\cache\Cache_APC $this
	 */
	function store($tag, $key, $data, $lifetime_seconds = null)
	{
		$key = $tag.'/'.$key;
		if ($lifetime_seconds === null)
		{
			$lifetime_seconds = $cache['APC']['lifetime.default'];
		}
		
		\apc_store(\str_replace(array('/', '\\', ' '), '_', $key), $data, $lifetime_seconds);
		
		return $this;
	}

} # class
