<?php $db = mysqli_connect('localhost', 'root', '', 'crud');
	if(!$db)
	{
		echo 'server not connected';
	}
	if(!mysqli_select_db($db,'crud')){
		echo 'database not selected';
	} ?>