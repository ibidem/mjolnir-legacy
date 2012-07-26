<?php return array
	(
		'migrate' => array
			(
				'description' => array
					(
						'Database migrations.'
					),
				'flags' => array
					(
						'install' => array
							(
								'description' => 'Initialize and migrate to latest versions.',
								'short' => 'i',
							),
						'uninstall' => array
							(
								'description' => 'Uninstall everything and cleanup.',
								'short' => 'u',
							),
						'refresh' => array
							(
								'description' => 'Re-install; Uninstall + Install.',
								'short' => 'r',
							),
						'list' => array
							(
								'description' => 'List all versions. (default)',
							),
					),
			),
	);
