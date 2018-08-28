<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=3;$prow++) {
	for($pcol=1;$pcol<=3-$prow;$pcol++) {
		
		echo(" ");
	}
	for($pcol=1;$pcol<=$prow;$pcol++){
		echo("*");
	}
	for($pcol=2;$pcol<=$prow;$pcol++){
		echo("*");
	}
	for($pcol=1;$pcol<=3-$prow;$pcol++) {
		
		echo(" ");
	}
	echo "<br/>";
}
for($prow=2;$prow>=1;$prow--) {
	for($pcol=1;$pcol<=3-$prow;$pcol++) {
		echo(" ");
	}
	
	for($pcol=1;$pcol<=$prow;$pcol++){
		echo("*");
	}
	
	for($pcol=2;$pcol<=$prow;$pcol++){
		echo("*");
	}
	for($pcol=1;$pcol<=3-$prow;$pcol++) {
		echo(" ");
	}
	echo "<br/>";
}
?></pre></body>