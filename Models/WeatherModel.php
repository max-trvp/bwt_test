<?php
class WeatherModel extends Model
{
	public function GetData()
	{
		if($html = file_get_html(ZP)) {

			$html->find('.higher');

	        $header    = $html->find('.header')[0]->plaintext;                // Погода
	        $city      = $html->find('.typeM')[0]->plaintext;                 // Город
	        $temp      = $html->find('.temp dd')[0]->plaintext;               // Темпертура
	        $cloudness = $html->find('.cloudness td')[0]->plaintext;          // Облачность
	        $wind      = $html->find('.wind dd')[0]->plaintext;               // Ветер
	        $bar       = $html->find('div[title=Давление] dd')[0]->plaintext; // Давление

	        return array(
	            'header' => $header,
	            'city' => $city,
	            'temp' => $temp,
	            'cloudness' => $cloudness,
	            'wind' => $wind,
	            'bar' =>$bar);

		}else {

			return "Отсутствует соединение с интернетом.";

		}
	}
}
?>