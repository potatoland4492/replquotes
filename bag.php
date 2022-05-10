<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Quotebag</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onload="document.getElementsByClassName('focus')[0].focus();">
	<button class="focus" onclick="window.location='/';">Main Page</button>
	<br><br>
	<div id="quotebag-fetch">
		<?php
			$file = fopen('quotebag.txt', 'r') or die("Failed to read file");
			echo nl2br(fread($file, filesize('quotebag.txt')));
			fclose($file);
		?>
	</div>
</body>

</html>