<?php $db = mysqli_connect('localhost', 'root', '', 'test');
	if(!$db)
	{
		echo 'server not connected';
	}
	if(!mysqli_select_db($db,'test')){
		echo 'database not selected';
	} ?>