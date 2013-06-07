<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Database
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Task_Db_Version extends \app\Task_Base
{
	/**
	 * Execute task.
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
		
		$force_set = $this->get('force-set', false);

		if ($force_set !== false)
		{
			$channel = $this->config['channel'];
			\app\Schematic::set_channel_serialversion($channel, $force_set);
		}

		$schematics = \app\Schematic::channel_list();

		$versions = [];

		foreach ($schematics as $schematic)
		{
			$versions[] = $schematic['channel'].' @ '.$schematic['serial'];
		}

		$this->writer->writef(' '.\implode($this->writer->eolstring().' ', $versions));
		$this->writer->eol();
	}

} # class
