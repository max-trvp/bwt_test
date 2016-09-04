<?php
abstract class Controller
{
	protected $_model;
	protected $_view;

	public function __construct()
	{
		$this->_view = new View();
	}

	public abstract function ActionIndex();
}
?>