<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Layer
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Layer_HTTP extends \mjolnir\base\Layer_HTTP
{
	/**
	 * @deprecated 
	 * @return string 
	 */
	static function detect_ip()
	{
		return \app\Server::client_ip();
	}
	
	/**
	 * @deprecated
	 * @param string url 
	 */
	static function redirect_to_url($url)
	{
		\app\Server::redirect($url);
	}
	
	/**
	 * @deprecated
	 * @param \mjolnir\types\Event
	 */
	function dispatch($event)
	{
		switch ($event->get_subject())
		{
			case \mjolnir\types\Event::content_type:
				$this->content_type($event->get_contents());
				break;
			
			case \mjolnir\types\Event::expires:
				$expiration = $event->get_contents() - \time();
				$this->set('Pragma', 'public');
				$this->set('Cache-Control', 'maxage='.$expiration);
				$this->set
					(
						'Expires', 
						\gmdate('D, d M Y H:i:s', \time() + $expiration).' GMT'
					);
				break;
		}
		
		// pass to default handling
		parent::dispatch($event);
	}
	
	/**
	 * @deprecated 
	 */
	static function redirect($relay, array $params = null, array $query = null)
	{
		$matcher = \app\URL::route($relay);
		
		if ($query == null)
		{
			static::redirect_to_url($matcher->url($params));
		}
		else # non-null query
		{
			$query = \http_build_query($query);
			static::redirect_to_url($matcher->url($params).'?'.$query);
		}
	}
	
	/**
	 * @deprecated 
	 * @return string url base
	 */
	static function detect_url_base()
	{
		return $_SERVER['SERVER_NAME'].
			($_SERVER['SERVER_PORT'] !== 80 ? ':'.$_SERVER['SERVER_PORT'] : '');
	}
		
	/**
	 * @deprecated 
	 * @return string
	 */
	static function request_method()
	{
		if (isset($_SERVER['REQUEST_METHOD']))
		{
			// Use the server request method
			return \strtoupper($_SERVER['REQUEST_METHOD']);
		}
		else # REQUEST_METHOD not set
		{
			// Default to GET requests
			return \strtoupper(\mjolnir\types\HTTP::GET);
		}
	}

} # class
