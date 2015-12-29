<?php

class DATABASE_CONFIG {
    public function __construct() {
        $this->default['host'] = getenv('MYSQL_PORT_3306_TCP_ADDR');
        $this->default['password'] = getenv('MYSQL_ROOT_PASSWORD');
        $this->test['host'] = getenv('MYSQL_PORT_3306_TCP_ADDR');
        $this->test['password'] = getenv('MYSQL_ROOT_PASSWORD');
    }

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'login' => 'root',
		'database' => 'trpg',
		'encoding' => 'utf8'
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'login' => 'root',
		'database' => 'trpg_test',
		'encoding' => 'utf8mb4'
	);
}
