<?php return array
	(
		'bower' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Search and execute all brower dependencies.',
						'To be valid a directory must contain both a .bowerrc file and a component.json file.',
						'The components directory mentioned by the .bowerrc will be purged and bower install will execute in the given context.',
					),
				'flags' => array
					(
						'install' => array
							(
								'description' => 'Perform Install.',
								'short' => 'i',
							),
						'local' => array
							(
								'description' => 'Only check DOCROOT/themes',
								'short' => 'l',
							),
					),
			),
		'cleanup' => array
			(
				'flags' => array
					(
						'cache-only' => array
							(
								'description' => 'Stop after clearing cache.'
							),
					),
			),
		'devlog' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Deprecated. Use log:short instead',
						'tail -f short.log',
					),
				'flags' => array
					(
						// empty
					),
			),
		'make:schematic' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Create a schematic class.'
					),
				'flags' => array
					(
						'schematic' => array
							(
								'description' => 'The schematic key as mentioned in the configuration.',
								'short' => 's',
								'type' => 'text',
							),
						'namespace' => array
							(
								'description' => 'Namespace in which to place class.',
								'short' => 'n',
								'type' => 'text',
							),
						'forced' => array
							(
								'description' => 'Overwrites output file(s).',
							),
					),
			),
		'db:init' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Initialize database schematic.'
					),
				'flags' => array
					(
						'uninstall' => array
							(
								'description' => 'Uninstalls serial/channel tables.',
								'short' => 'u',
								'default' => false,
							),
						'forced' => array
							(
								'description' => 'Force operations.',
								'short' => 'f',
								'default' => false,
							),
					),
			),
		'db:install' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Cleans up database and re-installs channels.'
					),
				'flags' => array
					(
						'channel' => array
							(
								'type' => 'text',
								'description' => 'Specified a channel when setting version.',
								'short' => 'c',
								'default' => false,
							),
						'all' => array
							(
								'description' => 'Processes all channels.',
								'short' => 'a'
							),
						'show-order' => array
							(
								'description' => 'Show order in which channels are processed.',
								'short' => 's'
							),
					),
			),
		'db:upgrade' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Upgrade to new serial version. (Auto-detects current.)'
					),
				'flags' => array
					(
						'channel' => array
							(
								'type' => 'text',
								'description' => 'Specified a channel when setting version.',
								'short' => 'c',
								'default' => false,
							),

						'all' => array
							(
								'description' => 'Processes all channels.',
								'short' => 'a'
							),
					),
			),
		'db:reset' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Reset database to a specified serial version.'
					),
				'flags' => array
					(
						'channel' => array
							(
								'type' => 'text',
								'description' => 'Specified a channel when setting version.',
								'short' => 'c',
								'default' => false,
							),
						'serial' => array
							(
								'type' => 'text',
								'description' => 'Specified a channel when setting version.',
								'short' => 'v',
							),
						'forced' => array
							(
								'description' => 'Forces reset even when database is not clean.',
								'short' => 'f',
							),
					),
			),
		'db:uninstall' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Resets database to 0:0.'
					),
				'flags' => array
					(
						'channel' => array
							(
								'type' => 'text',
								'description' => 'Specified a channel when setting version.',
								'short' => 'c',
								'default' => false,
							),
						'all' => array
							(
								'description' => 'Processes all channels.',
								'short' => 'a'
							),
					),
			),
		'db:version' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Shows version numbers for channels.'
					),
				'flags' => array
					(
						'force-set' => array
							(
								'type' => 'text',
								'description' => 'Set the version to a specified serial.',
								'default' => false,
							),
						'channel' => array
							(
								'type' => 'text',
								'description' => 'Specified a channel when setting version.',
								'short' => 'c',
								'default' => 'default',
							)
					),
			),
		'db:sphinx' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Provides helpers for working with sphinx.'
					),
				'flags' => array
					(
						'regenerate' => array
							(
								'description' => 'Regenerate sphinx configuration file.',
								'short' => 'r',
							),
					),
			),
	);
