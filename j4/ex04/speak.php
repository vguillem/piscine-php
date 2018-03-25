<?php
session_start();
if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] !== "" && $_POST['msg'] && $_POST['msg'] !== "")
{
	if (!file_exists('../private'));
		mkdir("../private");
	if (file_exists('../private/chat'));
	{
		$file = unserialize(file_get_contents("../private/chat"));
	}
	$t['login'] =$_SESSION['loggued_on_user'];
	$t['time']= time();
	$t['msg']= $_POST['msg'];
	$file[] = $t;
	file_put_contents("../private/chat", serialize($file));
}
?>
<html>
<head>
<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
<form method="POST" action=speak.php >
msg: <input type='text' name='msg' value=''/>
<br />
<input type='submit' name='submit' value='OK'>
</form>
</html></body>
