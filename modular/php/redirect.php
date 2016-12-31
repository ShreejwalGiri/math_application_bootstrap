<?php 
	
	class redirect
	{
		function __construct($url)
		{
			<script style="text/javascript" >
				windows.load = "'.$url.'" ; 
			</script>
		}
	}
?>