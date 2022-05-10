<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Quotebag</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onload="document.getElementsByClassName('focus')[0].focus();">
	<button onclick="window.location.href='/';">Main Page</button>
	<br><br>
	<form id="quoteform" action="submit.php" method="POST">
		<input type="text" class="text-number focus" name="quote" id="quote" value="Contents of the quote (do not add quotation marks)"><span class="prompt">&#60;{?}&#62;</span><br>
		<input type="text" class="text-number" name="name" id="name" value="Person Being Quoted">&#60;{?}&#62;<br>
		<input type="number" class="text-number" name="year" id="year" value="2022" style="width:5ch;"><span class="prompt">&#60;{#}&#62;</span><br>
		<input type="submit" value="Submit quote">
	</form>
	<script src="https://cdn.jsdelivr.net/gh/h2non/jsHashes@master/hashes.js"></script>
  <script>
		setInterval(function () {
			let quote = document.getElementById('quote');
			quote.style.width = `${quote.value.length}ch`;
			let name = document.getElementById('name');
			name.style.width = `${name.value.length}ch`;
			let year = document.getElementById('year');
			year.style.width = `${year.value.length}ch)`;
		}, 1);
		document.getElementById('quoteform').addEventListener('submit', (event) => {
			if (document.getElementById('quote').value.replace(/\s*/g, "") == "" || document.getElementById('name').value.replace(/\s*/g, "") == "") {
				event.preventDefault();
				alert("Enter a valid quote/name");
			}
			let SHA512 = new Hashes.SHA512;
			if (SHA512.b64(prompt("Enter auth pwd")) != "LtUtVBru37ez7chHxDF/rOG8zy29X43aWw+KntQQSc3m99x/gehoUe/7fgNr9Al1iCOFgUDhHAZuV+zrtnX2+A==") {
				event.preventDefault();
			} else {
				alert("Auth succeeded");
			}
		});
	</script>
</body>

</html>