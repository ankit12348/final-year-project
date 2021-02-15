<?php
include ("class/users.php");
$ans = new users;
$answer = $ans-> answer($_POST);



?>

<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		.m1
		{
			font-weight: 900;
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
	<br>
	<?php
	$total = $answer['right'] + $answer['wrong'] + $answer['no_ans'];
	$attempt = $answer['right'] + $answer['wrong'];
	$marks = $total * 4;
	$correct = $answer['right'] * 4;
	$minus = $answer['wrong'] * 2;
	$rest = $correct - $minus;
	$percentage = (100 * $rest) / $marks;
	?>

	<center><h3 class="m1"><font color="purple">ecompetitivetest.com</font></h3></center><br>      
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				
				<table class="table">
					<thead>
						<tr>
							<th>Total number of questions:</th>
							<th><?php echo $total; ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Attempted questions:</td>
							<td><?php echo $attempt; ?></td>
						</tr>
						<tr>
							<td>Right answers:</td>
							<td><?php echo $answer['right']; ?></td>
						</tr>
						<tr>
							<td>Wrong answers:</td>
							<td><?php echo $answer['wrong']; ?></td>
						</tr>
						<tr>
							<td>Total percentage:</td>
							<td><?php echo $percentage; ?>%</td>
						</tr>
						<tr>
							<td>Need all answers?</td>
							<td><i><a href="right_ans">Answers</a></i></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-3"></div>
		</div>
		<br>
		<center>Try again?<i><a href="home"> Click here</a></i></center>
	</div>
</body>
</html>