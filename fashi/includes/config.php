<?php
	if(isset($_GET["show"])) 
	{
		$row = $_GET["show"];
	}
	else {$row = $_GET["show"];}

	if($row = "show_detail")
	{
		include ("show_detail.php");
	}
?>