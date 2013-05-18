<?php return array
	(
		'bower' => array
			(
				'category' => 'Legacy',
				'description' => array
					(
						'Deprecated.',
						'This task is only available for backwards compatibility. The practices suggested by bower will create a dependency nightmare. Please avoid using bower if at all possible.',
						'-',
						'Search and execute all brower dependencies',
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
	);
