<?php
abstract class Model
{
	protected $_db;

	function __construct()
    {
        global $connection;
        $this->_db = $connection;
    }
	
	public abstract function GetData();

	//Примитивный метод валидации
	public function Clean($value)
	{
		$value = trim($value);
		$value = stripslashes($value);
		$value = strip_tags($value);
		$value = htmlspecialchars($value);

		return $value;
	}
}
?>