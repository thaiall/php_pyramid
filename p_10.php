<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	for($pcol=1;$pcol<=5-$prow;$pcol++) {
	echo(" ");
	}
	for($pcol=1;$pcol<=$prow;$pcol++){
		echo($pcol);
	}
	for($pcol=$prow;$pcol<=$prow;$pcol++){
		echo(6-$prow);
	}
	for($pcol=$prow;$pcol>=1;$pcol--){
		echo($pcol);
	}
	echo "<br/>";
}
?></pre></body>