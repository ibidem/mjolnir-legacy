<?php namespace ibidem\legacy;

/**
 * @package    ibidem
 * @category   Security
 * @author     Ibidem
 * @copyright  (c) 2012, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Migration_Access extends \app\Migration_Template_MySQL
{
	/**
	 * Perform post migration binding operations between tables. 
	 */
	function bind()
	{
		$this->constraints
			(
				\app\Model_User::assoc_roles(),
				[
					'user' => array(\app\Model_User::table(), 'CASCADE', 'CASCADE'),
					'role' => array(\app\Model_Role::table(), 'CASCADE', 'CASCADE'),
				]
			);
		
		$this->constraints
			(
				\app\Model_Profile::assoc_user(),
				[
					'field' => array(\app\Model_Profile::table(), 'CASCADE', 'CASCADE'),
					'user' => array(\app\Model_User::table(), 'CASCADE', 'CASCADE'),
				]
			);
	}
	
	/**
	 * @return array
	 */
	function up()
	{
		$this->createtable
			(
				\app\Model_User::table(), 
				'
					`id`           :key_primary,
					`nickname`     :username,
					`email`        :email,
					`ipaddress`    :ipaddress,
					`passwordverifier` :secure_hash DEFAULT NULL,
					`passwordsalt` :secure_hash DEFAULT NULL,
					`passworddate` :datetime_optional DEFAULT NULL,
					`provider`     :titlename DEFAULT NULL,
					`timestamp`    :timestamp,
					
					PRIMARY KEY (`id`)
				'
			);
		
		$this->createtable
			(
				\app\Model_Role::table(), 
				'
					`id`    :key_primary,
					`title` :title NOT NULL,
					
					PRIMARY KEY (`id`)
				'
			);
		
		$this->createtable
			(
				\app\Model_User::assoc_roles(),
				'
					`user` :key_foreign NOT NULL,
					`role` :key_foreign NOT NULL,
					
					KEY `user` (`user`,`role`),
					KEY `role` (`role`)
				'
			);
		
		$this->createtable
			(
				\app\Model_Profile::table(), 
				'
					`id`       :key_primary,
					`idx`      :counter DEFAULT 10,
					`title`    :title NOT NULL,
					`type`     :title NOT NULL,
					`required` :boolean DEFAULT 0,
					
					PRIMARY KEY (`id`)
				'
			);
		
		$this->createtable
			(
				\app\Model_Profile::assoc_user(), 
				'
					`user`  :key_foreign NOT NULL,
					`field` :key_foreign NOT NULL,
					`value` :block,
					
					KEY `user` (`user`,`field`),
					KEY `role` (`field`)
				'
			);
				
		// inject roles
		$access_config = \app\CFS::config('ibidem/access');
		$roles = $access_config['roles'];
		if ( ! empty($roles))
		{
			$id = null;
			$title = null;
			$statement = \app\SQL::prepare
				(
					__METHOD__,
					'
						INSERT INTO `'.\app\Model_Role::table().'`
							(id, title) VALUES (:id, :title)
					',
					'mysql'
				)
				->bind_int(':id', $id)
				->bind(':title', $title);
			
			foreach ($roles as $desired_title => $desired_id)
			{
			
				$title = $desired_title;
				$id = $desired_id;
				$statement->execute();
			}
		}
		
		// inject openid providers
		$providers = \app\CFS::config('ibidem/a12n')['signin'];
		foreach ($providers as $provider)
		{
			\app\Register::inject($provider['register'], 'off');
		}
		
		// return a callback to binding
		return $this->bind_callback();
	}
	
	/**
	 * Tear down all tables
	 */
	function down()
	{
		$this->droptables
			(
				[
					\app\Model_User::table(), 
					\app\Model_Role::table(), 
					\app\Model_User::assoc_roles(),
					\app\Model_Profile::table(),
					\app\Model_Profile::assoc_user(),
				]
			);
	}

} # class
