<?php

require_once("CryptoView.php");
require_once("CryptoConverter.php");

$view = new CryptoView();

if (isset($_GET["text"])) {
	$converter = new CryptoConverter($_GET["text"]);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
		<title>Crypto</title>
	</head>
	<body>
		<?php $view->show(); 
			$converter->show();
		?>
	</body>
</html>