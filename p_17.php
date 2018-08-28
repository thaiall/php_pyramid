<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	for($pcol=$prow;$pcol<=$prow;$pcol++) {
		echo($pcol);
		echo(10-$prow);
		echo($pcol);
		echo(10-$prow);
		echo($pcol);
		echo(10-$prow);
		echo($pcol);
		echo(10-$prow);
	}
	echo "<br/>";
}
?></pre></body>