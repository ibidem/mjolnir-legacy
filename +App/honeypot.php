<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\legacy'


class Access extends \mjolnir\legacy\Access
{
	/** @return \app\Access */
	static function instance() { return parent::instance(); }
}

class Puppet extends \mjolnir\legacy\Puppet
{
	/** @return \app\Puppet */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Bower set($name, $value)
 * @method \app\Task_Bower add($name, $value)
 * @method \app\Task_Bower metadata_is(array $metadata = null)
 * @method \app\Task_Bower writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Bower extends \mjolnir\legacy\Task_Bower
{
	/** @return \app\Task_Bower */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Devlog set($name, $value)
 * @method \app\Task_Devlog add($name, $value)
 * @method \app\Task_Devlog metadata_is(array $metadata = null)
 * @method \app\Task_Devlog writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Devlog extends \mjolnir\legacy\Task_Devlog
{
	/** @return \app\Task_Devlog */
	static function instance() { return parent::instance(); }
}
