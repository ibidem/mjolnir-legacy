<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\legacy'


class Puppet extends \mjolnir\legacy\Puppet
{
	/** @return \app\Puppet */
	static function instance() { return parent::instance(); }
}
