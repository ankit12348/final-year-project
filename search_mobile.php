<?php
include("class/users.php");
$mobile = new users;
$s = $_SESSION['s'];
$mobile->file($s);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		.m1
		{
			font-weight: 800;
			font-size: 1.5em;
		}
		.m1.letter
		{
			display: inline-block;
			line-height: 1em;
		}
	</style>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-9790665615066712",
			enable_page_level_ads: true
		});
	</script>

	<title>ecompetitivetest.com</title>
	<link rel="icon" href="image/project.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><h3 class="m1"><font color="purple">ecompetitivetest.com</font></h3></center>
	<div class="container">
		<?php
		$i=1;
		foreach ($mobile->doc as $pdf) 
			{?>
				<br>
				<?php echo "$i";?>&emsp;
				<?php
				$doc = $pdf['document'];
				echo chop($doc, ".pdf");
				?>
				<a href="http://docs.google.com/gview?embedded=true&url=http://www.ecompetitivetest.com/document/<?php echo rawurldecode($pdf['document']);?>">&nbsp;<i>View eBook</i></a>

				<?php
				$i++;
			}?>
		</div>
		<br>
	</body>
</html>