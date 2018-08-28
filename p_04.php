<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=4;$prow++) {
	for($pcol=1;$pcol<=$prow;$pcol++) {
		echo("*");
	}
	
	for($pcol=$prow;$pcol>=2;$pcol--){
		echo($pcol);
	}
	
	for($pcol=1;$pcol<=$prow;$pcol++){
		echo($pcol);
	}
	
	echo "<br/>";
}
?></pre></body>