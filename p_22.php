<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	echo("*");
	for($pcol=2;$pcol<=$prow;$pcol++) {
		echo(" ");	
	}
	
	for($pcol=0;$pcol<=5-$prow;$pcol++){
		echo($prow);
	}
	for($pcol=0;$pcol<=4-$prow;$pcol++){
		echo($prow);
	}
	for($pcol=2;$pcol<=$prow;$pcol++) {
		echo(" ");	
	}
	echo("*");
	echo "<br/>";
}
?></pre></body>