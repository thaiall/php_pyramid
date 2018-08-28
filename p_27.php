<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
for($prow=1;$prow<=5;$prow++) {
	echo($prow);
	for($pcol=1;$pcol<=$prow;$pcol++) {
		echo(" ");	
	}
	
	for($pcol=1;$pcol<=$prow;$pcol++) {
		echo("*");	
	}
	echo "<br/>";
}
?></pre></body>