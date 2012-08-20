<?php namespace ibidem\legacy;

/**
 * @package    ibidem
 * @category   Controller
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Controller_HTTP extends \app\Controller
{
	/**
	 * @return string
	 */
	function method()
	{
		return \app\Server::request_method();
	}
	
	/**
	 * @param string action
	 * @return string 
	 */	
	function action($action)
	{
		$relay = $this->layer->get_relay();
		return $relay['route']->url(array('action' => $action));
	}


} # class
