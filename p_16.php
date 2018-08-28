<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	
	for($pcol=$prow;$pcol>=1;$pcol--){
		echo($pcol);
	}
	for($pcol=1;$pcol<=5-$prow;$pcol++){
		echo("  ");
	}
	for($pcol=$prow;$pcol>=1;$pcol--){
		echo("*");
	}
	echo "<br/>";
}
?></pre></body>