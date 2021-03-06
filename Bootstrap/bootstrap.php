<?php

	/**
	 * @author Jeremy Hise <jeremy.hise@gmail.com>
	 * @copyright (c) 2014, Jeremy Hise
	 */

	/*
	 * Assume you store your models in a models folder
	 */

	$locations	= array(get_include_path(),
				"models",
				"src"
				);

	$include_path = implode(":", $locations);
	set_include_path($include_path);

	/*
	 * Specify the autoload method
	 */
	spl_autoload_register("bootstrap::autoload");
	
	/*
	 * Base bootstrap class for default autoload method.
	 */
	class bootstrap
	{	
		/*
		 * The autoload method that performs Zend style naming
		 * @param string $class_name
		 */
		public static function autoload($class_name)
		{
			$filename = str_replace("_", "/", $class_name).".php";
			@include_once($filename);
		}
	}
