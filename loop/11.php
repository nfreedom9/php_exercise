<html>
<body>
<?php
for($i = 0; $i < 10; $i++){
	if($i === 3 or $i === 7 or $i === 2 or $i === 5){
		continue;
	}
	echo "coding everybody {$i}<br />";
}

?>
</body>
</html>