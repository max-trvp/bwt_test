<?php
class SignModel extends Model
{
	public function GetData()
	{
		//
	}

	//Метод авторизации
	public function SignIn($email)
	{
		$email = $this->Clean($email);
		$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

		if(!empty($email) && $validEmail) {

			$stmt = $this->_db->prepare("SELECT first_name FROM users WHERE email = ?");
        	$stmt->execute([$email]);

        	$stmt->setFetchMode(PDO::FETCH_OBJ);
        	$row = $stmt->Fetch();

        	if($row)
        		return $row->first_name;
        	else
        		return false;

		}
	}

	//Метод регистрации
	public function SignUp($fName, $lName, $email, $sex, $bDay)
	{
		$fName = $this->Clean($fName);
		$lName = $this->Clean($lName);
		$email = $this->Clean($email);
		$sex   = $this->Clean($sex);
		$bDay  = $this->Clean($bDay);

		$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

		$stmt = $this->_db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $stmt->setFetchMode(PDO::FETCH_OBJ);
        
        if(!$row = $stmt->Fetch()) {

        	if(!empty($fName) && !empty($lName) && !empty($email) && $validEmail) {
			$stmt = $this->_db->prepare("INSERT INTO users (first_name, last_name, email, sex, birthday) VALUES (?, ?, ?, ?, ?)");
        	$stmt->execute(array($fName, $lName, $email, $sex, $bDay));

        	$_SESSION["user"] = $fName;

			}
        }else {

        	echo "Пользователь с таким email уже зарегистрирован!";
        	exit;
        	
        }
	}
}
?>