<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	for($pcol=$prow;$pcol<=$prow;$pcol++) {
		echo($pcol);	
	}
	for($pcol=1;$pcol<=$prow;$pcol++) {
		echo("*");
	}
	echo($pcol-1);
	for($pcol=1;$pcol<=6-$prow;$pcol++) {
		echo("*");
	}
	echo($pcol+3);
	echo "<br/>";
}
?></pre></body>