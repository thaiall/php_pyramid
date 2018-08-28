<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=4;$prow++) {
	for($pcol=$prow;$pcol<=$prow;$pcol++) {
		echo($pcol);
	}
	for($pcol=$prow;$pcol<=$prow;$pcol++) {
		echo($pcol+4);
	}
	
	for($pcol=0;$pcol<=3+$prow;$pcol++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?></pre></body>