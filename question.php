<?php
include("class/users.php");
$question = new users;
$cat = $_POST['cat'];
$question->questions($cat);
$_SESSION['cat'] = $cat;

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

	<script type="text/javascript">
		function timeout()
		{
			var minute = Math.floor(timeleft/60);
			var second = timeleft%60;
			var sec = checktime(second);
			var min = checktime(minute)
			if(timeleft<=0)
			{
				clearTimeout(tym);
				document.getElementById("form1").submit();
			}
			else
			{
				document.getElementById("time").innerHTML=min+":"+sec;
			}
			timeleft--;
			var tym = setTimeout(function() {timeout()}, 1000);
		}
		function checktime(msg)
		{
			if(msg<10)
			{
				msg="0"+msg;
			}
			return msg;
		}
		
	</script>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-9790665615066712",
			enable_page_level_ads: true
		});
	</script>

	<title>ecompetitivetest.com</title>
	<link rel="icon" href="image/project.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body onload="timeout();">
	<center><h3 class="m1"><font color="purple">ecompetitivetest.com</font></h3></center>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				
				<script type="text/javascript">
					var timeleft = 25*60;
				</script>

				<div id="time" style="float: right;">timeout</div>
				<br>
				<br>
				<form action="answer" method="post" id="form1">
					<?php
					if(isset($question->que))
					{
						if(sizeof($question->que) == "25")
						{
							$i=1;
							foreach ($question->que as $qust) {
								?>                  
								<table class="table table-hover">
									<thead>
										<tr>
											<th><textarea class="form-control" rows="5" disabled>&nbsp;<?php echo($i);?>&emsp;<?php echo $qust['question'];?></textarea></th>
										</tr>
									</thead>
									<tbody>
										<?php if(isset($qust['ans1'])){?>
											<tr>
												<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id'];?>" />&nbsp;&nbsp;<?php echo $qust['ans1'];?></td>
											</tr>
										<?php }?>
										<?php if(isset($qust['ans2'])){?>
											<tr>
												<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id'];?>" />&nbsp;&nbsp;<?php echo $qust['ans2'];?></td>
											</tr>
										<?php }?>
										<?php if(isset($qust['ans3'])){?>
											<tr>
												<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id'];?>" />&nbsp;&nbsp;<?php echo $qust['ans3'];?></td>
											</tr>
										<?php }?>
										<?php if(isset($qust['ans4'])){?>
											<tr>
												<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id'];?>" />&nbsp;&nbsp;<?php echo $qust['ans4'];?></td>
											</tr>
										<?php }?>
										<tr>
											<td><input checked="checked" style="display: none" type="radio" value="No_Attempt" name="<?php echo $qust['id'];?>" /></td>
										</tr>
									</tbody>
								</table>
								<?php $i++;} }
								else
								{
									header("location: javascript://history.go(-1)");
								} }
								else{
									header("location: javascript://history.go(-1)");
								}?>
								<center><button type="submit" class="btn btn-success">Submit</button></center><br></br>
							</form>
						</div>
						<div class="col-sm-2"></div>
					</div>
				</div>
			</body>
			</html>
