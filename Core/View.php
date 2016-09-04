<?php
class View
{
	public function Generate($contentView, $templateView, $data = null)
	{
		include 'Views/'.$templateView;	
	}
}
?>