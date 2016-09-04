<?php
final class WeatherController extends Controller
{
	public function __construct()
	{
		$this->_model = new WeatherModel();
		parent::__construct();
	}

	//Действие по умолчанию
	public function ActionIndex()
	{
		if(isset($_SESSION["user"])) {

			$data = $this->_model->GetData();
			$this->_view->Generate('weather_view.php', 'main_view.php', $data);

		}else {

			$this->_view->Generate('no_auth_view.php', 'main_view.php', $data);
			
		}
	}
}
?>