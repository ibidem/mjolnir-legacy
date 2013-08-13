<?php namespace mjolnir\legacy;

/**
 * @package    mjolnir
 * @category   Layer
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Layer_HTML extends next\Layer_HTML
{
	#
	# Support for underscore keys.
	# Support for headscript key.
	#

	/**
	 * @return mixed
	 */
	protected function prop($key, $default = null, $channel_prefix = 'html:')
	{
		// convert underscores, for compatibility with older keys
		$key = \str_replace('_', '-', $key);
		return parent::prop($key, $default, $channel_prefix);
	}

	/**
	 * @return array
	 */
	protected function props($key, $default = null, $channel_prefix = 'html:')
	{
		// convert underscores, for compatibility with older keys
		$key = \str_replace('_', '-', $key);

		if ($key === 'startup-script')
		{
			// search and merge old keys
			$scripts1 = $this->channel()->get('headscript', []);
			$scripts2 = $this->channel()->get('startup-script', []);
			$scripts3 = $this->get('headscript', []);
			$scripts4 = $this->get('startup-script', []);

			return \app\Arr::index($scripts1, $scripts2, $scripts3, $scripts4, $default);
		}
		else # scripts
		{
			return parent::props($key, $default, $channel_prefix);
		}
	}

	/**
	 * @return array
	 */
	protected function prop_index($key, $default = null, $channel_prefix = 'html:')
	{
		// convert underscores, for compatibility with older keys
		$key = \str_replace('_', '-', $key);
		return parent::prop_index($key, $default, $channel_prefix);
	}

} # class
