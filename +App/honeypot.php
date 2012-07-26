<?php namespace app;

// This is a IDE honeypot. :)

// HowTo: order honeypot -n 'ibidem\legacy'

class Migration_Template_MySQL extends \ibidem\legacy\Migration_Template_MySQL { /** @return \ibidem\legacy\Migration_Template_MySQL */ static function instance() { return parent::instance(); } }
class Migration extends \ibidem\legacy\Migration { /** @return \ibidem\legacy\Migration */ static function instance() { return parent::instance(); } }
class Task_Migrate extends \ibidem\legacy\Task_Migrate { /** @return \ibidem\legacy\Task_Migrate */ static function instance($encoded_task = null) { return parent::instance($encoded_task); } }
