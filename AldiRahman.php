<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exanthenon</title>
	<style>
		.kotak {
			width: 60px;
			height: 75px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear { clear: both; }
	</style>
</head>
<body>

		
	<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
	<div class="kotak"><?php echo $angka[$i]; ?></div>
	<?php } ?>
	
<div class="clear"></div>

	<?php foreach ($angka as $a) { ?>
	<div class="kotak"><?php echo $a; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<?php foreach ( $angka as $a ) : ?>
	<div class="kotak"><?= $a; ?></div>
	<?php endforeach ?>
	
</body>
</html>

<?php
$angka = [3,2,15,20,11,77,89,8,7];

?>
