<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'ibidem\legacy'

class Cache_APC extends \ibidem\legacy\Cache_APC { /** @return \ibidem\legacy\Cache_APC */ static function instance() { return parent::instance(); } }
class Cache_File extends \ibidem\legacy\Cache_File { /** @return \ibidem\legacy\Cache_File */ static function instance() { return parent::instance(); } }
class Cache_Memcached extends \ibidem\legacy\Cache_Memcached { /** @return \ibidem\legacy\Cache_Memcached */ static function instance() { return parent::instance(); } }
class Cache extends \ibidem\legacy\Cache { /** @return \ibidem\legacy\Cache */ static function instance() { return parent::instance(); } }
class Event extends \ibidem\legacy\Event {}
class Layer_HTML extends \ibidem\legacy\Layer_HTML { /** @return \ibidem\legacy\Layer_HTML */ static function instance() { return parent::instance(); } }
class Layer_HTTP extends \ibidem\legacy\Layer_HTTP { /** @return \ibidem\legacy\Layer_HTTP */ static function instance() { return parent::instance(); } }
class Layer_MVC extends \ibidem\legacy\Layer_MVC { /** @return \ibidem\legacy\Layer_MVC */ static function instance() { return parent::instance(); } }
class Layer extends \ibidem\legacy\Layer { /** @return \ibidem\legacy\Layer */ static function instance() { return parent::instance(); } }
class Migration_Access extends \ibidem\legacy\Migration_Access { /** @return \ibidem\legacy\Migration_Access */ static function instance() { return parent::instance(); } }
class Migration_Template_MySQL extends \ibidem\legacy\Migration_Template_MySQL { /** @return \ibidem\legacy\Migration_Template_MySQL */ static function instance() { return parent::instance(); } }
class Migration extends \ibidem\legacy\Migration { /** @return \ibidem\legacy\Migration */ static function instance() { return parent::instance(); } }
class Model_Factory extends \ibidem\legacy\Model_Factory {}
class Model_Instantiatable extends \ibidem\legacy\Model_Instantiatable { /** @return \ibidem\legacy\Model_Instantiatable */ static function instance($id = null) { return parent::instance($id); } }
class Model_SQL_Factory extends \ibidem\legacy\Model_SQL_Factory {}
class Task_Migrate extends \ibidem\legacy\Task_Migrate { /** @return \ibidem\legacy\Task_Migrate */ static function instance($encoded_task = null) { return parent::instance($encoded_task); } }
