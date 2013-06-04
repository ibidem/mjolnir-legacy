<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\legacy'


class Puppet extends \mjolnir\legacy\Puppet
{
	/** @return \app\Puppet */
	static function instance() { return parent::instance(); }
}

class Schematic extends \mjolnir\legacy\Schematic
{
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
 * @method \app\Task_Db_Init set($name, $value)
 * @method \app\Task_Db_Init add($name, $value)
 * @method \app\Task_Db_Init metadata_is(array $metadata = null)
 * @method \app\Task_Db_Init writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Db_Init extends \mjolnir\legacy\Task_Db_Init
{
	/** @return \app\Task_Db_Init */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Db_Install set($name, $value)
 * @method \app\Task_Db_Install add($name, $value)
 * @method \app\Task_Db_Install metadata_is(array $metadata = null)
 * @method \app\Task_Db_Install writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Db_Install extends \mjolnir\legacy\Task_Db_Install
{
	/** @return \app\Task_Db_Install */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Db_Reset set($name, $value)
 * @method \app\Task_Db_Reset add($name, $value)
 * @method \app\Task_Db_Reset metadata_is(array $metadata = null)
 * @method \app\Task_Db_Reset writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Db_Reset extends \mjolnir\legacy\Task_Db_Reset
{
	/** @return \app\Task_Db_Reset */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Db_Uninstall set($name, $value)
 * @method \app\Task_Db_Uninstall add($name, $value)
 * @method \app\Task_Db_Uninstall metadata_is(array $metadata = null)
 * @method \app\Task_Db_Uninstall writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Db_Uninstall extends \mjolnir\legacy\Task_Db_Uninstall
{
	/** @return \app\Task_Db_Uninstall */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Db_Upgrade set($name, $value)
 * @method \app\Task_Db_Upgrade add($name, $value)
 * @method \app\Task_Db_Upgrade metadata_is(array $metadata = null)
 * @method \app\Task_Db_Upgrade writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Db_Upgrade extends \mjolnir\legacy\Task_Db_Upgrade
{
	/** @return \app\Task_Db_Upgrade */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Db_Version set($name, $value)
 * @method \app\Task_Db_Version add($name, $value)
 * @method \app\Task_Db_Version metadata_is(array $metadata = null)
 * @method \app\Task_Db_Version writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Db_Version extends \mjolnir\legacy\Task_Db_Version
{
	/** @return \app\Task_Db_Version */
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

/**
 * @method \app\Task_Make_Schematic set($name, $value)
 * @method \app\Task_Make_Schematic add($name, $value)
 * @method \app\Task_Make_Schematic metadata_is(array $metadata = null)
 * @method \app\Task_Make_Schematic writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Make_Schematic extends \mjolnir\legacy\Task_Make_Schematic
{
	/** @return \app\Task_Make_Schematic */
	static function instance() { return parent::instance(); }
}
trait Trait_Task_Db_Migrations { use \mjolnir\legacy\Trait_Task_Db_Migrations; }
