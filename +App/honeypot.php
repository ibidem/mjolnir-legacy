<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'ibidem\legacy'

class Cache_APC extends \mjolnir\legacy\Cache_APC { /** @return \mjolnir\legacy\Cache_APC */ static function instance() { return parent::instance(); } }
class Cache_File extends \mjolnir\legacy\Cache_File { /** @return \mjolnir\legacy\Cache_File */ static function instance() { return parent::instance(); } }
class Cache_Memcached extends \mjolnir\legacy\Cache_Memcached { /** @return \mjolnir\legacy\Cache_Memcached */ static function instance() { return parent::instance(); } }
class Cache extends \mjolnir\legacy\Cache { /** @return \mjolnir\legacy\Cache */ static function instance() { return parent::instance(); } }
class Event extends \mjolnir\legacy\Event { /** @return \mjolnir\legacy\Event */ static function instance() { return parent::instance(); } }
class Layer_HTML extends \mjolnir\legacy\Layer_HTML { /** @return \mjolnir\legacy\Layer_HTML */ static function instance() { return parent::instance(); } }
class Layer_HTTP extends \mjolnir\legacy\Layer_HTTP { /** @return \mjolnir\legacy\Layer_HTTP */ static function instance() { return parent::instance(); } }
class Layer_MVC extends \mjolnir\legacy\Layer_MVC { /** @return \mjolnir\legacy\Layer_MVC */ static function instance() { return parent::instance(); } }
class Layer extends \mjolnir\legacy\Layer { /** @return \mjolnir\legacy\Layer */ static function instance() { return parent::instance(); } }
class Migration_Access extends \mjolnir\legacy\Migration_Access { /** @return \mjolnir\legacy\Migration_Access */ static function instance() { return parent::instance(); } }
class Migration_Template_MySQL extends \mjolnir\legacy\Migration_Template_MySQL { /** @return \mjolnir\legacy\Migration_Template_MySQL */ static function instance() { return parent::instance(); } }
class Migration extends \mjolnir\legacy\Migration { /** @return \mjolnir\legacy\Migration */ static function instance() { return parent::instance(); } }
class Model_Factory extends \mjolnir\legacy\Model_Factory {}
class Model_Instantiatable extends \mjolnir\legacy\Model_Instantiatable { /** @return \mjolnir\legacy\Model_Instantiatable */ static function instance($id = null) { return parent::instance($id); } }
class Model_SQL_Factory extends \mjolnir\legacy\Model_SQL_Factory {}
class Relay extends \mjolnir\legacy\Relay { /** @return \mjolnir\legacy\Relay */ static function instance() { return parent::instance(); } }
class Task_Migrate extends \mjolnir\legacy\Task_Migrate { /** @return \mjolnir\legacy\Task_Migrate */ static function instance($encoded_task = null) { return parent::instance($encoded_task); } }
