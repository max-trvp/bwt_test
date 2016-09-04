<?php
class Route
{
	private $_controllerName = ''; //Имя контроллера
	private $_controllerFile = ''; //Имя файла контроллера
	private $_controllerPath = ''; //Путь к файлу контроллера
	private $_modelName	     = ''; //Имя модели
	private $_modelFile 	 = ''; //Имя файла модели
	private $_modelPath 	 = ''; //Путь к файлу модели
	private $_actionName     = ''; //Имя действия
	private $_routes 		 = ''; //Массив данных, для извлечения названий контроллера и действия

	//Метод запуска маршрутизации
	public static function Start()
	{
		$_routes         = explode('/', $_SERVER['REQUEST_URI']);
		$_controllerName = 'Sign';  //Контроллер по умолчанию
		$_actionName     = 'Index'; //Действие по умолчанию

		if(!empty($_routes[1]))
			$_controllerName = ucfirst($_routes[1]);

		if(!empty($_routes[2]))
			$_actionName = ucfirst($_routes[2]);

		//Добавляем префиксы
		$_modelName       = $_controllerName . 'Model';
		$_controllerName .= 'Controller';
		$_actionName      = 'Action' . $_actionName;

		/*
		Формирование расширения файла контроллера
		Получение пути к файлу контроллера
		*/
		$_controllerFile = $_controllerName . '.php';
		$_controllerPath = 'Controllers/' . $_controllerFile;

		try
		{
			if(file_exists($_controllerPath)) {

				include 'Controllers/' . $_controllerFile;;

			}
			else {

				throw new Exception('Контроллер не найден');

			}
		}
		catch(Exception $e) {

			$e->getMessage();

		}

		/*
		Формирование расширения файла модели
		Получение пути к файлу модели
		*/
		$_modelFile = $_modelName . '.php';
		$_modelPath = 'Models/' . $_modelFile;

		//Если существует файл модели - подключаем его
		if(file_exists($_modelPath))
			include 'Models/' . $_modelFile;

		//Создаем контроллер
		$controller = new $_controllerName;
		$action     = $_actionName;

		//Если сформированное действие найдено в контроллере - запускаем его, иначе перенаправляем на главню страницу
		if(method_exists($controller, $action)) {

			$controller->$action();

		}
		else {

			header('Location: http://bwt-test.local/Sign/Index/');
			
		}
	}
}
?>