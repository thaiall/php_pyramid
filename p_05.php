<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=4;$prow++) {
	for($pcol=1;$pcol<=4-$prow;$pcol++) {
	echo(" ");
	}
	echo($prow);
	for($pcol=2;$pcol<=$prow;$pcol++){
	echo("**");
	}
	echo($prow);
	echo "<br/>";
}
for($prow=3;$prow>=1;$prow--) {
	for($pcol=1;$pcol<=4-$prow;$pcol++) {
	echo(" ");
	}
	echo($prow);
	for($pcol=2;$pcol<=$prow;$pcol++){
	echo("**");
	}
	echo($prow);
	echo "<br/>";
}
?></pre></body>