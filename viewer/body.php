<div >
<?php

	if(isset($_GET['url']))
	{
		$one = $_GET['url'];
		require("viewer/html/".$one.".php");
	}
	else
	{
		require("viewer/html/empty.php");
	}
?>
</div>
