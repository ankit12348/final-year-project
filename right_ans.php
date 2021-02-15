<?php
include ("class/users.php");
$ans = new users;
$ans->ans_show($_SESSION['cat']);

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
	<center><h3 class="m1"><font color="purple">ecompetitivetest.com</font></h3></center><br>     
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<?php
				$i=1;
				foreach ($ans->ansr as $right) {
					?>   
					<table class="table">
						<thead>
							<tr>
								<th><textarea class="form-control" rows="5" disabled>&nbsp;<?php echo($i);?>&emsp;<?php echo $right['question'];?></textarea></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>&nbsp;1&emsp;&nbsp;&nbsp;<?php echo $right['ans1']; ?></td>
							</tr>
							<tr>
								<td>&nbsp;2&emsp;&nbsp;&nbsp;<?php echo $right['ans2']; ?></td>
							</tr>
							<tr>
								<td>&nbsp;3&emsp;&nbsp;&nbsp;<?php echo $right['ans3']; ?></td>
							</tr>
							<tr>
								<td>&nbsp;4&emsp;&nbsp;&nbsp;<?php echo $right['ans4']; ?></td>
							</tr>
							<tr>
								<td>&nbsp;Answer:&nbsp;<?php echo $right['right_ans']; ?></td>
							</tr>
						</tbody>
					</table>
					<?php $i++; }?>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<br>
			<center>Return home?<i><a href="home"> Click here</a></i></center>
			<br>
			<br>
		</div>
	</body>
	</html>
