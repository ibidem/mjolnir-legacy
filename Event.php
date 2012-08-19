<?php namespace ibidem\legacy;

/**
 * @package    ibidem
 * @category   Base
 * @author     Ibidem Team
 * @copyright  (c) 2012 Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Event extends \app\Instantiatable
{
	/**
	 * @var string
	 */
	protected $signature;
	
	/**
	 * @var mixed
	 */
	protected $contents;
	
	/**
	 * @var string
	 */
	protected $subject;
	
	/**
	 * Event signature. Typically you should just pass __CLASS__
	 * 
	 * @param string
	 * @return \ibidem\base\Event $this
	 */
	function signature($signature)
	{
		$this->signature = $signature;
		return $this;
	}
	
	/**
	 * @return string Event's signature
	 */
	function get_signature()
	{
		return $this->signature;
	}
	
	/**
	 * @param mixed contents
	 * @return \ibidem\base\Event $this
	 */
	function contents($contents)
	{
		$this->contents = $contents;
		return $this;
	}
	
	/**
	 * @param mixed event contents
	 */
	function get_contents()
	{
		return $this->contents;
	}
	
	/**
	 * Event message, 
	 * 
	 * eg.
	 * 
	 *     GET:\ibidem\types\Writer
	 *     rel=canonical
	 *     rel=description
	 *     rel=tags
	 *     rel=author
	 *     title
	 * 
	 * or 
	 * 
	 *     output/buffering
	 *     caching
	 *     expires
	 *     http/etags
	 * 
	 * etc.
	 * 
	 * For exceptions, errors or anything else that should be "throwable" use 
	 * the exception handling on Layers.
	 * 
	 * It is recomended you don't extend/define a new Event class for every one 
	 * of those unless you actually have something to add to it's functionality
	 * or interface. Classes in OOP weren't created as globals; just use common 
	 * terms that you might attach to the subject of the event.
	 * 
	 * Knowing the subject to respond to, or knowing the class to capture is 
	 * equal in knowledge, but the class also needs loading, and can potentially
	 * drag an entire chain of other classes behind it, while the simple title 
	 * is just a plain old string.
	 * 
	 * If you wish to have control over the event language, and the language is
	 * diverse enough, simply create a interface with constants and use that 
	 * as a Enum. Do not store constants in your class (ie. implementation) to 
	 * avoid dependency problems; an interface is dependency free. 
	 * 
	 * eg.
	 * 
	 * namespace yournamespace;
	 * 
	 * interface Enum_SEO
	 * { 
	 *     const 'canonical' = '\yournamespace\Enum_SEO::canonical'; # => string
	 *     const 'author' = '\yournamespace\Enum_SEO::author'; # => string
	 * }
	 * 
	 * Using common terms like 'title', 'expires' or 'GET:\someinterface' may be
	 * more flexible however; when applicable.
	 * 
	 * @param string subject of the Event
	 * @return \ibidem\base\Event $this
	 */
	function subject($subject)
	{
		$this->subject = $subject;
		return $this;
	}
	
	/**
	 * @return string event subject
	 */
	function get_subject()
	{
		return $this->subject;
	}
	
} # class
