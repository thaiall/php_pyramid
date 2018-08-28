<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=7;$prow++) {
	for($pcol=2;$pcol<=1+$prow;$pcol++) {
	echo(" ");
	}
	for($pcol=1;$pcol<=1;$pcol++){
		echo($pcol);
	}
	for($pcol=$prow;$pcol<=6;$pcol++){
		echo("01");
	}
	echo "<br/>";
}
?></pre></body>