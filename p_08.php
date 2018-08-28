<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=7;$prow++) {
	for($pcol=3;$pcol<=1+$prow;$pcol++) {
	echo(" ");
	}
	for($pcol=$prow;$pcol<=$prow;$pcol++){
		echo($prow);
		echo($prow+1);
		echo($prow+2);
	}
	for($pcol=2;$pcol<=2+$prow;$pcol++){
		echo("*");
	}
	echo "<br/>";
}
?></pre></body>