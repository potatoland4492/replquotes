<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Quotebag</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onload="document.getElementsByClassName('focus')[0].focus();">
	<button onclick="window.location.href='bag.php';">View all quotes</button>
	<button onclick="window.location.href='quote.php';">Add a quote</button>
	<br><br>
	<input class="text-number focus" id="text" type="text" value="This is what a text input looks like."><span class="prompt">&#60;{?}&#62;</span><br>
	<input class="text-number" id="number" type="number" value="1234"><span class="prompt">&#60;{#}&#62;</span><br>
	<script>
		setInterval(function () {
			let text = document.getElementById('text');
			text.style.width = `${text.value.length}ch`;
			let number = document.getElementById('number');
			number.style.width = `${number.value.length+1}ch`;
		}, 1);
	</script>
</body>

</html>