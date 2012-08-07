<?php namespace ibidem\legacy;

/**
 * @deprecated since version 1.0
 * @package    ibidem
 * @category   Base
 * @author     Ibidem Team
 * @copyright  (c) 2012 Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
abstract class Migration extends \app\Instantiatable
{
	/**
	 * Sets up constraints and other post-migration tasks.
	 */
	public function bind() 
	{
		// empty
	}
	
	/**
	 * @return array
	 */
	protected function bind_callback()
	{
		return array($this, 'bind');
	}
	
	/**
	 * Do migration.
	 * 
	 * @return array callback to bind
	 */
	public function up() 
	{
		return $this->bind_callback();
	}
	
	/**
	 * Assemble defaults 
	 */
	public function build()
	{
		// do nothing
	}
	
	/**
	 * Undo migration.
	 */
	public function down()
	{
		// empty
	}
	
} # class
