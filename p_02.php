<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=4;$prow++) {
	for($pcol=$prow;$pcol<=$prow+2;$pcol++) {
		echo($pcol);
	}
	
	for($pcol=0;$pcol<=1+$prow;$pcol++){
		echo("*");	
	}
	
	echo "<br/>";
}
?></pre></body>