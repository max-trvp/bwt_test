<?php
final class FeedbackController extends Controller
{
	public function __construct()
	{
		$this->_model = new FeedbackModel();
		parent::__construct();
	}

	//Действие по умолчанию
	public function ActionIndex()
	{
		if(isset($_SESSION["user"]))
			$this->_view->Generate('feedback_view.php', 'main_view.php', $data);
		else
			$this->_view->Generate('feedback_guest_view.php', 'main_view.php', $data);
	}

	//Отправка сообщения
	public function ActionSend()
	{
		//Если пользователь авторизован, отправляем сообщение с помощью метода 'SendFeedback'
		if(isset($_SESSION["user"])) {

			if(isset($_POST["message"]) && $_POST["capcha"] === $_SESSION["code"]) {

				$message = $_POST["message"];

				$this->_model->SendFeedback($_SESSION["user"], $message);

			}else {

				echo "Не верно введен код с картинки. Вернитесь назад и повторите ввод.";
				exit;

			}
		}else {

			//Иначе, отправка сообщения происходит с помощью метода 'SendGuestFeedback'
			if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])
			   && $_POST["capcha"] === $_SESSION["code"]) {

				$name    = $_POST["name"];
				$email   = $_POST["email"];
				$message = $_POST["message"];

				$this->_model->SendGuestFeedback($name, $email, $message);

			}else {

				echo "Не верно введен код с картинки. Вернитесь назад и повторите ввод.";
				exit;
				
			}
		}

		header('Location: http://bwt-test.local/Feedback/Index/');
	}
}
?>