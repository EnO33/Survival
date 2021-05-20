<?php
class Config {

	# @var, _title variable.
	private $_title;

	# @var, _conf, used to store the decoded configuration. 
	private $_conf;

	# @var, _config_file, path to the configuration json file.
	private $_config_file = "core/config.json";


	/**
	*   Default Constructor 
	*
	*	Populate the @var _conf the decoded json content of the configuration file specified int the @var _config_file.
	*
	*/

	public function __construct() {
		$this->_conf = json_decode(file_get_contents($this->_config_file));
	}

	/**
	*	This method returns the title stored in the configuration file.
	*
	*	@return string title
	*	
	*	1. Return the stored title.
	*
	*/

	public function getTitle() {
		return $this->_conf->config->title;
	}

	/**
	*	This method returns the racine stored in the configuration file.
	*
	*	@return string racine
	*	
	*	1. Return the stored racine.
	*
	*/

	public function getRacine() {
		return $this->_conf->config->racine;
	}


	//			╭───────────────────────────────────╮
	//			|		Debug configuration			|
	//			╰───────────────────────────────────╯
	//



	/**
	*	This method returns the debug stored in the configuration file.
	*
	*	@return string debug
	*	
	*	1. Return the stored debug.
	*
	*/

	public function getDebug() {
		return $this->_conf->debug;
	}


	//			╭───────────────────────────────────╮
	//			|		Database configuration		|
	//			╰───────────────────────────────────╯
	//



	/**
	*	This method returns the database address stored in the configuration file.
	*
	*	@return string database address
	*	
	*	1. Return the stored database address.
	*
	*/

	public function getDbAddress() {
		return $this->_conf->database->address;
	}

	/**
	*	This method returns the database name stored in the configuration file.
	*
	*	@return string database name
	*	
	*	1. Return the stored database name.
	*
	*/

	public function getDbname() {
		return $this->_conf->database->dbname;
	}

	/**
	*	This method returns the database user stored in the configuration file.
	*
	*	@return string database user
	*	
	*	1. Return the stored database user.
	*
	*/

	public function getDbUser() {
		return $this->_conf->database->user;
	}

	/**
	*	This method returns the database password stored in the configuration file.
	*
	*	@return string database password
	*	
	*	1. Return the stored database password.
	*
	*/

	public function getDbPass() {
		return $this->_conf->database->password;
	}
	
}