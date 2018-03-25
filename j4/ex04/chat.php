<?php
session_start();
if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'])
{
	if (!file_exists('../private'));
		mkdir("../private");
	if (file_exists('../private/chat'));
	{
		$file = unserialize(file_get_contents("../private/chat"));
		foreach($file as $tab)
		{
			echo date("D d, M H:i:s", $tab['time'])."  ".$tab['login'].": ".$tab['msg']."<br />";
		}
	}
}
