<?php
class FeedbackModel extends Model
{
	public function GetData()
	{
		//
	}

	//Метод обратной связи для зарегистрированного пользователя
	public function SendFeedback($name, $message)
	{
		$message = $this->Clean($message);

		if(!empty($message)) {

			$stmt = $this->_db->query("SELECT id, email FROM users WHERE first_name = '" . $name . "'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			$row = $stmt->fetch();

			$stmt = $this->_db->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
        	$stmt->execute(array($name, $row["email"], $message));

		}
	}

	//Метод обратной связи для гостей
	public function SendGuestFeedback($name, $email, $message)
	{
		$name    = $this->Clean($name);
		$email   = $this->Clean($email);
		$message = $this->Clean($message);

		$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

		if(!empty($name) && !empty($email) && !empty($message) && $validEmail) {

			$stmt = $this->_db->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
        	$stmt->execute(array($name, $email, $message));
        	
		}
	}
}
?>