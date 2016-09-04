<?php
final class SignController extends Controller
{
	public function __construct()
	{
		$this->_model = new SignModel();
		parent::__construct();
	}

	//Действие по умолчанию
	public function ActionIndex()
	{
		if(isset($_SESSION["user"]))
			$this->_view->Generate('auth_view.php', 'main_view.php', $data);
		else
			$this->_view->Generate('sign_up_view.php', 'main_view.php', $data);
	}

	//Регистрация
	public function ActionUp()
	{
		if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"]) &&
		   isset($_POST["sex"]) && isset($_POST["birthday"])) {

			$firstName = $_POST["firstName"];
			$lastName  = $_POST["lastName"];
			$email     = $_POST["email"];
			$sex       = $_POST["sex"];
			$birthday  = $_POST["birthday"];

			$this->_model->SignUp($firstName, $lastName, $email, $sex, $birthday);

			header('Location: http://bwt-test.local/Weather/Index/');

		}else if(isset($_SESSION["user"])) {

			$this->_view->Generate("auth_view.php", "main_view.php", $data);

		}else {

			header('Location: http://bwt-test.local/Sign/Index/');
		}
	}

	//Вход на сайт
	public function ActionIn()
	{
		if(isset($_POST["email"])) {

			$email = $_POST["email"];

			$user  = $this->_model->SignIn($email);

			if($user) {

				$_SESSION["user"] = $user;
				header('Location: http://bwt-test.local/Weather/Index/');

			}else {

				echo "Такого пользователя не существует";
				exit;

			}

		}else if(isset($_SESSION["user"])) {

			$this->_view->Generate("auth_view.php", "main_view.php", $data);

		}else {

			header('Location: http://bwt-test.local/Sign/Index/');
		}
	}

	//Выход с сайта
	public function ActionOut()
	{
		session_destroy();
		header('Location: http://bwt-test.local/');
	}
}
?>