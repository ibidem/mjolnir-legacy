<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Database
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Task_Db_Upgrade extends \app\Task_Base
{
	use \app\Trait_Task_Db_Migrations;

	/**
	 * ...
	 */
	function run()
	{
		\app\Task::consolewriter($this->writer);

		if (\app\CFS::config('mjolnir/base')['db:migrations'] !== 'schematic')
		{
			$this->writer
				->printf('error', 'System is currently setup to use ['.\app\CFS::config('mjolnir/base')['db:migrations'].'] migrations.')
				->eol()->eol();
			exit;
		}

		$channel = $this->get('channel', false);

		if ($channel !== false)
		{
			$this->process_upgrade($channel);
		}
		else # process channels
		{
			$channels = \app\Schematic::channels();

			$channelorder = $this->channelorder($channels);

			foreach ($channelorder as $channel)
			{
				$this->process_upgrade($channel);
			}
		}
	}

	/**
	 * ...
	 */
	function process_upgrade($channel)
	{
		$channel_top = \app\Schematic::top_for_channel($channel, 'default');
		$channel_serial = \app\Schematic::get_serial_for($channel);

		$trail = \app\Schematic::serial_trail($channel, $channel_serial, $channel_top);

		if (empty($trail))
		{
			$this->writer->writef(" $channel does not require upgrade.")->eol();

			return;
		}

		$bindings = array();
		$this->process_trail($channel, $trail, $bindings);

		foreach ($bindings as $binding)
		{
			$binding();
		}

		$this->writer->printf('reset');
		$this->writer->writef(' Binding complete.')->eol();
	}

} # class
