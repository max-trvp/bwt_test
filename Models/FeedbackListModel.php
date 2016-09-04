<?php
class FeedbackListModel extends Model
{
	public function GetData()
	{
		$stmt = $this->_db->query("SELECT name, message FROM feedback WHERE name = '" . $_SESSION["user"] . "'");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $stmt->fetch()) {

			$res[] = $row;
			
		}

		return $res;
	}
}
?>