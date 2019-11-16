<!DOCTYPE html>
<html>
<head>
	<title>SPONGE BOB MOCKING MEME PHP </title>
	<meta name="description" content="Sponge bob mocking meme made with PHP"/>
	<meta name="keywords" content="spongebob,github,sponge bob meme,spongebobmeme,mocking,spongebobmockingmeme,sponge bob mocking meme, php, made" />
	<link rel="icon" href="http://images6.fanpop.com/image/photos/38200000/Spongebob-Icon-spongebob-squarepants-38211111-200-200.jpg">

</head>
<?php
$nuralform ='<body><center>
<h1 style="color: #ffce00;">SPONGE BOB MOCKING MEME</h1>
<form action="index.php" method="POST">
	
	<!--<input style="width: 1000px; height: 100px;" type="text" name="tt" placeholder="Place your text here" required>-->
	 <textarea style="width: 1000px; height: 100px;"name="tt">%s</textarea><br><br>
	<input style="font-size: 30px;"type="submit" name="bruh"><br>
</form>

</center>
</body>
</html>';

echo sprintf($nuralform,"");

if(empty($_POST)||$_POST['tt']=="")
	{echo "";
}else
{	$t="";
	extract($_POST);
	$t = strtoupper($tt);
	$b ='';
	$i=-1;
	if (strlen($t)%2 ==0){$t .="";}
	while ( $i < strlen($t)) {
		$i++;
		$b .= $t[$i];
		$i++;
		if ($i!==strlen($t)){	
			$b .= strtolower($t[$i]);	
		}
	}
	ob_end_clean();

	//echo ' <input type="text" value="'.$b.'">' ;
	echo sprintf($nuralform,$b);
	//echo '<br><center> <textarea style="width: 100%; height: 100px;">'.$b.'</textarea> </center>' ;
	}


?>