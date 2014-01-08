<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Date and Time</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/global.css">
</head>
<body>

<div id="container">
	<div class="label">
		<h4>The current time and date:</h4>
	</div>
	<div class="time">
		<h1><?php echo $time['day'] ?></h1>
		<h1><?php echo $time['hour'] ?></h1>
	</div>
</div>
</body>
</html>