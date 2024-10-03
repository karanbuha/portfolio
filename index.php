<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
</head>
<body>
<?php include 'json.php' ?>

<?php
foreach ($data as $person) {
    $person['name'];
	$person['cms'];
	$person['img'];
	$person['link'];
	$person['company'];
	$person['desc'];
}
?>

</body>
</html>