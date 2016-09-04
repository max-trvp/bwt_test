<?php
if(is_array($data)) {
	foreach($data as $item) {
		echo "<p id='name'><strong>" . $item["name"] . "</strong>:<p/>
		      <p>" . $item["message"] . "<hr />";
	}
}else {
	echo "Вы еще не пользовались обратной связью.";
}