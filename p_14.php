<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	for($pcol=2;$pcol<=0+$prow;$pcol++) {
		echo(" ");
	}
	
	for($pcol=$prow;$pcol<=$prow;$pcol++) {
		echo($prow);
	}
	
	echo($prow+1);
	for($pcol=1;$pcol<=5-$prow;$pcol++){
		echo("  ");
	}
	
	for($pcol=$prow;$pcol<=$prow;$pcol++) {
		echo($prow+1);
	}
	
	echo($prow);
	
	echo "<br/>";
}
?></pre></body>