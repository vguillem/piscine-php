<?PHP
if ($_GET['id'] && $_GET['value'])
{
	$id = $_GET['id'];
	$va = $_GET['value'];
	$re = $id . ';' . $va . "\n";
	file_put_contents('stoc.csv', $re, FILE_APPEND);
}
?>
