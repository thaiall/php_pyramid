<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	for($pcol=2;$pcol<=$prow;$pcol++) {
	echo("  ");
	}
	for($pcol=11;$pcol>=11;$pcol--){
		echo($pcol-$prow-$prow);
	}
	for($pcol=10;$pcol>=6+$prow;$pcol--){
		echo($pcol-$prow-$prow);
	}
	for($pcol=5;$pcol>=1+$prow;$pcol--){
		echo($pcol-$prow);
	}
	echo "<br/>";
}
?></pre></body>