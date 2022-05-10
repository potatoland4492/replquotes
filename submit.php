<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Quotebag</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	Quote added: "<?php echo $_POST["quote"] ?>" —<?php echo $_POST["name"] ?>, <?php echo $_POST["year"] ?>
	<br><br>
	You will be redirected within 5 seconds of the page loading.
  <script>
		setTimeout(function () { window.location.href = "/"; }, 5000);
	</script>
	<?php
			$file = fopen("quotebag.txt", "a") or die("Failed to write file");
			$txt =  "\"$_POST[quote]\" —$_POST[name], $_POST[year]\n";
			fwrite($file, $txt);
			fclose($file);
		?>
</body>

</html>